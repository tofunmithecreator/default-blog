<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('def.dashboard');
    }

    public function base()
    {
      return view('def.base');
    }

    public function exit()
    {
      return view('def.exit');
    }
    public function exit2()
    {
      return view('def.exit2');
    }
    public function steps()
    {
      return view('def.stepping_stone');
    }
}
