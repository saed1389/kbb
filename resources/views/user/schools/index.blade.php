@extends('user.layouts.app')
@section('title') KBB Okulları @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">KBB Okulları</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">KBB Okulları</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4 ">
                        <a href="{{ route('schools.create') }}" class="btn btn-primary waves-effect waves-light float-end" >
                            Başvuru formunu
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Başvuru tarihi</th>
                        <th style="width: 10%;">Durum</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($schools as $item)
                        @php
                        if ($item->status == 0) {
                            $status = 'Bekliyor';
                            $color = 'text-info';
                        } elseif ($item->status == 1) {
                            $status = 'Kabul edilmiş';
                            $color = 'text-success';
                        } else {
                            $status = 'Reddedilmiş';
                            $color = 'text-danger';
                        }
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                            <td><span class="{{ $color }}">{{ $status }}</span></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Sonuç bulunamadı</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
