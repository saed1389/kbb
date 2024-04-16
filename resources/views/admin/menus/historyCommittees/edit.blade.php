@extends('admin.layouts.app')
@section('title') Geçmiş Dönemler Yönetim Kurulları @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Denetleme Kurulu</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('history-committees.index') }}">Geçmiş Dönemler Yönetim Kurulları </a>
                                </li>
                                <li class="breadcrumb-item active">Düzenle</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form class="" action="{{ route('history-committees.update', $member->id) }}" method="post" >
                        @csrf
                        @method('PUT')
                        <div class="">
                            <div class="card mb-4">
                                <h5 class="card-header"> Düzenle</h5>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="start_date" class="form-label">Görev Yıli</label>
                                            <input type="text" id="start_date" name="start_date" class="form-control" value="{{ $member->start_date }}" placeholder="Görev Yıli Giriniz" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="president" class="form-label">Başkan</label>
                                            <input type="text" id="president" name="president" class="form-control" value="{{ $member->president }}" placeholder="Başkan Giriniz" required >
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="sec_president" class="form-label">II. Başkan</label>
                                            <input type="text" id="sec_president" name="sec_president" class="form-control" value="{{ $member->sec_president }}" placeholder="II. Başkan Giriniz" required >
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="secretary" class="form-label">Genel Sekreter</label>
                                            <input type="text" id="secretary" name="secretary" class="form-control" value="{{ $member->secretary }}" placeholder="Genel Sekreter Giriniz" required >
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="accounting" class="form-label">Muhasip Üye</label>
                                            <input type="text" id="accounting" name="accounting" class="form-control" value="{{ $member->accounting }}" placeholder="Muhasip Üye Giriniz" required >
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="member" class="form-label">Üye</label>
                                            <textarea type="text" id="member" name="member" class="form-control" rows="4" placeholder="Üye Giriniz" required > {{ $member->member }} </textarea>
                                        </div>
                                        <div class="col-md-12 ">
                                            <a href="{{ route('history-committees.index') }}" class="btn btn-label-secondary" >İptal</a>
                                            <button type="submit" class="btn btn-primary" > Düzenle</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
