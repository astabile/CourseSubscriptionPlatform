@extends('layouts.app')

@section('styles')
@endsection

@section('content')
@php $currency = 'USD' @endphp
<div class="container">
    <div class="row mx-auto">
        @if (count($courses) > 0)
        @foreach($courses as $course)
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <img src="/storage/{{ $course->picture }}" class="card-img-top" title="{{ Str::ucfirst($course->title) }}" alt="">
                <div class="card-body">
                    <h6 class="card-title font-weight-bold">{{ Str::ucfirst($course->title) }}</h6>
                    <div class="meta-course d-flex justify-content-between">
                        <p class="text-primary date">{{ $course->created_at->format('m/d/Y') }}</p>
                        <p class="text-secondary">{{ $currency . $course->price }}</p>
                    </div>
                    <!--<a href="" class="btn btn-primary d-block font-weight-bold text-uppercase">Subscribe</a>-->
                    <subscription-button></subscription-button>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <p class="text-center w-100">No courses yet..</p>
        @endif
    </div>
</div>

<div class="col-12 mt-4 justify-content-center d-flex">{{ $courses->links() }}</div>
@endsection
