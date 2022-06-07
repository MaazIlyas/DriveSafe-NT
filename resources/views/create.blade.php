<!-- @extends('layout')
@section('content') -->
@extends('layouts.app-master')

@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add Instructor
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('instructors.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="license_no">License No</label>
              <input type="text" class="form-control" name="license_no"/>
          </div>
          <div class="form-group">
              <label for="exp_in_years">Experience in years</label>
              <input type="numeric" class="form-control" name="exp_in_years"/>
          </div>
          <div class="form-group">
              <label for="contact_num">Phone</label>
              <input type="tel" class="form-control" name="contact_num"/>
          </div>
          <div class="form-group">
              <label for="car_type">Car Type</label>
              <input type="text" class="form-control" name="car_type"/>
          </div>
          <div class="form-group">
              <label for="language">Language</label>
              <input type="text" class="form-control" name="language"/>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="bio" placeholder="Enter instructor's bio"></textarea>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Add</button>
      </form>
  </div>
</div>
@endsection