<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;

class LipsumGeneratorController extends Controller
{
    /**
     * Get
     */
    public function index()
    {
      $quantity = 0;
      return view('pages.lipsum-generator')->with('quantity', $quantity);
    }

    /**
     * Post
     */
    public function generate(Request $request)
    {
      # Validate
      $this->validate($request , [
        #'quantity' => 'required|min:1|max:2',
        'quantity' => 'required',
      ]);
      $quantity = $_POST['quantity'];
      return view('pages.lipsum-generator')->with('quantity', $quantity);
    }
}
