<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function dashboard()
    {
        return view('dashboard/view');
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
