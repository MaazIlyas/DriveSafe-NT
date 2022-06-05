<!-- @extends('layout')
@section('content') -->
@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">

    @if (empty($instructors))
        <h1 style="color:black;">No instructors to display</h1>
    @else
        <div class="row row-cols-lg-4 flex-row-reverse pb-4">
            <form class="d-flex" method=POST action="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input class="form-control me-2" type="search" placeholder="Search Instructors" aria-label="Search" name="searched">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
        <div class="cards row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3 mb-5 d-flex" id="card-lists">
            
            @foreach($instructors as $instructor)
                <div class="col">
                    <div class="card ">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{$instructor->first_name}}  {{$instructor->last_name}} 
                            </h4>
                            <hr>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span>ID: {{$instructor->id}}</span></li>
                                <li class="list-group-item">Experience: {{$instructor->exp_in_years}} years</li>
                                <li class="list-group-item">Contact Number: {{$instructor->contact_num}}</li>
                                <li class="list-group-item">License Number: {{$instructor->license_no}}</li>
                                <li class="list-group-item">Car Type: {{$instructor->car_type}}</li>
                                <li class="list-group-item">Language: {{$instructor->language}}</li>
                            </ul>
                        </div>
                        
                        <div class="card-footer">
                            <a href="{{ url('/instructors/'.$instructor->id) }}" class="btn btn-sm btn-secondary">View Instructor</a>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
        <br/>
        <div>
            {{$instructors->links()}}
        </div>

    @endif



        <!-- @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest -->
    </div>
@endsection
<!-- <style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>First Name</td>
          <td>Last Name</td>
          <td>License Num</td>
          <td>Exp in Years</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($instructors as $instructor)
        <tr>
            <td>{{$instructor->first_name}}</td>
            <td>{{$instructor->last_name}}</td>
            <td>{{$instructor->license_no}}</td>
            <td>{{$instructor->exp_in_years}}</td>
            <td class="text-center">
                <a href="{{ route('instructors.edit', $instructor->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('instructors.destroy', $instructor->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection -->