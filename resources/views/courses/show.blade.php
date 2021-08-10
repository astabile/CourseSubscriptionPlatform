@extends('layouts.app')

@section('content')
@php $currency = 'USD' @endphp
<article class="content bg-light shadow p-5">
    <h3 class="text-center mb-4">{{ $course->title }}</h3>
    <div class="img text-center">
        <img src="/storage/{{ $course->picture }}" class="w-50 rounded border" alt="">
    </div>
    <div class="meta mt-3">
        <p>
            <span class="font-weight-bold text-primary">Published:</span>
            {{ $course->created_at->format('m/d/Y') }}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Price:</span>
            {{ $currency . $course->price }}
        </p>
        <subscription-button course-id="{{ $course->id }}" subscribed="{{ $subscribed }}"></subscription-button>
    </div>
</article>
@endsection
