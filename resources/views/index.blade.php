
<!-- Instructors page -->

@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">

    @if (empty($instructors))
        <h2>There are no instructors to display.</h2>
        <br>
        @if(auth()->user() && auth()->user()->role == 'admin')
            <a href="{{ route('instructors.create') }}" class="btn btn-sm btn-secondary">Add Instructor</a>
        @endif
    @else
        <div class="row row-cols-lg-4 flex-row-reverse pb-4 g-3">
        @if(auth()->user() && auth()->user()->role == 'admin')
            <a href="{{ route('instructors.create') }}" class="btn btn-sm btn-secondary d-flex align-items-center justify-content-center">Add Instructor</a>
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
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">Experience:</span> {{$instructor->exp_in_years}} years</li>
                                <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">Contact Number:</span> {{$instructor->contact_num}}</li>
                                <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">License Number:</span> {{$instructor->license_no}}</li>
                                <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">Car Type:</span> {{$instructor->car_type}}</li>
                                <li class="list-group-item d-flex justify-content-between"><span class="fw-bold">Language:</span> {{$instructor->language}}</li>
                            </ul>
                        </div>
                        
                        <div class="card-footer">
                            <a href="{{ url('/instructors/'.$instructor->id) }}" class="btn btn-sm btn-primary">View</a>
                            @if(auth()->user() && auth()->user()->role == 'admin')
                                <a href="{{ url('/instructors/'.$instructor->id.'/edit') }}" class="btn btn-sm btn-secondary">Edit</a>
                                <!--<a href="{{ route('instructors.destroy', ['instructor'=> $instructor->id]) }}" class="btn btn-sm btn-danger">Delete</a>-->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-danger deleteInstructorBtn" value="{{$instructor->id}}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <form action="{{ route('instructors.destroy') }}" method="POST">
                                    @csrf
                                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="instructor_delete_id" id="instructor_id">
                                                Are you sure you want to delete the instructor ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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