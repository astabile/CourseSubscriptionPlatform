@extends('layouts.app')

@section('content')
@php $currency = 'USD' @endphp
<div class="row md-6 justify-content-md-center">
    <article class="content bg-light shadow p-4">
        <h4 class="text-center mb-4">{{ $course->title }}</h4>
        <img src="/storage/{{ $course->picture }}" class="w-100 rounded border" alt="">
        <div class="meta mt-3">
            <p>
                <span class="font-weight-bold text-primary">Published: </span>{{ $course->created_at->format('m/d/Y') }}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Price: </span>{{ $currency . $course->price }}
            </p>
            <subscription-button course-id="{{ $course->id }}" subscribed="{{ $subscribed }}"></subscription-button>
        </div>
    </article>
</div>
@endsection
