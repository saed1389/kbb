@extends('admin.layouts.app')
@section('title') Manşeti Yönet @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <style>
            #table tr { cursor: move; }
            #table td { vertical-align: middle; }
            .dragged { background-color: white; color: white; border-color: white; }
            .dragged td * { visibility: hidden; }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Manşeti Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Manşeti Listesi</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 mb-4">
                    </div>
                    <div class="table-responsive">
                        <table class="table text-striped table-bordered" id="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Haber Başlığı</th>
                                <th>Oluşturma</th>
                                <th>Hit</th>
                                <th>Yayından Durumu</th>
                            </tr>
                            </thead>
                            <tbody id="tableBodyContents">
                            <!-- Your loop to populate table rows -->
                            @foreach($news as $item)
                                <tr class="task-list tableRow" data-id="{{ $item->id }}">
                                    <td class="pl-3">
                                        <i class="fa fa-check"></i>
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->hit }}</td>
                                    <td>{{ $item->news_order }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script>
            $(function () {
                $("#table").DataTable({
                    ordering: false,
                    searching: false,
                    paging: false,
                    info: false
                });

                $("#tableBodyContents").sortable({
                    items: "tr",
                    cursor: 'move',
                    opacity: 0.5,
                    update: function () {
                        sendOrderToServer();
                    }
                });

                function sendOrderToServer() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var order = [];
                    var token = $('meta[name="csrf-token"]').attr('content');

                    $('tr.tableRow').each(function (index, element) {
                        order.push({
                            id: $(this).attr('data-id'),
                            position: index + 1
                        });
                    });

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ route('news.sort-order') }}",
                        data: {
                            _method: 'PUT',
                            order: order,
                            _token: token
                        },
                        success: function (response) {
                            if (response.status === "200") {
                                toastr.success("Order Change Successfully");

                            } else {
                                toastr.error("Something was wrong");
                            }
                        }
                    });
                }
            });
        </script>
    @endpush
@endsection
