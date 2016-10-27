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
      $users = 0;
      return view('pages.user-generator')->with('users', $users);
    }

    /**
     * Post
     */
    public function generate(Request $request)
    {
      # Validate
      $this->validate($request , [
        #'users' => 'required|min:1|max:2',
        'users' => 'required',
      ]);
      $users = $_POST['users'];
      return view('pages.user-generator')->with('users', $users);
    }
}
