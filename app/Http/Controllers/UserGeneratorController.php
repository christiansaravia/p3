<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;

class UserGeneratorController extends Controller
{
    /**
     * Get
     */
    public function index()
    {
      $quantity = 0;
      return view('pages.user-generator')->with('quantity', $quantity);
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

      # Generates random user data
      $quantity = $request->input('quantity');
      # quantity (number of random users requested by user) will be passed into the Faker\Factory external package logic that will generate the specified user data

      # Prints the results
      return view('pages.user-generator')->with('quantity', $quantity);
    }
}
