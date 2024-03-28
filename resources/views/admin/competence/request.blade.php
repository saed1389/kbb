@extends('admin.layouts.app')
@section('title') KBB Yeterlik @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">KBB Yeterlik</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">KBB Yeterlik</li>

                            </ol>
                        </nav>
                    </div>

                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Başlangıç tarihi</th>
                        <th>Bitiş tarihi</th>
                        <th>Konum</th>
                        <th>Oluşturan</th>
                        <th>İndir</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($competences as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->start_date)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->end_date)) }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ @$item->userName->first_name. ' '. @$item->userName->last_name }}</td>
                            <th><a href="{{ asset($item->certificate) }}" class="btn btn-sm btn-success" download="">Dosya</a></th>
                            <td>
                                <a href="{{ route('competences-confirm-request', $item->id) }}"  class="btn btn-label-success btn-sm " >Onay ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('assets/js/code.js') }}"></script>
    @endpush
@endsection
