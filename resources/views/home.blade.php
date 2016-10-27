@extends('layouts.master')

@section('title')
  Developer's Best Friend
@endsection

@section('head')
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Developer's Best Friend</h1>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <h2>Lorem Ipsum Generator</h2>
      <blockquote>
        <p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.</p>
        <footer><a href="https://en.wikipedia.org/wiki/Lorem_ipsum">Wikipedia</a></footer>
      </blockquote>
      <p>Generate as much text as you need for your projects.</p>
      <a href="/lipsum-generator"><button class="btn btn-primary">Generate text <i class="fa fa-file-text" aria-hidden="true"></i></button></a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <h2>Random User Generator</h2>
      <p>Like Lorem Ipsum, but for people! This generator creates a random name, birthdate, and email for each user.</p>
      <a href="/user-generator"><button class="btn btn-primary">Generate users <i class="fa fa-users" aria-hidden="true"></i></button></a>
    </div>
  </div>
@endsection

@section('body')
@endsection
