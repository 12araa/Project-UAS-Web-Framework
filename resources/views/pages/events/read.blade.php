@extends('layouts.adminMain')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <h1 class="display-4 mb-3" style="font-weight: bold;">{{ $event->title }}</h1>
                            <p class="text-primary mb-4">By admin / {{ $event->created_at->format('d F Y') }}</p>
                        </div>

                        @if($event->image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $event->image) }}"
                                    class="img-fluid w-80"
                                    alt="{{ $event->title }}"
                                    style="max-height: 500px; object-fit: cover;">
                            </div>
                        @endif

                        <!-- Event Date and Countdown Section -->
                        <div class="event-timing mb-4 p-3 bg-light rounded">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-2"><i class="fas fa-calendar-alt"></i> Event Date</h4>
                                    <p class="h5">{{ \Carbon\Carbon::parse($event->event_date)->format('l, d F Y') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-2"><i class="fas fa-hourglass-half"></i> Countdown</h4>
                                    <div id="countdown" class="h5" data-event-date="{{ $event->event_date }}">
                                        <span id="countdown-timer">Calculating...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-description" style="font-size: 1.1rem; line-height: 1.8;">
                            {!! nl2br(e($event->description)) !!}
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('event') }}" class="btn btn-secondary">
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

    .event-description {
        color: #4a5568;
    }
    .display-4 {
        font-size: 2.5rem;
        color: #1a202c;
    }
</style>
@endpush
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Pastikan elemen ada sebelum menjalankan fungsi
    const countdownDiv = document.getElementById('countdown');
    if (!countdownDiv) return;

    const eventDate = countdownDiv.getAttribute('data-event-date');
    const timerElement = document.getElementById('countdown-timer');

    if (!eventDate || !timerElement) return;

    function calculate() {
        try {
            const now = new Date().getTime();
            const eventDateTime = new Date(eventDate).getTime();
            const distance = eventDateTime - now;

            if (distance < 0) {
                timerElement.innerHTML = "Event has ended";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            timerElement.innerHTML = `${days} days ${hours} hours ${minutes} minutes ${seconds} seconds`;
        } catch (error) {
            console.error('Countdown calculation error:', error);
            timerElement.innerHTML = "Error calculating countdown";
        }
    }

    // Jalankan perhitungan pertama kali
    calculate();

    // Update setiap detik
    setInterval(calculate, 1000);
});
</script>
@endpush
