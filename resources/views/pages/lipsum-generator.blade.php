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

      <form class="form-inline" method='POST' action='/lipsum-generator'>
        {{ csrf_field() }}
        <div class="form-group">
          <label for="quantity">Paragraphs:</label>
          <input type="text" class="form-control" name="quantity" value="6">
        </div>
        <button type="submit" class="btn btn-default">Generate</button>
      </form>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-12">

      @if ($quantity < 1)
        Please enter number between 1 - 99.
      @elseif ($quantity <= 99)
        <?php
          $generator = new Badcow\LoremIpsum\Generator();
          $paragraphs = $generator->getParagraphs($quantity);
          echo implode('<p>', $paragraphs);
        ?>
      @else
        Maximum number of paragraphs is 99. Please enter number between 1 - 99.
      @endif

    </div>
  </div>
@stop

@section('body')
@stop
