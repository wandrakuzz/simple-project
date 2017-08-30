<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggest;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lists = Suggest::latest()->get();
      $users = User::where('club_id','=',Auth::user()->club_id)->get()->count();
      $suggests = Suggest::get()->count();

      $accepts = Suggest::where('status','Accepted')->get()->count();
      $pendings = Suggest::where('status','Pending')->get()->count();
      $rejects = Suggest::where('status','Rejected')->get()->count();

      // dd($users);


        return view('dashboard.dashboard',compact('lists','users','suggests','accepts','pendings','rejects'));
    }
}
