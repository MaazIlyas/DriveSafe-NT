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
            <button type="submit" class="btn btn-block btn-danger w-100">Add</button>
        </form>
    </div>
  </div>
</section> 

@endsection