@extends('layouts.master')

@section('title')
  Developer's Best Friend
@stop

@section('head')
  <style>
    body {
      font-family: 'Raleway', sans-serif;
    }
  </style>
@stop

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1 style="font-weight:300; text-align:center">Developer's Best Friend</h1>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <h2>Lorem Ipsum Generator</h2>
      <p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced. Source: <a href="https://en.wikipedia.org/wiki/Lorem_ipsum">Wikipedia</a>.</p>
      <button class="btn btn-primary">Generate some text <i class="fa fa-file-text" aria-hidden="true"></i></button>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <h2>Random User Generator</h2>
      <p>Like Lorem Ipsum, but for people!</p>
      <button class="btn btn-primary">Generate some users <i class="fa fa-users" aria-hidden="true"></i></button>
    </div>
  </div>
@stop

@section('body')
@stop
