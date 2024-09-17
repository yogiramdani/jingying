@extends('layout.master')
<style>
.manual-content {
font-family: Arial, sans-serif;
line-height: 1.6;
}

.manual-content h1 {
color: #3490dc;
}

.manual-content p {
margin-bottom: 20px;
}

</style>
@section('content')
<div class="d-flex flex-column flex-md-row rounded border p-10">
    <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6">
        <li class="nav-item me-0 mb-md-2">
            <a class="nav-link btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_4">
                <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                <span class="svg-icon svg-icon-2 svg-icon-primary me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <span class="d-flex flex-column align-items-start">
                    <span class="fs-4 fw-bolder">Login</span>
                </span>
            </a>
        </li>
        <li class="nav-item me-0 mb-md-2">
            <a class="nav-link btn btn-flex btn-active-light-info active" data-bs-toggle="tab" href="#kt_vtab_pane_5">
                <!--begin::Svg Icon | path: icons/duotune/general/gen003.svg-->
                <span class="svg-icon svg-icon-2 svg-icon-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z" fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <span class="d-flex flex-column align-items-start">
                    <span class="fs-4 fw-bolder">Pemberi Kerja</span>
                </span>
            </a>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" 
             id="kt_vtab_pane_4" 
             role="tabpanel">
             {!! $content !!}
        </div>
        <div class="tab-pane fade active show" id="kt_vtab_pane_5" role="tabpanel">Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.</div>
    </div>
</div>
@endsection
