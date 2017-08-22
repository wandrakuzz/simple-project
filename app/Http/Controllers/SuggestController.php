<?php

namespace App\Http\Controllers;

use App\Suggest;
use Auth;
use Illuminate\Http\Request;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $lists = Suggest::where('user_id',Auth::id())->latest()->get();
        return view('project.suggest',compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.suggest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Suggest $suggest)
    {
        //

        $user = auth()->user()->id;
        Suggest::create([
          'user_id' => $user,
          'title'  => $request->programname,
          'summary'=> $request->programsummary,
          'date'   => $request->programdate,
          'time'   => $request->programtime,
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function show(Suggest $suggest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggest $suggest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suggest $suggest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $suggest = Suggest::find($id)->delete();

        return back();


    }
}
