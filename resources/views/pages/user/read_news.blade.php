@extends('layouts.master')

@section('content')
<section class="read-more-section bg-light">
    <div class="container">
        <div class="mb-2">
            <h1 class="display-4 mb-3" style="font-weight: bold;">{{ $news->title }}</h1>
            <p class="text-primary mb-4">By admin / {{ $news->created_at->format('d F Y') }}</p>
        </div>
        <div class="text-center mb-4">
            @if($news->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $news->image) }}"
                        class="img-fluid w-80"
                        alt="{{ $news->title }}"
                        style="max-height: 500px; object-fit: cover;">
                </div>
            @endif
        </div>
        <div class="content-wrapper">
            <p>
                {!! nl2br(e($news->content)) !!}
            </p>
        </div>
        <div class="mt-4">
            <a href="{{ route('history_index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to News List
            </a>
        </div>
    </div>
</section>
@endsection
