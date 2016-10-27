@extends('layouts.master')

@section('title')
  Developer's Best Friend
@stop

@section('head')
@stop

@section('content')

<!-- Start of Home Button
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
  <div class="col-md-12">
    <p class="text-left home"><a href="./"><i class="fa fa-home" aria-hidden="true"></i></a></p>
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
    <form method="POST" action="/lipsum-generator" class="form-inline">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="quantity">Paragraphs:</label>
        <input type="text" name="quantity" value="6" class="form-control">
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
    @if ($quantity >= 1 && $quantity <=99)
      <?php
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($quantity);
        echo implode('<p>', $paragraphs);
      ?>
    @elseif ($quantity < 1)
      Please enter number between 1 - 99.
    @else
      Maximum number of paragraphs is 99. Please enter number between 1 - 99.
    @endif
  </div>
</div>
<!-- End of Generated Lipsum
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
@stop

@section('body')
@stop
