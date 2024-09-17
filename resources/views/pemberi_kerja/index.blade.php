@extends('layout.master')

@section('title', 'Job Seeker')

@section('content')
  <!--begin::Wrapper-->
<div class="d-flex flex-stack mb-5">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative my-1">
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
    </div>
    <!--end::Search-->

    
    <!--begin::Toolbar-->
    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        
       
        <!--begin::Add customer-->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
            Add Client
        </button>
        <!--end::Add customer-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Group actions-->
    <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
        <div class="fw-bolder me-5">
            <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
        </div>

        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
            Selection Action
        </button>
    </div>
    <!--end::Group actions-->
</div>
<!--end::Wrapper-->

<!--begin::Datatable-->
<table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
            </div>
        </th>
        <th>Nama Perusahaan</th>
        <th>Jabatan Diperlukan</th>
        <th>Estimasi Gaji</th>
        <th>Lokasi</th>
        <th>Kontak</th>
        <th class="text-end min-w-100px">Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-bold">
    </tbody>
</table>

<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Client</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>
            <form action="{{ route('save-client') }}" method="POST">
                @csrf
                <div class="modal-body">
                    @if($label)
                        @foreach($label as $row)
                            <div class="mb-10">
                                <label class="form-label">{{ $row['label'] }}</label>
                                <input type="text" class="form-control" name="{{ $row['name'] }}">
                            </div>
                        @endforeach
                    @endif
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Datatable-->
@endsection

@push('custom-scripts')
<script>
   var KTDatatablesServerSide = function () {
    var dt;

    var initDatatable = function () {
        dt = $("#kt_datatable_example_1").DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [[5, 'desc']],
            stateSave: true,
            select: {
                style: 'os',
                selector: 'td:first-child',
                className: 'row-selected'
            },
            ajax: function (data, callback, settings) {
                axios.get("{{ url('api/data-file') }}", { params: data })
                    .then(response => {
                        callback(response.data);
                    })
                    .catch(error => {
                        console.error("AJAX Error: ", error);
                    });
            },
            columns: [
                { data: 'id' },
                { data: 'nama_perusahaan' },
                { data: 'jabatan_diperlukan' },
                { data: 'gaji' },
                { data: 'lokasi' },
                { data: 'nomor_wa' },
                { data: null },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function (data) {
                        return `
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="${data}" />
                            </div>`;
                    }
                },
                
                {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        return `
                            <a href="javascript:void(0)" 
                               class="btn btn-sm btn-flex btn-danger btn-active-danger fw-bolder" 
                               onclick=delete_data(${data.id})
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Delete
                            </a>
                            <a href="{{ url('pemberi-kerja/detail/') }}/${data.id}" 
                               class="btn btn-sm btn-flex btn-primary btn-active-primary fw-bolder" 
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Post
                            </a>
                        `;
                    },
                },
            ],
            createdRow: function (row, data, dataIndex) {
                $(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
            }
        });
    }

    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw();
        });
    }

    var handleFilterDatatable = () => {
        const filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="payment_type"] [name="payment_type"]');
        const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');

        // Check if the filterButton exists before adding event listener
        if (filterButton) {
            filterButton.addEventListener('click', function () {
                let paymentValue = '';

                filterPayment.forEach(r => {
                    if (r.checked) {
                        paymentValue = r.value;
                    }
                });

                dt.column(4).search(paymentValue).draw();
            });
        }
    }


    var handleResetForm = () => {
        const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]');

        resetButton.addEventListener('click', function () {
            filterPayment[0].checked = true;
            dt.column(4).search('').draw();
        });
    }

    var initToggleToolbar = function () {
        const checkboxes = $('#kt_datatable_example_1 tbody [type="checkbox"]');
        const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]');

        checkboxes.each(function() {
            $(this).on('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });

        deleteSelected.addEventListener('click', function () {
            Swal.fire({
                text: "Are you sure you want to delete selected customers?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then(function (result) {
                if (result.value) {
                    checkboxes.each(function() {
                        if (this.checked) {
                            dt.row($(this).closest('tr')).remove().draw();
                        }
                    });

                    const headerCheckbox = $('#kt_datatable_example_1 thead [type="checkbox"]')[0];
                    if (headerCheckbox) {
                        headerCheckbox.checked = false;
                    }
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Selected customers were not deleted.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    });
                }
            });
        });
    }

    const toggleToolbars = () => {
        const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
        const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
        const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');

        const allCheckboxes = $('#kt_datatable_example_1 tbody [type="checkbox"]');

        let checkedState = false;
        let count = 0;

        allCheckboxes.each(function() {
            if (this.checked) {
                checkedState = true;
                count++;
            }
        });

        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add('d-none');
            toolbarSelected.classList.remove('d-none');
        } else {
            toolbarBase.classList.remove('d-none');
            toolbarSelected.classList.add('d-none');
        }
    }

    const handleDeleteRows = () => {
        const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            d.addEventListener('click', function (e) {
                e.preventDefault();

                const parent = e.target.closest('tr');
                const customerName = parent.querySelectorAll('td')[1].innerText;

                Swal.fire({
                    text: "Are you sure you want to delete " + customerName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have deleted " + customerName + "!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });

                        dt.row($(parent)).remove().draw();
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: customerName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }

    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            handleFilterDatatable();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTDatatablesServerSide.init();
});

function delete_data(id){
    Swal.fire({
        title: "Do you want to delete?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Delete"
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            axios.get('/api/soft-delete/'+id)
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
