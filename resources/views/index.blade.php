<!-- @extends('layout')
@section('content') -->
@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">

    @if (empty($instructors))
        <h1 style="color:black;">No instructors to display</h1>
    @else
        <div class="row row-cols-lg-4 flex-row-reverse pb-4">
        @if(auth()->user() && auth()->user()->role == 'admin')
            <a href="{{ route('instructors.create') }}" class="btn btn-sm btn-secondary">Add Instructor</a>
        @endif
            <form class="d-flex" method=POST action="{{ route('instructors.search') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input class="form-control me-2" id="instructor-search" type="search" placeholder="Search By Name" aria-label="Search" name="searched" value="{{$search_string}}">
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
                                <li class="list-group-item">Experience: {{$instructor->exp_in_years}} years</li>
                                <li class="list-group-item">Contact Number: {{$instructor->contact_num}}</li>
                                <li class="list-group-item">License Number: {{$instructor->license_no}}</li>
                                <li class="list-group-item">Car Type: {{$instructor->car_type}}</li>
                                <li class="list-group-item">Language: {{$instructor->language}}</li>
                            </ul>
                        </div>
                        
                        <div class="card-footer">
                            <a href="{{ url('/instructors/'.$instructor->id) }}" class="btn btn-sm btn-secondary">View</a>
                            @if(auth()->user() && auth()->user()->role == 'admin')
                                <a href="{{ url('/instructors/'.$instructor->id.'/edit') }}" class="btn btn-sm btn-secondary">Edit</a>
                                <a href="{{ route('instructors.destroy', ['instructor'=> $instructor->id]) }}" class="btn btn-sm btn-secondary">Delete</a>
                            @endif
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
    </div>
@endsection