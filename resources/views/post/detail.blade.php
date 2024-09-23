@extends('layout.front')
@section('content') 

<div class="container-fluid content py-5 wow fadeIn mt-3">
    <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                <!--begin::Body-->
                    <div class="card-header">
                        <h3>{{ $job->judul }}</h3>
                    </div>
                    <div class="card-body">
                        <!-- <p><strong>Location:</strong> {{ $job->lokasi }}</p> -->
                        <p><strong>Salary:</strong> {{ $job->gaji }}</p>
                        <p><strong>Description:</strong></p>
                        <div class="fs-5">{!! $job->deskripsi !!}</div>
                        
                    </div>

                    <!--end::Body-->
                </div>
            </div>
            <div class="col-md-4">
                <form id="applicant">
                    @csrf
                    <div class="card">
                    <!--begin::Body-->
                        <div class="card-header">
                            <h3>{{ __('messages.apply_title') }}</h3>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="post_id" value="{{ $job->unix_code }}">
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.apply_name') }}</label>
                                <input type="text" class="form-control" name="nama_lengkap">
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.apply_address') }}</label>
                                <textarea class="form-control" name="alamat"></textarea>
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.nomor_wa') }}</label>
                                <input type="text" class="form-control" name="nomor_wa">
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.we_chat') }}</label>
                                <input type="text" class="form-control" name="we_chat">
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.kelulusan') }}</label>
                                <input type="text" class="form-control" name="kelulusan">
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.estimasi_gaji') }}</label>
                                <input type="number" class="form-control" name="gaji_permintaan">
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.mandarin_level') }}</label>
                                <input type="range" class="form-control" name="mandarin_level">
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ __('messages.upload_cv') }}</label>
                                <input type="file" class="form-control" name="file_cv">
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <a href="javascript:void(0)" class="btn btn-primary" style="float:right"  id="save-applicant">{{ __('messages.apply') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script>
$("#save-applicant").on("click", function() {
    let formData = new FormData(document.getElementById('applicant'));

    axios.post('/api/save-pelamar', formData)
        .then(function(response) {
            if(response.data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Application Submitted',
                    text: 'Your application has been submitted successfully.',
                });
                document.getElementById('applicant').reset();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: response.data.message || 'There was an error submitting your application.',
                });
            }
        })
        .catch(function(error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'There was an error submitting your application.',
            });
        });
});

</script>
@endpush