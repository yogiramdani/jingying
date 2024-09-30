@extends('layout.master')

@section('title', 'Job Seeker')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Data Pelamar</h3>
    </div>
    <div class="card-body">
        <table class="table table-row-dashed table-row-gray-300 gy-7">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Loker Dilamar</th>
                    <th>Tanggal</th>
                    <th>Estimasi Gaji</th>
                    <th>Kontak</th>
                    <th>Mandarin Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($pelamar)
                    @php 
                        $no=1;
                    @endphp
                    @foreach($pelamar as $row)
                    <tr>
                        <th>{{ $no }}</th>
                        <th>
                            {{ $row->nama_lengkap }}<br/>
                            <a href="{{ asset('storage/'.$row->file_cv) }}" 
                               class="btn btn-primary btn-sm"
                               target="blank">Download CV</a>
                        </th>
                        <th>{{ $row->judul }} <br>{{ $row->nama_perusahaan }}</th>
                        <th>{{ date('d F Y',strtotime($row->created_at)) }}</th>
                        <th>{{ $row->gaji_permintaan }}</th>
                        <th>{{ $row->nomor_wa }}</th>
                        <th>{{ $row->mandarin_level }}</th>
                        <th><a href="javascrio:void(0)" class="btn btn-danger btn-sm" onclick="delete_data({{ $row->id }})">Hapus</a></th>
                    </tr>
                    @php 
                        $no++;
                    @endphp
                    @endforeach
                @endif
               
            </tbody>
        </table>
    </div>
    
</div>

        
@endsection
@push('custom-scripts')
<script>
    function delete_data(id) {
    Swal.fire({
        title: "Do you want to delete?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Delete"
    }).then((result) => {
        if (result.isConfirmed) {
            axios.get('/api/pelamar-delete/' + id)
            .then(response => {
                Swal.fire({
                    title: "Deleted!",
                    text: "Data has been successfully deleted!",
                    icon: "success"
                }).then(() => {
                    // Reload the page after the success alert
                    window.location.reload();
                });
            })
            .catch(error => {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!"
                });
            });
        } else if (result.isDenied) {
            Swal.fire("Changes are not saved", "", "info");
        }
    });
}


</script>



@endpush

