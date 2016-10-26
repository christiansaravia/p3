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
      <h2>Lorem Ipsum Generator</h2>
      <p>How many paragraphs?</p>
      <p>Paragraphs: (Max: 99)</p>
      <form method='POST' action='/lipsum-generator'>
          {{ csrf_field() }}
          <input type='text' name='paragraphs'>
          <input type='submit' value='Generate'>
      </form>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">
      <?php
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs(0);
        echo implode('<p>', $paragraphs);
      ?>
    </div>
  </div>
@stop

@section('body')
@stop
