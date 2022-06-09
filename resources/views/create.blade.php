<!-- @extends('layout')
@section('content') -->
@extends('layouts.app-master')

@section('content')
<section>
  <div class="card" style="max-width: 450px; margin: auto; animation: none;">
    <div class="card-header">
      Add Instructor
    </div>
    <div class="card-body p-3">
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
            <div class="form-group mb-2">
                @csrf
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name"/>
            </div>
            <div class="form-group mb-2">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name"/>
            </div>
            <div class="form-group mb-2">
                <label for="license_no">License No</label>
                <input type="text" class="form-control" name="license_no"/>
            </div>
            <div class="form-group mb-2">
                <label for="exp_in_years">Experience in years</label>
                <input type="numeric" class="form-control" name="exp_in_years"/>
            </div>
            <div class="form-group mb-2">
                <label for="contact_num">Phone</label>
                <input type="tel" class="form-control" name="contact_num"/>
            </div>
            <div class="form-group mb-2">
                <label for="car_type">Car Type</label>
                <input type="text" class="form-control" name="car_type"/>
            </div>
            <div class="form-group mb-2">
                <label for="language">Language</label>
                <input type="text" class="form-control" name="language"/>
            </div>
            <div class="form-group mb-2">
              <textarea class="form-control" name="bio" placeholder="Enter instructor's bio"></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-danger w-100">Add</button>
        </form>
    </div>
  </div>
</section> 

@endsection