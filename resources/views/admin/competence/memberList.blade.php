@extends('admin.layouts.app')
@section('title') KBB Yeterlik @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
        <style>
            input[type="text"]{
                display: inline-block;
                padding: 5px 10px;
                font-size: 13px;
                line-height: 18px;
                color: #444444;
                border: 1px solid #ccc;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                transition: border linear 0.2s, box-shadow linear 0.2s;
                font-family: inherit;
            }
            table.dataTable tbody th, table.dataTable tbody td {
                font-size: 12px !important;
            }
            .table-responsive {
                padding: 20px;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">KBB Yeterlik</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">KBB Yeterlik</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Ad Soyad</th>
                        <th>Poun</th>
                        <th>İncele</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($points as $item)
                            <tr data-id="{{ $item->user_id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ @$item->userName->first_name. ' '. @$item->userName->last_name }}</td>
                                <td class="@if($item->total_points > $total) text-success @else text-danger @endif">{{ $item->total_points }} / {{ $total }}</td>
                                <td>
                                    <a href="{{ route('competences.details', $item->user_id) }}" class="btn btn-success">İncele</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        </script>
        <script>
    $(document).ready(function () {
        $('.table').DataTable({
            dom: 'Bfrtip', // Adds buttons, search, and pagination
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'print'
            ],
            responsive: true, // Makes table responsive
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json' // Use Turkish localization
            },
            columnDefs: [
                { orderable: false, targets: [0] } // Disable ordering for the first column
            ],
        });
    });
</script>
    @endpush
@endsection
