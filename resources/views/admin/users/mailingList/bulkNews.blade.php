@extends('admin.layouts.app')
@section('title') tuplu mail @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/spinkit/spinkit.css') }}" />
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
            <h5 class="card-header">HABER ŞABLONU OLUŞTUR</h5>
            <br>
            <input type="hidden" id="MemberSelect" value="">
            <input type="hidden" id="MemberID" value="{{ Auth::user()->id }}">
            <div id="newstemplate">
                &nbsp;&nbsp;&nbsp;
                <table style="margin-top: 30px; width: 600px;" align="center">
                    <tbody>
                    <tr>
                        <td style="display: block!important; max-width: 600px !important; margin: 0 auto !important; clear: both !important;">
                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ECECEC" style="background-color:#FFF; max-width: 600px;">
                                <tbody>
                                <tr>
                                    <td height="129">
                                        <table class="es-header" cellspacing="0" cellpadding="0" align="center" background="http://kbb.org.tr/Custom/Upload/News/mailsablon/header-bg2.png" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-image:url(http://kbb.org.tr/Custom/Upload/News/mailsablon/header-bg2.png);background-repeat:no-repeat;background-position:center top">
                                            <tbody>
                                            <tr>
                                                <td align="center" style="padding:0;Margin:0">
                                                    <table class="es-header-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                                                        <tbody>
                                                        <tr>
                                                            <td align="left" style="padding:0;Margin:0">
                                                                <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td align="center" valign="top" style="padding:0;Margin:0;width:600px">
                                                                            <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td align="center" style="padding:0;Margin:0;font-size:0px">
                                                                                        <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/header-bg2.png" alt="" width="600" usemap="#kbb" class="adapt-img" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" border="0">
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr style="background-color:#FFFFFF">
                                    <td  style="background-color:#076BAE; padding-top: 0px; padding-right: 20px; padding-bottom: 40px; padding-left: 20px;">
                                        <h3 style="margin: 0px; text-align: center; padding-bottom: 5px;">
                                            <font face="Arial">
                                                <font color="#afc5ff" size="4">TÜRK KBB HABER</font>
                                                <br>
                                                <font color="#FFFFFF" size="3">Genel Haberler</font>
                                            </font>
                                        </h3>
                                        <div id="newslist">

                                        </div>
                                        &nbsp; &nbsp;
                                    </td>

                                </tr>
                                <tr>
                                    <td height="100">
                                        <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                                            <tbody>
                                            <tr>
                                                <td align="center" style="padding:0;Margin:0">
                                                    <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                                                        <tbody>
                                                        <tr>
                                                            <td align="left" style="padding:0;Margin:0">
                                                                <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td align="center" valign="top" style="padding:0;Margin:0;width:600px">
                                                                            <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td align="center" style="padding:0;Margin:0;font-size:0px">
                                                                                        <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/footer-bg2.png" alt="" width="600" usemap="#kbbmail" class="adapt-img" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" border="0">
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                &nbsp;&nbsp;&nbsp;

                <map name="kbb" id="kbb">
                    <area shape="rect" coords="476,48,508,79" href="https://www.facebook.com/T%C3%BCrk-Kulak-Burun-Bo%C4%9Faz-ve-Ba%C5%9F-Boyun-Cerrahisi-Derne%C4%9Fi-493168617369439/" target="_blank" alt="">
                    <area shape="rect" coords="513,48,547,78" href="https://www.instagram.com/tkbbvebbcd/" target="_blank" alt="">
                    <area shape="rect" coords="553,48,586,79" href="https://twitter.com/tkbbvebbcd" target="_blank" alt="">
                </map>

                <map name="kbbmail" id="kbbmail">
                    <area shape="rect" coords="33,64,100,81" href="mailto:kbb@kbb.org.tr" alt="">
                </map>
            </div>
            <div class="body">
                <div class="row clearfix" style="margin-left: 78px;">
                    <div class="col-md-3">
                        <label class="form-label" for="memberList">Kullanıcı Listesi</label>
                        <select name="memberList" id="memberList" class="form-control" required="">
                            <option value="0" selected>Mailing Listesi</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mt-4"  >
                        <a type="button" data-mail-template-add="true" class="btn btn-success" id="useThemeBtn">ŞABLONU KULLAN </a>
                    </div>
                    <div class="col-md-3">
                        <div id="loadingSpinner" style="display: none;">
                            <p>
                               {{ $total_mail }} E-posta Gönderiliyor:
                            </p>
                            <div class="sk-swing sk-primary">
                                <div class="sk-swing-dot"></div>
                                <div class="sk-swing-dot"></div>
                            </div>
                        </div>
                        <div id="finish" style="display: none;">
                            <strong class="text-success">{{ $total_mail }} E-posta Gönderildi</strong>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                <div class="card-datatable table-responsive">
                    <table id="example" class="table table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Seç</th>
                            <th>Haber Başlığı</th>
                            <th>HABER RESİM</th>
                            <th>HABER URL</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>

    @push('scripts')
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
                        'X-CSRF-TOKEN' : $(`meta[name="csrf-token"]`).attr('content')
                    }
                });

                $('#example').DataTable({
                    processing : true,
                    serverSide : true,
                    responsive: true,
                    ajax: "{{ route('get_news') }}",
                    aoColumns : [
                        {
                            data: null,
                            render: function(data, type, row, meta) {
                                return meta.row + 1;
                            },
                            "searchable": false,
                            "orderable": false
                        },

                        { data: null,
                            render:function (data, type, row) {
                                return '<td>' +
                                    '<div class="form-check form-check-success">' +
                                    '<input class="form-check-input" type="checkbox" name="mail" value="'+row.id+'" data-member-id="'+row.id+'" id="customCheckSuccess">' +
                                    '</div>' +
                                    '</td>'
                            },
                            "searchable": false, "orderable": false},
                        { data: 'title', name: 'title',
                            render: function (data, type, row) {
                                return data.length > 50 ? data.substr(0, 50) + '...' : data;
                            },
                            "searchable": true
                        },
                        { data: 'image', name: 'image',
                            render: function (data, type, row) {
                                return '<img class="rounded w-50" src="/uploads/news/small/'+data+'">'
                            },
                            "searchable": true
                        },
                        { data: 'news_href', name: 'news_href', "searchable": false, "orderable": false},
                    ],
                    "columnDefs": [{
                        "orderable": false,
                        "defaultContent": "",
                        'searchable'    : false,
                        'targets'       : [0,1,4]
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
                            return 'Haber Listesi' + l + ' ' + n;
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
                        "sInfo":          "Toplam _TOTAL_ kayıttan _START_ ile _END_ arasındaki kayıtlar gösteriliyor",
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
                var selectedNews = [];

                $(document).on('change', 'input[name="mail"]', function () {
                    var newsId = $(this).val();

                    if ($(this).is(':checked')) {
                        selectedNews.push(newsId);
                    } else {
                        selectedNews = selectedNews.filter(function (id) {
                            return id !== newsId;
                        });
                    }
                    generateEmailTemplate();
                });

                function generateEmailTemplate() {
                    var emailTemplate = '';

                    emailTemplate += '&nbsp;&nbsp;&nbsp;';

                    if (selectedNews.length > 0) {

                        selectedNews.forEach(function (newsId) {
                            fetchNewsData(newsId, function (newsData) {
                                emailTemplate += '<table id="' + newsData.id + '" align="center" cellpadding="0" cellspacing="0" bgcolor="#fff" style="max-width: 558px; margin: 0 auto; display: block; border: 1px solid #ccc;">';
                                emailTemplate += '<tbody>';
                                emailTemplate += '<tr>';
                                emailTemplate += '<td>';
                                emailTemplate += '<img width="200px" src="{{ env('APP_URL') }}/uploads/news/small/' + newsData.image + '" alt="' + newsData.title + '">';
                                emailTemplate += '</td>';
                                emailTemplate += '<td style="border-left:1px solid #ccc; padding:5px; color: #00498f; font-size: 14px; font-family: Arial; margin: 0px; width: 406px;">';
                                emailTemplate += '<p>';
                                emailTemplate += '<strong style="width:100%">';
                                emailTemplate += '<a style="text-decoration: none; color: #00498f;" href="{{ env('APP_URL') }}/haber/' + newsData.slug + '">' + newsData.title + '</a>';
                                emailTemplate += '</strong>';
                                emailTemplate += '</p>';
                                emailTemplate += '</td>';
                                emailTemplate += '</tr>';
                                emailTemplate += '</tbody>';
                                emailTemplate += '</table>';

                                $('#newslist').html(emailTemplate);
                            });
                        });


                    } else {
                        emailTemplate += '<p style="color: white">No news selected</p>';
                    }

                    $('#newslist').append(emailTemplate);
                }

                function fetchNewsData(newsId, callback) {
                    var ajaxEndpoint = '/admin/users/mailingUsers/get_news_data/' + newsId;

                    $.ajax({
                        url: ajaxEndpoint,
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            var newsData = response.data;
                            callback(newsData);
                        },
                        error: function (error) {
                            console.error('Error fetching news data:', error);
                        }
                    });
                }
            });
        </script>
        <script type="text/javascript">
            $('#useThemeBtn').click(function() {
                var newTemplate = $("#newstemplate")[0].innerHTML;
                $('#loadingSpinner').show();

                $.ajax({
                    url: "{{ route('send-bulk-news') }}",
                    method: 'POST',
                    data: { content: newTemplate },
                    success: function(response) {
                        $('#loadingSpinner').hide();
                        $('#finish').show();
                        toastr.success("E-postaları başarıyla gönderdi");
                    },
                    error: function(error) {
                        toastr.error("Bir hata var!!!");
                        console.error('Error sending email:', error);
                        $('#loadingSpinner').hide();
                    }
                });
            });
        </script>
    @endpush
@endsection
