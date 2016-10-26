@extends('layouts.master')

@section('title')
  Developer's Best Friend
@stop

@section('head')
@stop

@section('content')
  <div class="row">
    <div class="col-md-12">
      <p class="text-left" style="padding-top:10px; font-size:1.5em"><a href="./"><i class="fa fa-home" aria-hidden="true"></i></a></p>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <h2>Random User Generator</h2>
      <form class="form-inline" method='POST' action='/user-generator'>
        {{ csrf_field() }}
        <div class="form-group">
          <label for="users">How many users?</label>
          <input type="text" class="form-control" name="users" value="6">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Birthdate
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Profile
          </label>
        </div>
        <br><br>
        <button type="submit" class="btn btn-default">Generate</button>
      </form>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">


        @foreach ($users as $user)
          <li>{{ $user }}</li>
        @endforeach
      

    </div>
  </div>
@stop

@section('body')
@stop
