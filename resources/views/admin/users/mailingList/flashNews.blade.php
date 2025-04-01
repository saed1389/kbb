@extends('admin.layouts.app')
@section('title') Flash Haber mail @endsection
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
            #newslist {
                max-height: none !important;
                height: auto !important;
                overflow: visible !important;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">FLASH HABER ŞABLONU OLUŞTUR</h5>
            <br>
            <div class="card-body">
                <input type="hidden" id="MemberSelect" value="">
                <input type="hidden" id="MemberID" value="{{ Auth::user()->id }}">
                <div class="col-md-12 mb-3 d-none" id="subjectContainer">
                    <label class="form-label bg-danger text-white p-2 " for="subject">Konu</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
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
                                            <table class="es-header" cellspacing="0" cellpadding="0" align="center" background="{{ asset('/assets/img/header-bg2.png') }}" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-image:url({{ asset('/assets/img/header-bg2.png') }});background-repeat:no-repeat;background-position:center top">
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
                                                                                            <img src="{{ asset('/assets/img/header-bg2.png') }}" alt="" width="600" usemap="#kbb" class="adapt-img" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" border="0">
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
                                            <h3 style="margin: 10px 15px 0px 15px; border-bottom: 1px solid #ccc; padding-bottom: 5px;">
                                                <font face="Arial" style="color: #dedede">Flash Haberler</font>
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
                                                                                            <img src="{{ asset('/assets/img/footer-bg2.png') }}" alt="" width="600" usemap="#kbbmail" class="adapt-img" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" border="0">
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
                                <option selected="" disabled>Liste Seçiniz</option>
                                <option value="0">Mailing Listesi</option>
                                <option value="1">Tüm Üyeler</option>
                            </select>
                            <div class="mt-3 d-none" id="total">
                                <p class="text-black">
                                    Mail Gönderilecek Kişi Sayısı:
                                    <span id="count" class="bg-danger text-white p-1"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-4">
                            <a type="button" data-mail-template-add="true" class="btn btn-success" id="shablun">ŞABLONU KULLAN</a>
                            <a type="button" data-mail-template-add="true" class="btn btn-success d-none" id="useThemeBtn">Gonder</a>
                            <a type="button" data-mail-template-add="true" class="btn btn-info d-none" id="testMail">Test Maili</a>
                        </div>
                        <div class="modal fade" id="mailModal" tabindex="-1" aria-labelledby="mailModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mailModalLabel">Lütfen Test Maili Seçiniz</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Seç</th>
                                                <th>Mail Adresi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input type="checkbox" name="emails" value="yigitdr@yahoo.com"></td>
                                                <td>yigitdr@yahoo.com</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input type="checkbox" name="emails" value="saed.1389@gmail.com"></td>
                                                <td>saed.1389@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><input type="checkbox" name="emails" value="haberkbb@gmail.com"></td>
                                                <td>haberkbb@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><input type="checkbox" name="emails" value="kbb@kbb.org.tr"></td>
                                                <td>kbb@kbb.org.tr</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><input type="checkbox" name="emails" value="btopuz@pau.edu.tr"></td>
                                                <td>btopuz@pau.edu.tr</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><input type="checkbox" name="emails" value="tkbbd@kbb.org.tr"></td>
                                                <td>tkbbd@kbb.org.tr</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td><input type="checkbox" name="emails" value="dryigit@hotmail.com"></td>
                                                <td>dryigit@hotmail.com</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                        <button type="button" class="btn btn-primary" id="sendMailBtn">Seçilenleri Gönder</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-body" id="list">
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
                <div class="card-body d-none" id="processDiv">
                    <div class="row">
                        <div class="card">
                            <div class="card-header mt-3 bg-gray text-white">
                                <h3 class="text-white">E-MAİL GÖNDERİM TABLOSU</h3>
                                <p>Lütfen Mailing Bitene Kadar Bekleyiniz</p>
                            </div>
                            <p class="mt-3">Giden E-Mail Adresi: <span id="sending-email" class="text-primary">Başlatılıyor...</span></p>
                            <p>Kalan Zaman</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                            <div class="col-md-3">
                                <a id="stop-button" class="btn btn-danger mb-4 mt-2 text-white">Durdur</a>
                            </div>
                        </div>
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
        <script>
            document.getElementById("sendMailBtn").addEventListener("click", function() {
                let selectedEmails = [];
                document.querySelectorAll("input[name='emails']:checked").forEach((checkbox) => {
                    selectedEmails.push(checkbox.value);
                });

                if (selectedEmails.length === 0) {
                    alert("Lütfen en az bir mail adresi seçiniz!");
                    return;
                }

                const subjectElement = document.querySelector("input#subject"); // Use querySelector to specifically target the input
                if (!subjectElement) {
                    alert("Konu alanı bulunamadı!");
                    return;
                }

                const subject = subjectElement.value.trim();
                if (!subject) {
                    alert("Lütfen bir konu giriniz!");
                    return;
                }

                const htmlTemplate = document.getElementById("newstemplate").innerHTML;

                fetch('/admin/send-newsletter', {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                    },
                    body: JSON.stringify({ emails: selectedEmails, subject: subject, template: htmlTemplate })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert("E-postalar başarıyla gönderildi!");
                        } else {
                            alert("Hata: " + data.error);
                        }
                    })
                    .catch(error => console.error("Error:", error));
            });

        </script>
        <script>
            document.getElementById("testMail").addEventListener("click", function () {
                var myModal = new bootstrap.Modal(document.getElementById("mailModal"));
                myModal.show();
            });
        </script>
        <script>
            const divHide = document.getElementById("shablun");
            const divList = document.getElementById('list');
            const btnShow = document.getElementById("useThemeBtn");
            const divSubject = document.getElementById('subjectContainer');
            const divTotal = document.getElementById('total');
            const btnTest = document.getElementById('testMail');
            const divProcess = document.getElementById('processDiv');

            divHide.addEventListener("click", () => {
                divHide.classList.add("d-none");
                btnShow.classList.remove("d-none");
                divList.classList.add("d-none");
                divSubject.classList.remove('d-none');
                divTotal.classList.remove('d-none');
                btnTest.classList.remove("d-none");
                divProcess.classList.remove('d-none');
            });
        </script>
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
                                return '<img class="rounded w-50" src="/'+data+'" width="100" alt="">'
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
                        addNewsToList(newsId);
                    } else {
                        selectedNews = selectedNews.filter(id => id !== newsId);
                        $('#newslist').find(`#news-${newsId}`).remove();
                    }
                });

                function addNewsToList(newsId) {
                    var ajaxEndpoint = '/admin/users/mailingUsers/get_news_data/' + newsId;

                    $.ajax({
                        url: ajaxEndpoint,
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            var newsData = response.data;
                            var newsItem = `
                    <table id="news-${newsData.id}" align="center" cellpadding="0" cellspacing="0" bgcolor="#fff"
                        style="max-width: 558px; margin: 10px auto; display: block; border: 1px solid #ccc;">
                        <tbody>
                            <tr>
                                <td><img width="200px" src="{{ env('APP_URL') }}/${newsData.image}" alt="${newsData.title}"></td>
                                <td style="border-left:1px solid #ccc; padding:5px; color: #00498f; font-size: 14px; font-family: Arial;">
                                    <p><strong><a style="text-decoration: none; color: #00498f;" href="{{ env('APP_URL') }}/bilgi-merkezi/haberler/${newsData.slug}">${newsData.title}</a></strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>`;

                            $('#newslist').append(newsItem);
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
                var subject = document.getElementById("subject").value.trim();
                var newTemplate = $("#newstemplate").html();
                var selectedList = $('#memberList').val();

                // Check if subject is empty
                if (subject === "") {
                    Swal.fire({
                        title: "Uyarı!",
                        text: "Lütfen bir konu giriniz!",
                        icon: "warning",
                        confirmButtonText: "Tamam"
                    });
                    return; // Stop execution if subject is empty
                }

                Swal.fire({
                    title: "Emin misiniz?",
                    text: "Bu işlemi gerçekleştirmek istediğinize emin misiniz?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Evet, gönder!",
                    cancelButtonText: "İptal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('send-flash-news') }}",
                            method: 'POST',
                            data: {
                                content: newTemplate,
                                subject: subject,
                                member: selectedList,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                Swal.fire("Başarılı!", response.message, "success");
                            },
                            error: function(error) {
                                Swal.fire("Hata!", "Bir hata oluştu!", "error");
                            }
                        });
                    }
                });
            });
        </script>
        <script>
            function updateProgress() {
                $.ajax({
                    url: "{{ route('get-mail-progress') }}",
                    method: "GET",
                    success: function (response) {

                        $(".progress-bar").css("width", response.progress + "%")
                            .attr("aria-valuenow", response.progress)
                            .text(response.progress + "%");

                        if (response.current_email) {
                            $("#sending-email").text(response.current_email);
                        } else {
                            $("#sending-email").text("Bekleniyor...");
                        }

                        if (response.status !== "stopped" && response.progress < 100) {
                            setTimeout(updateProgress, 3000);
                        } else {
                            $("#stop-button").hide();
                        }
                    },
                    error: function () {
                        toastr.error("lerleme güncellemesi başarısız oldu");
                    }
                });
            }

            $(document).ready(function () {
                updateProgress();
            });

            function updateProgress() {
                $.ajax({
                    url: "{{ route('get-mail-progress') }}",
                    method: "GET",
                    success: function (response) {

                        $(".progress-bar").css("width", response.progress + "%")
                            .attr("aria-valuenow", response.progress)
                            .text(response.progress + "%");

                        if (response.current_email) {
                            $("#sending-email").text(response.current_email);
                        } else {
                            $("#sending-email").text("Bekleniyor...");
                        }

                        if (response.status !== "stopped" && response.progress < 100) {
                            setTimeout(updateProgress, 3000);
                        } else {
                            $("#stop-button").hide();
                        }
                    },
                    error: function () {
                        toastr.error("lerleme güncellemesi başarısız oldu");
                    }
                });
            }
        </script>
        <script>
            document.getElementById("memberList").addEventListener("change", function() {
                var selectedValue = this.value;
                var totalDiv = document.getElementById("total");
                var countSpan = document.getElementById("count");

                if (selectedValue === "0") {
                    countSpan.textContent = "{{ $total_mail }}"; // Show mailing list count
                    totalDiv.classList.remove("d-none");
                } else if (selectedValue === "1") {
                    countSpan.textContent = "{{ $total_user }}"; // Show total user count
                    totalDiv.classList.remove("d-none");
                } else {
                    totalDiv.classList.add("d-none");
                }
            });
        </script>
    @endpush
@endsection
