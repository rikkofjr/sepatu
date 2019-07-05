@extends('layouts.argon')
@section('title', 'Data Order Masuk')
@section('dynamic-script')
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/datatable/jquery.dataTables.css') }}">


@endsection

@section('header-content')
        
@endsection

@section('content')
{{-- jika memiliki data lebih dari satu --}}
@if(count($order) > 0)
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <h1 class="pull-left text-gray">Order Masuk</h1>
                <a href="{{route('order.create')}}" class="btn btn-info pull-right">Tambah Orderan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered data-table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Atas Nama</th>
                                <th name="nohp">Nomor Handphone</th>
                                <th name="tglmasuk">Tangaal</th>
                                <th name="nama_status">status</th>
                                <th name="act"></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
            
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">Jenis Status</div>
            <div class="card-body">
                @foreach($orderstatus as $ordrsts)
                    <table class="table table-stripped">
                        <tr>
                            <td><a href="{{ route ('statusorder', $ordrsts->no_status)}}" class="{{$ordrsts->kodewarna}}">{{$ordrsts->nama_status}}</a></td>
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
    </div>

    


    <script type="text/javascript">
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('jsonOrder') }}",
                columns: [
                    {data: 'atas_nama', name: 'atas_nama'},
                    {data: 'nohp', name: 'nohp'},
                    {data: 'tglmasuk', name: 'tglmasuk'},
                    {data: 'nama_status', name: 'nama_status'},
                    { data: null, name:'act',
                        render: function(data){
                            var edit_button = '<a href="' + data.act + '" class="btn btn-sm btn-primary" role="button" aria-pressed="true">Edit</a>';
                            return edit_button;
                        }
                    }
                ]
            });
        });
    </script>
@endif

@endsection