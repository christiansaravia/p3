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
      # Validation
      $this->validate($request , [
        'quantity' => 'required|integer|min:1|max:99',
      ]);

      # Generate lorem ipsum text
      $quantity = $request->input('quantity');
      # quantity (number of paragraphs requested by user) will be passed into the Badcow\LoremIpsum external package logic that will generate the lorem ipsum text

      # Prints the results
      return view('pages.lipsum-generator')->with('quantity', $quantity);
    }
}
