<!-- @extends('layout')
@section('content') -->
@extends('layouts.app-master')

@section('content')
    <main class="content">
        <section class="mb-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 gy-3">
                    <div class="col">
                        <div class="card card--link">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <span class="stretched-link">Classes</span>
                                </h4>
                                <p class="card-text">
                                    Go here to find out when and where classes are avaiable.
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
    </main>  
@endsection
