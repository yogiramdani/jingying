@extends('layout.master')

@section('title', 'Job Seeker')

@section('content')
<table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
    <thead>
        <tr class="fw-bold fs-6 text-muted">
            <th>Nama Perusahaan</th>
            <th>Judul</th>
            <th>Category</th>
            <th>Deskripsi</th>
            <th>Gaji</th>
        </tr>
    </thead>
    <tbody>
        @if($records)
            @foreach($records as $row)
                <tr>
                    <td>{{ $row->nama_perusahaan }}</td>
                    <td>{{ $row->judul }}</td>
                    <td>
                        @php 
                            $category = json_decode($row->category);
                        @endphp
                        @if(!empty($category))
                            @php 
                                $n=1;
                            @endphp
                            @foreach($category as $cat)
                            {{ $n }}. {{ $cat->judul }}<br/>
                            @php 
                                $n++;
                            @endphp
                            @endforeach
                        @endif
                    </td>
                    <td>{!! $row->deskripsi !!}</td>
                    <td>{{ $row->gaji }}</td>
                </tr>
            @endforeach
        @endif
        
        
    </tbody>
    <tfoot>
        <tr>
            <th>Nama Perusahaan</th>
            <th>Judul</th>
            <th>Category</th>
            <th>Deskripsi</th>
            <th>Gaji</th>
        </tr>
    </tfoot>
</table>
@endsection

@push('custom-scripts')
<script>
    $("#kt_datatable_example_1").DataTable();
</script>

@endpush
