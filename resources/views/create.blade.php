{{-- This page is use to create instructors --}}

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
          @csrf
          @include('layouts.partials.instructor-fields')
          <div class="form-group mb-2">
              <label for="language">Associated School</label>
              <select name="school_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
              <option selected>Open to select school</option>
              @foreach($schools as $school)
                  <option value="{{$school->id}}">{{$school->name}}</option>
              @endforeach
              </select>
          </div>
            <button type="submit" class="btn btn-block btn-danger w-100">Add</button>
        </form>
    </div>
  </div>
</section> 

@endsection