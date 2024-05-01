@extends('admin.layouts.app')
@section('title') Başvuru Listesi @endsection
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
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">KBB Okuler Başvuru Listesi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">Başvuru Listesi</li>

                            </ol>
                        </nav>
                    </div>

                    <div class="card-datatable table-responsive">
                        <table id="example" class="table table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ad Soyad</th>
                                <th>Başvuru tarihi</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">KKB Başvuru Furmu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <strong>Adı-Soyadı: </strong> <span id="modalTitle"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Uzmanlık Tarihi: </strong> <span id="specialty_date"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Uzmanlık aldığı Kurum: </strong> <span id="specialty_subject"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Halen Çalıştığı Kurum: </strong> <span id="currently_work"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Mezun olduğu Tıp Fakültesi : </strong> <span id="graduated_faculty"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Mezuniyet Yılı: </strong> <span id="graduation_year"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>İlk tercih edilen Okul: </strong> <span id="first_school"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>İkinci tercih edilen Okul: </strong> <span id="second_school"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Ulusal KBB Kongre Kaydı: </strong> <span id="congress_registration"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Kurum izni alınıp alınamayacağı: </strong> <span id="institutional_permission"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Yeterlik Belgesi (Yılı, puanı, başarı sıralaması: </strong> <span id="certificate_proficiency"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Avrupa Board Belgesi: </strong> <span id="european_board"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Daha önce mezun olduğu Okul: </strong> <span id="previously_school"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Daha önce tamamlayamadığı Okul: </strong> <span id="complete_school"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>Telefon: </strong> <span id="telephone"></span>
                        </div>
                        <div class="col-md-6 mb-4">
                            <strong>E-posta: </strong> <span id="email"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
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

        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN' : $(`meta[name="csrf-token"]`).attr('content')
                    }
                });
                $('#example').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: "{{ route('get-school') }}",
                    aoColumns: [
                        {
                            data: null,
                            render: function(data, type, row, meta) {
                                return meta.row + 1;
                            },
                            searchable: false,
                            orderable: false
                        },
                        { data: 'name', name: 'name', searchable: true, orderable: true },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            render: function(data, type, row) {
                                // Format the date using JavaScript Date object
                                return moment(data).format('DD/MM/YYYY');
                            },
                            searchable: false,
                            orderable: true
                        },
                        {
                            data: 'status',
                            name: 'status',
                            render: function(data, type, row) {
                                // Convert status code to text
                                switch (data) {
                                    case 0:
                                        return '<span class="text-info">Bekliyor</span>';
                                    case 1:
                                        return '<span class="text-success">Kabul</span>';
                                    case 2:
                                        return '<span class="text-danger">Reddedilmiş</span>';
                                    default:
                                        return '';
                                }
                            },
                            searchable: true,
                            orderable: true
                        },
                        {
                            data: 'id', // Assuming 'id' is the unique identifier for each record
                            name: 'action',
                            render: function(data, type, row) {
                                // Create a select element with options based on status
                                var selectOptions = '';
                                switch (row.status) {
                                    case 0:
                                        selectOptions = '<option value="0" selected>Bekliyor</option><option class="text-success" value="1">Kabul</option><option class="text-danger" value="2">Reddedilmiş</option>';
                                        break;
                                    case 1:
                                        selectOptions = '<option value="0">Bekliyor</option><option class="text-success" value="1" selected>Kabul</option><option class="text-danger" value="2">Reddedilmiş</option>';
                                        break;
                                    case 2:
                                        selectOptions = '<option value="0">Bekliyor</option><option class="text-success" value="1">Kabul</option><option class="text-danger" value="2" selected>Reddedilmiş</option>';
                                        break;
                                    default:
                                        break;
                                }
                                return '<select class="form-select" data-id="' + row.id + '">' + selectOptions + '</select>';
                            },
                            searchable: false,
                            orderable: false
                        }
                    ],

                    "columnDefs": [{
                        "orderable": false,
                        "defaultContent": "",
                        'searchable'    : false,
                        'targets'       : [0,1]
                    }],

                    dom: 'Bfrtip',
                    buttons: [ {
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
                            return 'Başvuru Listesi' + l + ' ' + n;
                        },
                    }, {
                        "extend": 'pdfHtml5',
                        "text": 'PDF',
                        "titleAttr": 'PDF',
                        "action": newexportaction,

                    },{
                        "extend": 'print',
                        "text": 'Print',
                        "titleAttr": 'Print',
                        "action": newexportaction,

                    },],
                    "pageLength": 50,
                    "language": {
                        "sProcessing":    "İşleniyor...",
                        "sLengthMenu":    "_MENU_ kaydı göster",
                        "sZeroRecords":   "Sonuç bulunamadı",
                        "sEmptyTable":    "Bu tabloda veri yok",
                        "sInfo":          "Kayıttan _START_ ile _END_ arasındaki kayıtlar gösteriliyor, Toplam _TOTAL_",
                        "sInfoEmpty":     "Toplam 0 kayıttan 0'dan 0'a kadar olan kayıtlar gösteriliyor",
                        "sInfoFiltered":  "(toplam _MAX_ kayıt filtreleniyor)",
                        "sInfoPostFix":   "",
                        "sSearch":        "Tabloda Ara:",
                        "sUrl":           "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Doluyor...",
                        "oPaginate": {
                            "sFirst":    "İlk",
                            "sLast":    "Son",
                            "sNext":    "İleri",
                            "sPrevious": "Geri"
                        },
                        "oAria": {
                            "sSortAscending":  ": Sütunu artan düzende sıralamak için etkinleştirin",
                            "sSortDescending": ": Sütunu azalan düzende sıralamak için etkinleştirin"
                        }
                    }

                });
            });
            $('#example').on('click', 'td:nth-child(2)', function() {
                var rowData = $('#example').DataTable().row($(this).closest('tr')).data();
                $('#myModal').modal('show');
                $('#modalTitle').text(rowData.name);
                $('#specialty_date').text(rowData.specialty_date);
                $('#specialty_subject').text(rowData.specialty_subject);
                $('#currently_work').text(rowData.currently_work);
                $('#graduated_faculty').text(rowData.graduated_faculty);
                $('#graduation_year').text(rowData.graduation_year);
                $('#first_school').text(rowData.first_school);
                $('#second_school').text(rowData.second_school);
                $('#congress_registration').text(rowData.congress_registration);
                $('#institutional_permission').text(rowData.institutional_permission);
                $('#certificate_proficiency').text(rowData.certificate_proficiency);
                $('#european_board').text(rowData.european_board);
                $('#previously_school').text(rowData.previously_school);
                $('#complete_school').text(rowData.complete_school);
                $('#telephone').text(rowData.telephone);
                $('#email').text(rowData.email);
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
            $('#example').on('mouseenter', 'td:nth-child(2)', function() {
                $(this).css('cursor', 'pointer');
            });

            $('#example').on('mouseleave', 'td:nth-child(2)', function() {
                $(this).css('cursor', 'default');
            });

            $('#myModal').on('click', '.btn-primary', function() {
                window.print();
            });

            $('#example').on('change', 'select', function() {
                var id = $(this).data('id');
                var status = $(this).val();

                // Update the record in the database
                $.ajax({
                    url: "{{ route('schools-list.status', ['id' => ':id', 'status' => ':status']) }}".replace(':id', id).replace(':status', status),
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // Ensure to include CSRF token
                        id: id,
                        status: status
                    },
                    success: function(response) {
                        $('#example').DataTable().ajax.reload();
                        toastr.success("Durumu başarıyla değiştir!");
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                    }
                });
            });
        </script>
    @endpush
@endsection
