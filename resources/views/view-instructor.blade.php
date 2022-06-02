@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">

    @if (empty($instructor))
        <h1 style="color:black;">No instructor to display</h1>
    @else
        <div class="custom">
            <section class="profile">
                <div class="container">
                    <div class="mb-5">
                        <h2>Description</h2>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, quasi nulla ab porro placeat molestiae atque corporis, autem quos non, assumenda magni eaque quisquam ad id! Vitae est magni impedit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis assumenda consequatur dolore non animi blanditiis hic magnam, eligendi reiciendis, praesentium quasi at veritatis. Voluptates exercitationem provident, praesentium repudiandae sapiente incidunt? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora velit nisi hic voluptate dicta tempore esse, ratione quasi iusto qui laboriosam facere dignissimos eaque accusamus aliquam dolore assumenda minima maxime!
                        </p>
                    </div>

                    <h3>{{$instructor->first_name}}  {{$instructor->last_name}}</h3>

                    <hr>

                    <div class="row mb-3">
                        <div class="col-6 col-lg-9">
                            <div class="row row-cols-1 row-cols-lg-3 gy-3">
                                <div class="col">
                                    <img src="{!! url('assets/images/profile.png') !!}" style="border: solid 1px black;" alt="profile picture">
                                </div>
                                <div class="col">
                                    <h4>Details</h4>
                                    <ul>
                                        <li>
                                            <span>Language:</span> {{$instructor->language}}
                                        </li>
                                        <li>
                                            <span>Contact:</span> {{$instructor->contact_num}}
                                        </li>
                                        <li>
                                            <span>Car Type:</span> {{$instructor->car_type}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h4>Bio</h4>
                                    <p>
                                    {{$instructor->bio}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="profile__overall-rating">
                                <h4>Overall Rating</h4> 
                                <ul>
                                @for ($i = 1; $i <= $avg_rating; $i++)
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                @endfor
                                @for ($i = 1; $i <= (5 - $avg_rating); $i++)
                                    <li>
                                        <i class="far fa-star"></i>
                                    </li>
                                @endfor
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr>

                    @auth
                    <section class="review mb-5">
                        <form method="post" action="{{ route('reviews.store') }}">
            
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="instructor_id" value="{{ $instructor->id }}" />
                            <input type="hidden" id="rating-input" name="rating" value="" />
                            <div class="add_new-rating">
                                <h3>Your Rating</h3>
                                <ul class="review__rating mb-3">
                                    <li>
                                        <i class="fa-regular fa-star" id="1star" onclick="markStar(this)" onmouseover="starOver(this)" onmouseout="starOut(this)"></i>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-star" id="2star" onclick="markStar(this)" onmouseover="starOver(this)" onmouseout="starOut(this)"></i>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-star" id="3star" onclick="markStar(this)" onmouseover="starOver(this)" onmouseout="starOut(this)"></i>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-star" id="4star" onclick="markStar(this)" onmouseover="starOver(this)" onmouseout="starOut(this)"></i>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-star" id="5star" onclick="markStar(this)" onmouseover="starOver(this)" onmouseout="starOut(this)"></i>
                                    </li>
                                </ul>
                            </div>
                            <div>
                
                                <h3>Your Comment</h3>
                                <div class="review__comment">
                                    <textarea class="form-control" name="review" id="reviewComment" placeholder="What is your feedback?"></textarea>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </section>
                    @endauth
                </div>
            </section>
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
