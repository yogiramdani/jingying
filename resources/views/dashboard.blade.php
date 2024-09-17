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
                        <th>{{ $row->nama_lengkap }}</th>
                        <th>{{ $row->judul }} <br>{{ $row->nama_perusahaan }}</th>
                        <th>{{ date('d F Y',strtotime($row->created_at)) }}</th>
                        <th>{{ $row->gaji_permintaan }}</th>
                        <th>{{ $row->nomor_wa }}</th>
                        <th>{{ $row->mandarin_level }}</th>
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
