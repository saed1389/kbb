@extends('admin.layouts.app')
@section('title')
    Mailing Üye Listesi
@endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
        <link rel="stylesheet"
              href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
        <style>
            input[type="text"] {
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
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Mailing Üye Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('members.index') }}">Üye Yönetimi </a>
                                </li>
                                <li class="breadcrumb-item active">Mailing Üye Listesi</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <button type="button" class="btn btn-primary waves-effect waves-light float-end mb-3 " data-bs-toggle="modal" data-bs-target="#backDropModal">
                            Yeni Ekle
                        </button>
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                            <div class="modal-dialog">
                                <form class="modal-content" action="{{ route('mailingUsers.store') }}" method="post">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="backDropModalTitle">Yeni Ekle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="first_name" class="form-label">Kulanıcı Adı</label>
                                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Kulanıcı Adı Giriniz">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="last_name" class="form-label">Kullanıcı Soyadı</label>
                                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Kullanıcı Soyadı Giriniz">
                                            </div>
                                            <div class="col mb-3">
                                                <label for="email" class="form-label">E-posta</label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="E-posta Giriniz" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                            İptal
                                        </button>
                                        <button type="submit" class="btn btn-primary">Ekle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-datatable table-responsive">
                    <table id="example" class="table table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>Email</th>
                            <th>OLUŞTURMA</th>
                            <th>DURUMU</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        {{-- Edit Modal --}}
        <div class="modal fade" id="editModal" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content" action="{{ route('mailingUsers.updateModal') }}" method="post">
                    @csrf
                    <input type="hidden" id="job_id" name="job_id">
                    <div class="modal-header">
                        <h5 class="modal-title" id="backDropModalTitle"> Meslek Düzenle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="first_nameEdit" class="form-label">Kulanıcı Adı</label>
                                <input type="text" id="first_nameEdit" name="first_name" class="form-control" placeholder="Kulanıcı Ad Giriniz">
                            </div>
                            <div class="col mb-3">
                                <label for="last_nameEdit" class="form-label">Kulanıcı Soyad</label>
                                <input type="text" id="last_nameEdit" name="last_name" class="form-control" placeholder="Kulanıcı Soyad Giriniz">
                            </div>
                            <div class="col mb-3">
                                <label for="emailEdit" class="form-label">E-posta</label>
                                <input type="email" id="emailEdit" name="email" class="form-control" placeholder="E-posta Giriniz" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">İptal</button>
                        <button type="submit" class="btn btn-primary">Düzenle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.2/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $(`meta[name="csrf-token"]`).attr('content')
                    }
                });
                $('#example').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: "{{ route('get_mailList') }}",
                    aoColumns: [
                        {
                            data: null,
                            render: function (data, type, row, meta) {
                                return meta.row + 1;
                            },
                            "searchable": false,
                            "orderable": false
                        },
                        {data: 'first_name', name: 'first_name', "searchable": true, "orderable": true},
                        {data: 'last_name', name: 'last_name', "searchable": true, "orderable": true},
                        {data: 'email', name: 'email', "searchable": true, "orderable": true},
                        {
                            data: "created_at",
                            name: 'created_at',
                            render: function (data) {
                                var date = new Date(data);

                                var formattedDate = date.toLocaleString('tr-TR', {
                                    day: 'numeric',
                                    month: 'numeric',
                                    year: 'numeric',
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric',
                                });

                                return formattedDate;
                            },
                            "searchable": false
                        },
                        {
                            data: null,
                            render: function (data, type, row) {
                                return '<td><label class="switch switch-success">' +
                                    '<input type="checkbox" class="switch-input active" name="status" id="status" data-id="' + row.id + '" value="' + row.id + '" ' + (row.status == 1 ? 'checked' : '') + '>' +
                                    '<span class="switch-toggle-slider">' +
                                    '<span class="switch-on">' +
                                    '<i class="ti ti-check"></i>' +
                                    '</span>' +
                                    '<span class="switch-off">' +
                                    '<i class="ti ti-x"></i>' +
                                    '</span>' +
                                    '</span>' +
                                    '</label></td>';
                            }, "searchable": false, "orderable": false
                        },
                        {
                            data: null,
                            render: function (data, type, row) {
                                return '<button value="' + row.id + '" class="btn btn-primary btn-sm editBtn">Düzenle</button> ' +
                                    '<button href="{{ url("admin/users/mailingUsers/delete") }}/' + row.id + '" type="button" class="btn btn-sm btn-danger" id="delete" >Sil</button>';
                            }, "searchable": false, "orderable": false
                        },
                    ],

                    "columnDefs": [{
                        "orderable": false,
                        "defaultContent": "",
                        'searchable': false,
                        'targets': [0, 1]
                    }],

                    dom: 'Bfrtip',
                    buttons: [{
                        "extend": 'excel',
                        "text": 'Excel',
                        "titleAttr": 'Excel',
                        "action": newexportaction,
                        "exportOptions": {
                            columns: ':not(:last-child)',
                        },
                        "filename": function () {
                            var d = new Date();
                            var l = d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + d.getDate();
                            var n = d.getHours() + "-" + d.getMinutes() + "-" + d.getSeconds();
                            return 'Mailing Üye Listesi' + l + ' ' + n;
                        },
                    }, {
                        "extend": 'pdfHtml5',
                        "text": 'PDF',
                        "titleAttr": 'PDF',
                        "action": newexportaction,

                    }, {
                        "extend": 'print',
                        "text": 'Print',
                        "titleAttr": 'Print',
                        "action": newexportaction,

                    },],
                    "pageLength": 50,
                    "language": {
                        "sProcessing": "İşleniyor...",
                        "sLengthMenu": "_MENU_ kaydı göster",
                        "sZeroRecords": "Sonuç bulunamadı",
                        "sEmptyTable": "Bu tabloda veri yok",
                        "sInfo": "Kayıttan _START_ ile _END_ arasındaki kayıtlar gösteriliyor, Toplam _TOTAL_",
                        "sInfoEmpty": "Toplam 0 kayıttan 0'dan 0'a kadar olan kayıtlar gösteriliyor",
                        "sInfoFiltered": "(toplam _MAX_ kayıt filtreleniyor)",
                        "sInfoPostFix": "",
                        "sSearch": "Tabloda Ara:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Doluyor...",
                        "oPaginate": {
                            "sFirst": "İlk",
                            "sLast": "Son",
                            "sNext": "İleri",
                            "sPrevious": "Geri"
                        },
                        "oAria": {
                            "sSortAscending": ": Sütunu artan düzende sıralamak için etkinleştirin",
                            "sSortDescending": ": Sütunu azalan düzende sıralamak için etkinleştirin"
                        }
                    }

                });
                $(document).ready(function () {
                    $(document).on('change', 'input.switch-input.active', function () {
                        var check_active = $(this).is(':checked') ? 1 : 0;
                        var check_id = $(this).attr('data-id');
                        var $dataTable = $('#example').DataTable()
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ url('/admin/users/mailingUsers/changeStatus') }}/" + check_id + "/" + check_active,
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: check_id,
                                active: check_active
                            },
                            success: function (response) {
                                toastr.success("Durum başarıyla değiştirildi!");
                                $dataTable.ajax.reload();
                            },
                            error: function (error) {
                                console.error("AJAX Error:", error);
                            }
                        });
                    });
                });
            });

            function newexportaction(e, dt, button, config) {
                var self = this;
                var oldStart = dt.settings()[0]._iDisplayStart;
                dt.one('preXhr', function (e, s, data) {
                    data.start = 0;
                    data.length = 2147483647;
                    dt.one('preDraw', function (e, settings) {
                        if (button[0].className.indexOf('buttons-copy') >= 0) {
                            $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                            $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                            $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                            $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-print') >= 0) {
                            $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                        }
                        dt.one('preXhr', function (e, s, data) {
                            settings._iDisplayStart = oldStart;
                            data.start = oldStart;
                        });
                        setTimeout(dt.ajax.reload, 0);
                        return false;
                    });
                });
                dt.ajax.reload();
            }
        </script>
        <script>
            $(document).ready(function () {
                $(document).on('click', '.editBtn', function () {
                    var title_id = $(this).val();
                    $('#editModal').modal('show');
                    $.ajax({
                        type: "GET",
                        url: "{{ url('admin/users/mailingUsers/editModal') }}/" + title_id,
                        success: function (response) {
                            console.log(response)
                            $('#first_nameEdit').val(response.job.first_name);
                            $('#last_nameEdit').val(response.job.last_name);
                            $('#emailEdit').val(response.job.email);
                            $('#job_id').val(response.job.id);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
