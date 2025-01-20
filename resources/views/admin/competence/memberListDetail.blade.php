@extends('admin.layouts.app')
@section('title') KBB Yeterlik @endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">KBB Yeterlik <strong>{{ @$name->userName->first_name. ' '.@$name->userName->last_name }}</strong></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Anasayfa </a>
                                </li>
                                <li class="breadcrumb-item active">KBB Yeterlik </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Başlık</th>
                        <th>Başlangıç t.</th>
                        <th>Bitiş t.</th>
                        <th>Konum</th>
                        <th>Poun</th>
                        <th>Aktivite tipi</th>
                        <th>Dosya</th>
                  
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($competences as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->point }}</td>
                            <td>{{ $item->pointName->title }}</td>
                            <th><a href="{{ asset($item->certificate) }}" class="btn btn-sm btn-success" download="">İndir</a></th>
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
