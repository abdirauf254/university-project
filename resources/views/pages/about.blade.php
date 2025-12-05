@extends('layouts.app')

@section('title', 'About IST')

@section('content')
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="https://via.placeholder.com/600x400" alt="About IST" class="img-fluid rounded shadow">
        </div>

        <div class="col-md-6">
            <h2 class="fw-bold text-primary">About IST</h2>
            <p class="mt-3">
                IST (Institute of Software Technology) is a leading institution dedicated
                to providing high-quality education and skills in the fields of technology,
                software development, networking, and innovation.
            </p>

            <p>
                Our mission is to empower students with industry-ready skills, practical
                experience, and strong career opportunities through hands-on training
                and modern facilities.
            </p>

            <ul class="list-group mb-4">
                <li class="list-group-item">✔ Professional Training</li>
                <li class="list-group-item">✔ Qualified Instructors</li>
                <li class="list-group-item">✔ Modern Computer Labs</li>
                <li class="list-group-item">✔ Internship & Job Placement Support</li>
            </ul>

            <a href="{{ route('contact') }}" class="btn btn-primary px-4">Contact Us</a>
        </div>
    </div>
</div>
@endsection
