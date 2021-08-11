@extends('layouts.app')

@section('content')
@php $currency = 'USD' @endphp
<div class="container">
    <div class="row mx-auto">
        @if (count($courses) > 0)
        @foreach($courses as $course)
        <div class="col-md-3 mb-4">
            <a href="{{ route('courses.show', ['course' => $course->id]) }}" class="">
                <div class="card shadow">
                    <img src="/storage/{{ $course->picture }}" class="card-img-top" title="{{ Str::ucfirst($course->title) }}" alt="">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">{{ Str::ucfirst($course->title) }}</h6>
                        <div class="meta-course d-flex justify-content-between">
                            <p class="text-primary">{{ $currency . $course->price }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <p class="text-center w-100">No courses yet..</p>
        @endif
    </div>
</div>

<div class="col-12 mt-4 justify-content-center d-flex">{{ $courses->links() }}</div>
@endsection
