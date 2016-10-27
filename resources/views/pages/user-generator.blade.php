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
<!-- Start of User Form
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="row">
  <div class="col-md-12">
    <h2>Random User Generator</h2>
    <form method="POST" action="/user-generator" class="form-inline">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="users">Number of users: </label>
        <input type="text" name="users" value="6" class="form-control">
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Include Birthdate
        </label>
      </div>
      <br><br>
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
    @if ($users >= 1 && $users <=99)
      <?php
        $faker = Faker\Factory::create();
        for ($i=0; $i < $users; $i++) {
          echo $faker->name; ?>
          <br> <?php
          echo $faker->date($format = 'Y-m-d', $max = '-20 years'); ?>
          <br><br> <?php
        }
      ?>
    @elseif ($users < 1)
      Please enter number between 1 - 99.
    @endif
  </div>
</div>
<!-- End of Generated Users
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
@stop

@section('body')
@stop
