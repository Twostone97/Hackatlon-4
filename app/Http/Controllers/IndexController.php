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
        return view('polls/view');
    }

    public function create()
    {
        return view('polls/create');
    }

    public function edit()
    {
        return view('polls/edit');
    }
}
