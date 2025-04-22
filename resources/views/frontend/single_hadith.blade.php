@extends('layouts.main')

@section('content')
<section class="hadith-detail py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="display-5"><strong>{{ __('frontend.hadith_of_the_day') }}</strong></h2>
            <p class="text-muted">{{ __('frontend.date') }}: {{ \Carbon\Carbon::parse($hadith->display_date)->format('d M, Y') }}</p>
        </div>

        <div class="hadith-box bg-light p-4 rounded shadow-sm">
            <blockquote class="blockquote text-center">
                <p class="mb-4" style="font-size: 1.5rem; font-weight: 500;">
                    "{{ $hadith->content }}"
                </p>
                @if ($hadith->reference)
                    <footer class="blockquote-footer">
                        <cite title="Source Title">{{ $hadith->reference }}</cite>
                    </footer>
                @endif
            </blockquote>
        </div>

        @if (!$hadith->approved)
            <div class="alert alert-warning text-center mt-4">
                {{ __('frontend.not_approved_notice') }}
            </div>
        @endif
    </div>
</section>
@endsection
