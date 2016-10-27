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
  <div class="col-md-12 home">
    <p class="text-left"><a href="./">Home <i class="fa fa-home" aria-hidden="true"></i></a></p>
  </div>
</div>
<!-- End of Home Button
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<br>
<!-- Start of User Form
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
  <div class="col-md-12">
    <h2>Random User Generator</h2>
  </div>
  <div class="col-xs-6 col-sm-4">
    <form method="POST" action="/user-generator">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="quantity">Number of users: </label>
        <input type="text" name="quantity" placeholder="Type number between 1 - 99" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Generate</button>
    </form>
  </div>
</div>
<!-- End of User Form
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<br>
<!-- Start of Generated Users
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
    <!-- Uses external package logic to generate random user data
    ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php
      $faker = Faker\Factory::create();
      for ($i=0; $i < $quantity; $i++) {
        echo $faker->name; ?>
        <br> <?php
        echo $faker->date($format = 'Y-m-d', $max = '-20 years'); ?>
        <br> <?php
        echo $faker->email; ?>
        <br><br> <?php
      }
    ?>
  </div>
</div>
<!-- End of Generated Users
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
@endsection

@section('body')
@endsection
