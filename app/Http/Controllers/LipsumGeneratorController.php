<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;

class LipsumGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
      $quantity = 0;
      return view('pages.lipsum-generator')->with('quantity', $quantity);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
      $quantity = $_POST['quantity'];
      return view('pages.lipsum-generator')->with('quantity', $quantity);
    }
}
