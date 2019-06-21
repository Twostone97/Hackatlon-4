<?php

namespace App\Http\Controllers;

use App\Option;
use DB;
use Auth;
use Illuminate\Http\Request;

class OptionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pollid)
    {
        $poll = DB::table('polls')->find($pollid);
        $options = DB::table('options')->where('poll_id', '=', $pollid)->get();
        $user_polls = DB::table('user_polls')->where([['poll_id', '=', $pollid], ['is_owner', '=', 1]])->get();
        foreach ($user_polls as $one) {
            if ($one->user_id == Auth::user()->id) {
                $canedit = true;
            } else {
                $canedit = false;
            }
        }
        return view('polls/edit', compact('options', 'poll', 'pollid', 'canedit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pollid)
    {
        $option = new Option;
        $option->Answer = $request->Answer;
        $option->poll_id = $pollid;
        $option->votes = 0;
        $option->save();

        return redirect(action('OptionController@index', compact('pollid')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }
}
