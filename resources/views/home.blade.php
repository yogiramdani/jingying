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
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" 
                                                   href="https://www.facebook.com/share/13X38RVy37/?mibextid=qi2Omg"
                                                   target="blank"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" 
                                                   href="https://www.instagram.com/hunterjingying?igsh=MXY3NmZkejdwZ3FmMQ=="
                                                   target="blank"><i class="fab fa-instagram"></i></a>
                                                   <a class="btn btn-md-square btn-light rounded-circle mx-2" href="javascript:void(0);" 
                                                   data-bs-toggle="modal" data-bs-target="#tiktok_modal">
                                                    <i class="fab fa-tiktok"></i>
                                                    </a>
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
            <div class="modal fade" id="tiktok_modal" tabindex="-1" aria-labelledby="tiktokModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tiktokModalLabel">TIKTOK JING YING HUNTER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12"> <!-- Center align the button -->
                        <a class="" 
                           href="https://www.tiktok.com/@lowkerterbaru23?_t=8q44JL9BCAJ&_r=1" 
                           target="_blank"> <!-- Fixed target attribute -->
                           <i class="fab fa-tiktok"></i> @lowkerterbaru23
                        </a>
                    </div>
                    <div class="col-md-12"> <!-- Center align the button -->
                        <a class="" 
                           href="https://www.tiktok.com/@lowkerterbaru24?_t=8q44MwiXTVP&_r=1" 
                           target="_blank"> <!-- Fixed target attribute -->
                           <i class="fab fa-tiktok"></i> @lowkerterbaru24
                        </a>
                    </div>
                    <div class="col-md-12"> <!-- Center align the button -->
                        <a class="" 
                           href="https://www.tiktok.com/@jingyinghunter?_t=8q44QFXZbWc&_r=1" 
                           target="_blank"> <!-- Fixed target attribute -->
                           <i class="fab fa-tiktok"></i> @jingyinghunter
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

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
                                
                                <div class="col-sm-4">
                                    <a href="https://api.whatsapp.com/send/?phone=6285213490358&text=Hello+JING+YING+HUNTER&type=phone_number&app_absent=0" 
                                       target="_blank" 
                                       class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">{{ __('messages.pencari') }}</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="https://api.whatsapp.com/send/?phone=6281267890233&text=Hello+JING+YING+HUNTER&type=phone_number&app_absent=0" 
                                       target="_blank" 
                                       class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">{{ __('messages.pemberi') }}</a>
                                </div>
                                <div class="col-sm-5">
                                    <a href="javascript:void(0)" 
                                    class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0"
                                    data-bs-toggle="modal" data-bs-target="#wechatModal">{{ __('messages.pemberi') }} Via WeChat</a>
                                </div>

                                
                            </div>
                        
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="wechatModal" tabindex="-1" aria-labelledby="wechatModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="wechatModalLabel">Contact Via WeChat</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   
                                    <img src="wechat.png" alt="WeChat QR Code" class="img-fluid">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
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
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
            @if(!empty($job))
                @foreach($job as $row_job)
                <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset('storage/app/public/'.$row_job->poster) }}" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="{{ route('detail-job',['id'=>$row_job->id]) }}" class="btn">{{ strtoupper($row_job->judul)}}</a>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4 mt-3" 
                                   href="{{ route('detail-job',['id'=>$row_job->id]) }}">
                                   {{ __('messages.learn') }}
                                </a>
                        <p class="mb-4">
                            {!! Str::limit($row_job->deskripsi, 150, '...') !!}
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                            @php 
                                    $category = json_decode($row_job->category);
                                @endphp
                                @if(!empty($category))
                                    @foreach($category as $cat)
                                    <i data-feather="tag" style="color:#3d75b6"></i> {{ $cat->judul }}
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        
                    
                    
                </div>
        
            
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