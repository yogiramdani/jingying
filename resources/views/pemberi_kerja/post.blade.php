@extends('layout.master')

@section('title', 'Job Seeker')

@section('content')
<form action="{{ route('job-posting') }}" method="post">
<div class="row">
    
        @csrf 
        <div class="col-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Post Job</h3>
                        
                </div>
                <div class="card-body">
                    <div class="mb-10">
                        <label class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" value="{{ $record->nama_perusahaan }}">
                        <input type="hidden" class="form-control" name="id_client" value="{{ $record->id }}">
                    </div>
                    <div class="mb-10">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="mb-10">
                        <label class="form-label">Gaji</label>
                        <input type="text" class="form-control" name="gaji" required>
                    </div>
                    <div class="mb-10">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="kt_docs_ckeditor_classic"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" style="float:right" type="subimt"  id="submit">Submit</button>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Kategori</h3>
                        
                </div>
                <div class="card-body" id="list_category">
                    @if(!empty($category))
                        @foreach($category as $row)
                            <div class="form-check form-check-custom form-check-solid mb-2">
                                <input class="form-check-input" type="checkbox" name="category[]" value="{{ $row->id }}" id="flexCheckChecked{{ $row->id }}"/>
                                <label class="form-check-label" for="flexCheckChecked{{ $row->id }}">
                                    {{ $row->judul }}
                                </label>
                            </div>
                        @endforeach
                    @endif
                    
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="judul_category" name="judul_category" placeholder="Add Category">
                        </div>
                        <div class="col-md-4">
                            <a href="javascript:void(0)" class="btn btn-primary" style="float:right"  id="add_category">Add</a>
                        </div>
                    </div>
                
                </div>
                    
            </div>

        </div>

</div>
</form>

@endsection

@push('custom-scripts')
<script>
    ClassicEditor
    .create(document.querySelector('#kt_docs_ckeditor_classic'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });

    $("#add_category").on("click", function() {
        // Get the value from the input field
        var judul_category = $('#judul_category').val();

        // Check if the input is not empty
        if (judul_category.trim() === '') {
            alert("Please enter a category title.");
            return;
        }

        // Data to be sent in the POST request
        const data = {
            judul: judul_category,
        };

        // Sending a POST request
        axios.post('/api/save-category', data)
            .then(function (response) {
                if (!response.data.error) {
                    // Append the new category to the list
                    $('#list_category').append(`
                        <div class="form-check form-check-custom form-check-solid mb-2">
                            <input class="form-check-input"  name="category[]" type="checkbox" value="${response.data.data.id}" id="category-${response.data.data.id}"/>
                            <label class="form-check-label" for="category-${response.data.data.id}">
                                ${response.data.data.judul}
                            </label>
                        </div>
                    `);
                    // Optionally, clear the input field after successful addition
                    $('#judul_category').val('');
                } else {
                    alert("There was an error: " + response.data.message);
                }
            })
            .catch(function (error) {
                console.error(error);
                alert("There was an error adding the category.");
            });
    });


</script>

@endpush
