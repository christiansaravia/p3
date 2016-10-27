@extends('layouts.master')

@section('title')
  Developer's Best Friend
@endsection

@section('head')
@endsection

@section('content')

<!-- Start of Home Button
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
  <div class="col-md-12">
    <p class="text-left home"><a href="./">Home <i class="fa fa-home" aria-hidden="true"></i></a></p>
  </div>
</div>
<!-- End of Home Button
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<br>
<!-- Start of Lipsum Form
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
  <div class="col-md-12">
    <h2>Lorem Ipsum Generator</h2>
  </div>
  <div class="col-xs-6 col-sm-4">
    <form method="POST" action="/lipsum-generator">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="quantity">Paragraphs:</label>
        <input type="text" name="quantity" placeholder="Type number between 1 - 99" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Generate</button>
    </form>
  </div>
</div>
<!-- End of Lipsum Form
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<br>
<!-- Start of Generated Lipsum
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
  <div class="col-md-12">
    <!-- If errors are found, lists their appropriate message
    ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->
    @if($errors->get('quantity'))
      <ul class="errors">
        @foreach($errors->get('quantity') as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <!-- Uses external package logic to generate lorem ipsum text
    ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php
    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($quantity);
    echo implode('<p>', $paragraphs);
    ?>

  </div>
</div>
<!-- End of Generated Lipsum
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
@endsection

@section('body')
@endsection
