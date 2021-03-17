<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TaskController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(){
        return view('welcome');
    }

    public function store(){
        return view('');
    }

    public function destroy(){
        return view('');
    }
}
