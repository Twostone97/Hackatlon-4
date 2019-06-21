<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Option;
use App\UserPoll;

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
        $polls = DB::table('user_polls')->where([['user_id', '=', Auth::user()->id], ['is_owner', '=', 1]])->get();
        foreach ($polls as $poll) {
            $pollinfo[] = DB::table('polls')->find($poll->poll_id);
            $collection[] = DB::table('options')->where('poll_id', '=', $poll->poll_id)->get();
            $haspoll = DB::table('user_polls')->where([['user_id', '=', Auth::user()->id], ['is_owner', '=', 1]])->orderBy('is_owner', 'desc')->first();
        }
        return view('dashboard/view', compact('polls', 'pollinfo', 'collection', 'haspoll'));
    }

    public function polls()
    {   
        $options= DB::table('options')->get();
        $polls= DB::table('polls')->get();
        $user_polls = DB::table('user_polls')->where('user_id', '=', Auth::user()->id)->get();
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

        $isin = DB::table('user_polls')->where([['user_id', '=', Auth::user()->id],['poll_id', '=', $poll->id]])->orderBy('is_owner', 'desc')->first();
        if (empty($isin->id)) {
            $done = false;
        } else {
            $done = true;
        }

              return view('polls/viewpoll',  compact('options', 'poll', 'pollid', 'done'));
    }

    public function vote(Request $request, $pollid) {
        $option = Option::find($request->id);
        $option->votes++;
        $option->save();

        $user_poll = new UserPoll;
        $user_poll->user_id = Auth::user()->id;
        $user_poll->poll_id = $request->poll_id;
        $user_poll->is_owner = false;
        $user_poll->save();
        return redirect(action('IndexController@viewpoll', compact('pollid')));
    }
}
