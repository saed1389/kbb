@extends('admin.layouts.app')
@section('title') tuplu mail @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">LÜTFEN MAİL ŞABLONU SEÇİNİZ <br> <small>Mail şablonu oluşturmak için lütfen şablon seçiniz:</small></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <a href="{{ route('mailingUsers.bulkNews') }}" target="_blank">
                            <div class="card card-border-shadow-primary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <div class="avatar me-2">
                                            <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-news ti-md"></i></span>
                                        </div>
                                        <h5 class="ms-1 mb-0">HABER ŞABLONU </h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <a href="{{ route('mailingUsers.flashNews') }}" target="_blank">
                            <div class="card card-border-shadow-danger">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <div class="avatar me-2">
                                            <span class="avatar-initial rounded bg-label-danger"><i class="ti ti-calendar ti-md"></i></span>
                                        </div>
                                        <h5 class="ms-1 mb-0">FLAŞ HABER ŞABLONU</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <a href="{{ route('mailingUsers.deceaseNewsMail') }}" target="_blank">
                            <div class="card card-border-shadow-dark">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <div class="avatar me-2">
                                            <span class="avatar-initial rounded bg-label-dark"><i class="ti ti-message-2 ti-md"></i></span>
                                        </div>
                                        <h5 class="ms-1 mb-0">VEFAT HABER ŞABLONU</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <a href="{{ route('mailingUsers.entryNewsMail') }}" target="_blank">
                            <div class="card card-border-shadow-info">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <div class="avatar me-2">
                                            <span class="avatar-initial rounded bg-label-info"><i class="ti ti-users ti-md"></i></span>
                                        </div>
                                        <h6 class="ms-1 mb-0">MANUEL HABER ŞABLONU</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
