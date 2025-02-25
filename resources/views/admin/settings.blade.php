@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('admin.general_settings') }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{ __('admin.general_settings') }}</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex justify-content-between">
                    <span>{{ __('dashboard.ayat_of_the_day') }}</span>
                    <span class="badge bg-success">{{ $ayats }}</span>
                </div>                
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('admin.ayat.index') }}">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex justify-content-between">
                    <span>{{ __('dashboard.hadith_of_the_day') }}</span>
                    <span class="badge bg-success">{{ $hadits }}</span>
                </div> 
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('admin.hadith.index') }}">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex justify-content-between">
                    <span>{{ __('dashboard.saying_of_the_day') }}</span>
                    <span class="badge bg-success">{{ $sayings }}</span>
                </div> 
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('admin.saying.index') }}">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body d-flex justify-content-between">
                    <span>{{ __('dashboard.picture_gallery') }}</span>
                    <span class="badge bg-success">{{ $picture_galary }}</span>
                </div> 
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('admin.picture_gallery.index') }}">{{ __('dashboard.view_all') }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
