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
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">{{ __('messages.company') }}</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">{{ __('messages.tag_line') }}</h1>
                                        <p class="mb-5 fs-5">{{ __('messages.parent_tag') }}</p>
                                        <!-- <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                        </div> -->
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                            <h2 class="text-white me-2">{{ __('messages.follow') }}:</h2>
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
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-success">{{ __('messages.company') }}</h4>
                            <p class="mb-4">
                            {{ __('messages.about') }}
                            </p>
                            <div class="row g-4">
                                
                                <div class="col-sm-6">
                                    <a href="https://api.whatsapp.com/send/?phone=6285213490358&text=Hello+JING+YING+HUNTER&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">{{ __('messages.pencari') }}</a>
                                    
                                </div>
                                <div class="col-sm-6">
                                    <a href="https://api.whatsapp.com/send/?phone=6281267890233&text=Hello+JING+YING+HUNTER&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">{{ __('messages.pemberi') }}</a>
                                </div>
                                
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="assets/1.jpg" class="img-fluid rounded w-100" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
<!-- Services Start -->
<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">{{ __('messages.lowongan') }}</h4>
            <h1 class="display-5 mb-4">{{ __('messages.tag_lowongan') }}</h1>
        </div>
        <div class="row g-4">
            @if(!empty($job))
                @foreach($job as $row_job)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="v2/img/service-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> 
                                    {{ strtoupper($row_job->judul)}}
                                </a>
                                <p class="mb-4">
                                    {!! Str::limit($row_job->deskripsi, 150, '...') !!}
                                </p>
                                @php 
                                    $category = json_decode($row_job->category);
                                @endphp
                                @if(!empty($category))
                                    @foreach($category as $cat)
                                    <i data-feather="tag" style="color:#3d75b6"></i> {{ $cat->judul }}
                                    @endforeach
                                @endif
                                <br/>
                                <a class="btn btn-primary rounded-pill py-2 px-4 mt-3" 
                                   href="{{ route('detail-job',['id'=>$row_job->id]) }}">
                                   {{ __('messages.learn') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
        <a class="btn btn-primary rounded-pill py-2 px-4 mt-3" href="{{ route('all-jobs') }}" style="text-align:center">
            {{ __('messages.more') }}
        </a>
        </div>
        
    </div>
    
</div>
<!-- Services End -->

@endsection

@push('scripts')

@endpush