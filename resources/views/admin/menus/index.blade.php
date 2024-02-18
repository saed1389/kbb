@extends('admin.layouts.app')
@section('title') Menü Listesi @endsection
@section('content')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <style>
        #table tr { cursor: move; }
        #table td { vertical-align: middle; }
        .dragged { background-color: white; color: white; border-color: white; }
        .dragged td * { visibility: hidden; }
        .sortable-icon { cursor: move}
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Menü Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Menü Listesi</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('menus.create') }}" class="btn btn-primary waves-effect waves-light float-end ">
                            Yeni Menü Ekle
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                @foreach($menus as $menu)
                    <div class="accordion-item" data-id="{{ $menu->id }}">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="accordion-header" id="panelsStayOpen-heading{{ $menu->id }}">
                                    <button class="accordion-button collapsed draggable-handle" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $menu->id }}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{ $menu->id }}">
                                        <span class="sortable-icon "><i class="fa-solid fa-bars"></i> &nbsp; &nbsp;</span>
                                        {{ $menu->title }}
                                    </button>
                                </h2>
                            </div>
                            <div class="col-md-2" style="text-align: right; padding-right: 50px">
                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-info btn-sm">Düzenle</a>
                                <button class="btn btn-danger btn-sm" type="button" href="{{ route('menus.delete', $menu->id) }}" id="delete">Sil</button>
                            </div>
                        </div>

                        <div id="panelsStayOpen-collapse{{ $menu->id }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading{{ $menu->id }}">
                            <div class="accordion-body">
                                @php
                                    $types = \App\Models\Menu::where('parent_id', $menu->id)->orderBy('menuOrder')->get();
                                @endphp
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px;">#</th>
                                            <th scope="col">MENÜ BAŞLIK</th>
                                            <th scope="col">MENÜ HERF</th>
                                            <th scope="col">OLUŞTURMA</th>
                                            <th scope="col">HIT</th>
                                            <th scope="col">İŞLEMLER</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tableBodyContents">
                                        @foreach($types as $type)
                                            <tr class="task-list tableRow" data-id="{{ $type->id }}">
                                                <td style="width: 10px;">
                                                    <i class="fa-solid fa-bars"></i>
                                                </td>
                                                <td>
                                                    {{ $type->title }}
                                                </td>
                                                <td>
                                                    {{ $type->href }}
                                                </td>
                                                <td>
                                                    {{ $type->created_at }}
                                                </td>
                                                <td>
                                                    {{ $type->hit }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('menus.edit', $type->id) }}" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                        Düzenle
                                                    </a>
                                                    <button type="button" href="{{ route('menus.delete', $type->id) }}" id="delete" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                        Sil
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
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
                    update: function() {
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

                    $('tr.tableRow').each(function(index,element) {
                        order.push({
                            id: $(this).attr('data-id'),
                            position: index+1
                        });
                    });

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ route('manus.updateTableOrder') }}",
                        data: {
                            _method:'post',
                            order: order,
                            _token: token
                        },
                        success: function(response) {

                            if (response.status === "200") {
                                toastr.success("Menü sıralaması başarıyla değiştirildi");
                            } else {
                                toastr.error("Bir şeyler yanlış gitti");
                            }
                        }
                    });
                }
            });
        </script>

        <script type="text/javascript">

            $(function () {
                new Sortable(document.getElementById('accordionPanelsStayOpenExample'), {
                    handle: '.sortable-icon',
                    animation: 150,
                    onUpdate: function (event) {
                        sendAccordionOrderToServer();
                    }
                });

                function sendAccordionOrderToServer() {
                    var order = [];
                    $(".accordion-item").each(function (index, element) {
                        order.push({
                            id: $(this).data('id'),
                            position: index + 1
                        });
                    });

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var token = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "{{ route('manus.updateAccordionOrder') }}", // Adjust the route name accordingly
                        data: {
                            _method: 'post',
                            order: order,
                            _token: token
                        },
                        success: function (response) {
                            if (response.status === "200") {
                                toastr.success("Ana menü sıralaması başarıyla değiştirildi");
                            } else {
                                toastr.error("Bir şeyler yanlış gitti");
                            }
                        }
                    });
                }
            });
        </script>
    @endpush
@endsection
