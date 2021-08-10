@extends('layouts.app')

@section('content')
<div class="col-md-10 mx-auto bg-white p-3">
    @if(count($user->subscriptions) > 0)
    <h2 class="text-center my-5">My courses</h2>
    <div class="col-md-10 mx-auto bg-white p-3">
        <ul class="list-group">
            @foreach($user->subscriptions as $course)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <p>{{ $course->title }}</p>
                <a class="btn btn-outline-success text-uppercase font-weight-bold" href="{{ route('courses.show', $course->id) }}">View</a>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
