@extends('admin.layouts.app')
@section('title') Manuel Haber Mail Mail Gönderme @endsection
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.css"/>
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/spinkit/spinkit.css') }}" />
        <style>
            .ck-editor__editable {
                min-height: 300px;
            }
            .preview {
                text-align: center;
                overflow: hidden;
                width: 160px;
                height: 160px;
                margin: 10px;
                border: 1px solid red;
            }

            .section{
                margin-top:150px;
                background:#fff;
                padding:50px 30px;
            }
        </style>
    @endpush
    <div class="container-xxl flex-grow-1 container-p-y" style="padding-bottom: 60px !important;">
        <div class="card">
            <h5 class="card-header">Manuel Haber Mail Mail Gönderme</h5>
            <br>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="subject">Konu</label>
                        <input type="text" name="subject" id="subject" class="form-control" >
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="editor">Mail İçerik</label>
                        <textarea class="form-control editor" id="editor" name="news_body">
                &nbsp;&nbsp;&nbsp;
                <table style="margin-top: 30px; width: 600px;" align="center">
                    <tr>

                        <td style="display: block!important; max-width: 600px !important; margin: 0 auto !important; clear: both !important;">

                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ECECEC" style="background-color:#FFF; max-width: 600px;">
                                <tr>
                                    <td>

                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-top: 5px; background-color:#ffffff; padding-left: 1px; border-bottom: 4px solid #6991AB; margin: 0 auto; display: block;">
                                            <tr>
                                                <td width="67%" style="padding-left: 10px; padding-bottom: 10px;">
                                                    <font face="Arial">
                                                        <a href="http://www.kbb.org.tr/" target="_blank">
                                                            <img src="{{ asset('/assets/img/logoheadvefat.png') }}" width="100%" />
                                                        </a>
                                                    </font>
                                                </td>
                                                <td width="33%" align="center">
                                                    <font face="Arial">
                                                        <strong style="color: #333030;">
                                                            bizi takip edin!
                                                        </strong><br />
                                                    </font><font face="Arial">
                                                        <a href="https://www.facebook.com/T%C3%BCrk-Kulak-Burun-Bo%C4%9Faz-ve-Ba%C5%9F-Boyun-Cerrahisi-Derne%C4%9Fi-493168617369439/" target="_blank">
                                                            <img src="{{ asset('/assets/img/face.png') }}" width="32" height="31" style="margin-right: 1px; margin-top: 5px;" />
                                                        </a> <a href="https://www.instagram.com/tkbbvebbcd/" target="_blank">
                                                            <img src="{{ asset('/assets/img/instagram.png') }}" width="33" height="31" style="margin-right: 1px; margin-top: 5px;" />
                                                        </a> <a href="https://twitter.com/tkbbvebbcd" target="_blank">
                                                            <img src="{{ asset('/assets/img/twitter.png') }}" width="32" height="31" style="margin-top: 5px;" />
                                                        </a>
                                                    </font>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>

                                <tr style="background-color:#FFF">
                                    <td id="newslist" style="background-color:#ECECEC">



                                    </td>

                                </tr>
                                <tr>
                                    <td>

									Bu alana veri giriniz...


									</td>
                                </tr>

                                <tr>
                                    <td>
                                        <font face="Arial">
                                            <table width="100%" border="0" cellspacing="4" cellpadding="4"
                                                   style="background-color: #3454A7; padding-top: 5px; padding-left: 1px; border-top: 4px solid #012ea5; color: white; max-width: 600px; margin: 0 auto; display: block;">
                                                <tr>
                                                    <td valign="top">
                                                        <span style="font-size: 13px">
                                                            <img src="{{ asset('/assets/img/icon1.png') }}" />
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span style="font-size: 13px; color:white;">
                                                            Çobançeşme Sanayi Cad. No:11 Nish İstanbul A Blok Daire: 8 Yenibosna-İstanbul
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 5px;" valign="top">
                                                        <span style="font-size: 13px">
                                                            <img src="{{ asset('/assets/img/icon2.png') }}" />
                                                        </span>
                                                    </td>
                                                    <td style="padding-top: 5px;">
                                                        <span style="font-size: 13px; color: white">
                                                            T: +90 212
                                                            234 44 81 M: +90 530 265 30 00 F: +90
                                                            212 234 44 83
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 5px;" valign="top" width="5%">
                                                        <span style="font-size: 13px">
                                                            <img src="{{ asset('/assets/img/icon3.png') }}" />
                                                        </span>
                                                    </td>
                                                    <td style="padding-top: 5px;">
                                                        <a href="mailto:kbb@kbb.org.tr" style="color: #e9c048; text-decoration: none;">
                                                            <span style="font-size: 13px">
                                                                kbb@kbb.org.tr
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </font>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                &nbsp;&nbsp;&nbsp;
                        </textarea>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="memberList">Kullanıcı Listesi</label>
                        <select name="memberList" id="memberList" class="form-control" required="">
                            <option selected="" disabled>Liste Seçiniz</option>
                            <option value="0">Mailing Listesi</option>
                            <option value="1">Tüm Üyeler</option>
                        </select>
                        <div class="mt-3" id="total">
                            <p class="text-black">
                                Mail Gönderilecek Kişi Sayısı:
                                <span id="count" class="bg-danger text-white p-1"></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a type="button" data-mail-template-add="true" class="btn btn-success" id="useThemeBtn">Gonder</a>
                        <a type="button" data-mail-template-add="true" class="btn btn-info" id="testMail">Test Maili</a>
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
                    <div class="card-body" id="processDiv">
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
    </div>

    @push('scripts')
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/super-build/ckeditor.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/super-build/translations/tr.js"></script>
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

                const subjectElement = document.querySelector("input#subject");
                if (!subjectElement) {
                    alert("Konu alanı bulunamadı!");
                    return;
                }

                const subject = subjectElement.value.trim();
                if (!subject) {
                    alert("Lütfen bir konu giriniz!");
                    return;
                }

                const htmlTemplate = document.getElementById("editor").value;

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
            document.querySelectorAll('.editor').forEach(function (val) {
                CKEDITOR.ClassicEditor.create(val, {
                    toolbar: {
                        items: [
                            'exportPDF','exportWord', '|',
                            'findAndReplace', 'selectAll', '|',
                            'heading', '|',
                            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                            'bulletedList', 'numberedList', 'todoList', '|',
                            'outdent', 'indent', '|',
                            'undo', 'redo',
                            '-',
                            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                            'alignment', '|',
                            'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                            'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                            'textPartLanguage', '|',
                            'sourceEditing'
                        ],
                        shouldNotGroupWhenFull: true
                    },
                    language: 'tr',
                    list: {
                        properties: {
                            styles: true,
                            startIndex: true,
                            reversed: true
                        }
                    },
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                        ]
                    },
                    placeholder: 'Haber İçeriği',
                    fontFamily: {
                        options: [
                            'default',
                            'Arial, Helvetica, sans-serif',
                            'Courier New, Courier, monospace',
                            'Georgia, serif',
                            'Lucida Sans Unicode, Lucida Grande, sans-serif',
                            'Tahoma, Geneva, sans-serif',
                            'Times New Roman, Times, serif',
                            'Trebuchet MS, Helvetica, sans-serif',
                            'Verdana, Geneva, sans-serif'
                        ],
                        supportAllValues: true
                    },
                    fontSize: {
                        options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                        supportAllValues: true
                    },
                    htmlSupport: {
                        allow: [
                            {
                                name: /.*/,
                                attributes: true,
                                classes: true,
                                styles: true
                            }
                        ]
                    },
                    htmlEmbed: {
                        showPreviews: true
                    },
                    link: {
                        decorators: {
                            addTargetToExternalLinks: true,
                            defaultProtocol: 'https://',
                            toggleDownloadable: {
                                mode: 'manual',
                                label: 'Downloadable',
                                attributes: {
                                    download: 'file'
                                }
                            }
                        }
                    },
                    mention: {
                        feeds: [
                            {
                                marker: '@',
                                feed: [
                                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                    '@sugar', '@sweet', '@topping', '@wafer'
                                ],
                                minimumCharacters: 1
                            }
                        ]
                    },
                    removePlugins: [
                        // 'ExportPdf',
                        // 'ExportWord',
                        'AIAssistant',
                        'CKBox',
                        'CKFinder',
                        'EasyImage',
                        'RealTimeCollaborativeComments',
                        'RealTimeCollaborativeTrackChanges',
                        'RealTimeCollaborativeRevisionHistory',
                        'PresenceList',
                        'Comments',
                        'TrackChanges',
                        'TrackChangesData',
                        'RevisionHistory',
                        'Pagination',
                        'WProofreader',
                        'MathType',
                        'SlashCommand',
                        'Template',
                        'DocumentOutline',
                        'FormatPainter',
                        'TableOfContents',
                        'PasteFromOfficeEnhanced',
                        'CaseChange'
                    ]
                })
                    .catch(error => {
                        console.log(error);
                    });
            });
        </script>
        <script>
            document.getElementById("testMail").addEventListener("click", function () {
                var myModal = new bootstrap.Modal(document.getElementById("mailModal"));
                myModal.show();
            });
        </script>
        <script>
            $('#useThemeBtn').click(function() {
                var subject = $("#subject").val().trim();
                var selectedList = $('#memberList').val();

                // Get the editor content properly
                var newTemplate = $("#editor").val(); // For textarea
                if (typeof CKEDITOR !== "undefined" && CKEDITOR.instances.editor) {
                    newTemplate = CKEDITOR.instances.editor.getData(); // For CKEditor 4
                } else if (document.querySelector('.ck-editor__editable')) {
                    newTemplate = document.querySelector('.ck-editor__editable').innerHTML; // For CKEditor 5
                }

                // Check if subject is empty
                if (!subject) {
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
                            url: "{{ route('send-entry-news') }}",
                            method: "POST",
                            data: {
                                content: newTemplate,
                                subject: subject,
                                member: selectedList,
                                _token: "{{ csrf_token() }}" // Change this if in an external file
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
