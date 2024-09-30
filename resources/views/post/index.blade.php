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
            <th>Action</th>
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
                    <td>
                        <a href="javascrio:void(0)" class="btn btn-danger btn-sm" onclick="delete_data({{ $row->id }})">Hapus</a>
                        <a href="{{ route('post-edit',['id'=>$row->id]) }}" class="btn btn-warning btn-sm">Rubah</a>
                    </td>
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
    function delete_data(id){
        Swal.fire({
            title: "Do you want to delete?",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Delete"
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                axios.get('/api/post-delete/'+id)
                .then(response => {
                    Swal.fire({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success"
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
