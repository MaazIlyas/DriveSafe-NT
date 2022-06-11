{{-- This page shows the two main pages of the websie. CUrrently being considered as the home page --}}

@extends('layouts.app-master')

@section('content')
    <section class="mt-2">
        <div class="container">
            <div class="row row-cols-1 gy-3">
                <div class="col">
                    <div class="card card--link">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('learning.classes') }}" class="stretched-link">Classes</a>
                            </h4>
                            <p class="card-text">
                                Go here to find out when and where classes are available.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card--link">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('instructors.index') }}" class="stretched-link">Instructors</a>
                            </h4>
                            <p class="card-text">
                                Go here to see our partnered driving schools and their instructors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
