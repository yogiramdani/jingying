@extends('layout.front')
@section('carousel')
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
<div class="header-carousel-item">
<img src="/v2/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
<div class="carousel-caption">
<div class="container">
    <div class="row gy-0 gx-5">
        <div class="col-lg-0 col-xl-5"></div>
        <div class="col-xl-7 animated fadeInLeft">
            <div class="text-sm-center text-md-end">
                <h4 class="text-primary text-uppercase fw-bold mb-4">
                    {{ __('messages.company') }}
                </h4>
                <h1 class="display-4 text-uppercase text-white mb-4">{{ __('messages.tag_line') }}</h1>
                <p class="mb-5 fs-5">{{ __('messages.parent_tag') }}</p>
                <!-- <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                </div> -->
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                    <h2 class="text-white me-2">{{ __('messages.follow') }} :</h2>
                    <div class="d-flex justify-content-end ms-2">
                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
<!-- Carousel End -->
@endsection
@section('content') 
@php
use Illuminate\Support\Str;
@endphp
<!-- Abvout Start -->
<div class="container-fluid about py-5">
<div class="container py-5">

<div id="kt_content_container" class="container-xxl">
        <!--begin::Contact-->
        <form action="{{ route('front-save-client') }}" class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework" method="post" id="kt_contact_form">
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-17">
                <!--begin::Row-->
                <div class="row mb-3">
                    <!--begin::Col-->
                    <div class="col-md-6 pe-lg-10">
                        <!--begin::Form-->
                        
                        <h1 class="fw-bolder text-dark mb-9">{{ __('messages.create_jobs') }}</h1>
                        @csrf
                        @if($label)
                            @foreach($label as $row)
                                <div class="mb-10">
                                    <label class="form-label">{{ __('messages.' . $row['name']) }}</label>
                                    <input type="text" class="form-control" name="{{ $row['name'] }}">
                                </div>
                            @endforeach
                        @endif
                        <!--end::Form-->
                    </div>
                    <!--end::Col-->
                    
                </div>
                <!--end::Row-->
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
            </div>
            </form>
            <!--end::Body-->
        </div>
        <!--end::Contact-->
    </div>
</div>

</div>
<!-- About End -->

@endsection

@push('scripts')

@endpush

