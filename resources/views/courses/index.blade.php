@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(count($user->subscriptions) > 0)
                <div class="card-header">My Courses</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($user->subscriptions as $course)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <p>{{ $course->title }}</p>
                            <a class="btn btn-outline-success text-uppercase font-weight-bold" href="{{ route('courses.show', $course->id) }}">View</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @else
                <div class="card-header">Dashboard</div>
                <div class="card-body">Please subscribe to courses <a href="/">here</a></div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
