<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        return view('main');
    }

    public function dashboard()
    {
        $pollinfo = [];
        $collection = [];
        $polls = DB::table('user_polls')->where('user_id', '=', Auth::user()->id)->get();
        foreach ($polls as $poll) {
            $pollinfo[] = DB::table('polls')->find($poll->id);
            $collection[] = DB::table('options')->where('poll_id', '=', $poll->id)->get();
        }
        return view('dashboard/view', compact('polls', 'pollinfo', 'collection'));
    }

    public function polls()
    {   
        $options= DB::table('options')->get();
        $polls= DB::table('polls')->get();
        $user_polls = DB::table('user_polls')->where('user_id', '=', Auth::user()->id)->get();
        // return [$polls,$options,$user_polls];
        return view('polls/view', compact('options','polls','user_polls'));
    }

    public function create()
    {
        return view('polls/create');
    }

    public function edit()
    {
        return view('polls/edit');
    }

    public function viewpoll($pollid) {

        $poll = DB::table('polls')->find($pollid);
        $options = DB::table('options')->where('poll_id', '=', $pollid)->get();
              return view('polls/viewpoll',  compact('options', 'poll', 'pollid'));
    }

    public function vote() {
        return 'voted';
    }
}
