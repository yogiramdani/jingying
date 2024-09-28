@extends('layout.front')
@section('content') 
@php
    use Illuminate\Support\Str;
@endphp

<div class="container-fluid content py-5 wow fadeIn mt-3">
    <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
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
                                <img src="{{ asset('storage/app/public/'.$row_job->poster) }}" class="img-fluid rounded-top w-100" alt="Image">
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
                                   href="{{ route('detail-job',['id'=>$row_job->id]) }}">{{ __('messages.learn') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
        </div>
    </div>
</div>

@endsection

@push('custom-scripts')

@endpush