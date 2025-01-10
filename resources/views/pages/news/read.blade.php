@extends('layouts.adminMain')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <h1 class="display-4 mb-3" style="font-weight: bold;">{{ $news->title }}</h1>
                            <p class="text-primary mb-4">By admin / {{ $news->created_at->format('d F Y') }}</p>
                        </div>

                        @if($news->image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $news->image) }}"
                                    class="img-fluid w-80"
                                    alt="{{ $news->title }}"
                                    style="max-height: 500px; object-fit: cover;">
                            </div>
                        @endif

                        <div class="news-content" style="font-size: 1.1rem; line-height: 1.8;">
                            {!! nl2br(e($news->content)) !!}
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('news') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back to News List
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .news-content {
        color: #4a5568;
    }
    .display-4 {
        font-size: 2.5rem;
        color: #1a202c;
    }
</style>
@endpush
