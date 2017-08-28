<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use App\Course;
use Auth;
use Image;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('id',Auth::user()->id)->with('club','profile')->get();
        $courses = Course::get();
        return view('profile.profile',compact('users','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $users = User::where('id',Auth::id())->with('club','profile')->get();
        $courses = Course::get();

        return view('profile.form',compact('users','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //

        $user = User::findOrFail($id);
        $profile = Profile::where('user_id', $id)->first();

        $user->email          = $request->email;
        $user->name           = $request->name;


        $profile->fullname   = $request->fullname;
        $profile->matric_no  = $request->matric_no;
        $profile->course_id  = $request->course_id;
        $profile->gender     = $request->gender;
        $profile->year       = $request->year;
        $profile->no_tel     = $request->no_tel;

        $profile->save();
        $user->save();

        return back()->with('status','Successfully update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    public function updateAvatar(Request $request)
    {


      if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/profile/avatar/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return redirect()->action('ProfileController@index');

    }


}
