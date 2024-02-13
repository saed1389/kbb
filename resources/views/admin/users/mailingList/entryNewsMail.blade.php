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
                                                            <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/logohead.png" width="100%" />
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
                                                            <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/face.png" width="32" height="31" style="margin-right: 1px; margin-top: 5px;" />
                                                        </a> <a href="https://www.instagram.com/tkbbvebbcd/" target="_blank">
                                                            <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/instagram.png" width="33" height="31" style="margin-right: 1px; margin-top: 5px;" />
                                                        </a> <a href="https://twitter.com/tkbbvebbcd" target="_blank">
                                                            <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/twitter.png" width="32" height="31" style="margin-top: 5px;" />
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
                                                            <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/icon1.png" />
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
                                                            <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/icon2.png" />
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
                                                            <img src="http://kbb.org.tr/Custom/Upload/News/mailsablon/icon3.png" />
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
                    <div class="col-md-3 mb-3">
                        <label class="form-label" for="memberList">Kullanıcı Listesi</label>
                        <select name="memberList" id="memberList" class="form-control">
                            <option selected="" disabled>Liste Seçiniz</option>
                            <option value="0">Mailing Listesi</option>
                            <option value="1">Tüm Üyeler</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mt-4"  >
                        <a type="button" data-mail-template-add="true" class="btn btn-success" id="useThemeBtn">Gönder</a>
                    </div>
                    <div class="col-md-3">
                        <div >
                            <p id="memberTotal" style="display: none">
                                {{ $total_mail }} E-posta Gönderiliyor:
                            </p>
                            <p id="userTotal" style="display: none">
                                {{ $total_user }} E-posta Gönderiliyor:
                            </p>
                            <div id="loadingSpinner" style="display: none;" class="sk-swing sk-primary">
                                <div class="sk-swing-dot"></div>
                                <div class="sk-swing-dot"></div>
                            </div>
                        </div>
                        <div id="finish" style="display: none;">
                            <strong class="text-success">E-posta Gönderildi</strong>
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
            $('#useThemeBtn').click(function () {
                var subject = document.getElementById("subject").value;
                var content = document.getElementById("editor").value;
                var e = document.getElementById("memberList").value;
                var member = e.value;
                $('#loadingSpinner').show();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN' : $(`meta[name="csrf-token"]`).attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('send-entry-news') }}",
                    method: 'POST',
                    data: { content: content, subject: subject, member:member },
                    success: function (response) {
                        $('#loadingSpinner').hide();
                        $('#finish').show();
                        toastr.success("E-postaları başarıyla gönderdi");
                    },
                    error: function (error) {
                        toastr.error("Bir hata var!!!");
                        console.error('Error sending email:', error);
                        $('#loadingSpinner').hide();
                    }
                });
            });

            $(document).ready(function () {
                $('#memberList').change(function () {
                    var selectedValue = $(this).val();
                    if (selectedValue === '0') {
                        $('#memberTotal').show();
                        $('#userTotal').hide();

                    } else if (selectedValue === '1') {
                        $('#memberTotal').hide();
                        $('#userTotal').show();
                    }
                });
            });
        </script>
    @endpush
@endsection
