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
<div class="row mt-5 justify-content-center">
    <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Mitra</h5>
                            <span class="h2 font-weight-bold mb-0">{{count($jumlahMitra)}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Jumlah Mitra</span>
                    </p>
                    <!-- Progrees <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="{{count($order)}}" style="width: 60%;"></div>
                    </div>
                    !--->
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Order</h5>
                            <span class="h2 font-weight-bold mb-0">{{count($jumlahBulanIni)}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Order Bulan Ini</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Order</h5>
                            <span class="h2 font-weight-bold mb-0">{{count($jumlahTahunIni)}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Order Tahun Ini</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Pendapatan</h5>
                            <span class="h2 font-weight-bold mb-0">Rp {{number_format($pendapatanBulanIni)}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                <i class="fas fa-coins"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Pendapatan Bulan Ini</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-3 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h1 class="pull-left text-gray">Order Masuk</h1>
                    <a href="{{route('order.create')}}" class="btn btn-info pull-right">Tambah Orderan</a>
                    <br/>
                    {{count($order)}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered data-table table-hover" width="100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>Atas Nama</th>
                                    <th name="nohp">Nomor Handphone</th>
                                    <th name="tglmasuk">Tangaal</th>
                                    <th name="status">status</th>
                                    <th name="name">Kasir</th>
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
        <div class="mt-3 col-lg-3">
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
                        {data: null, name:'atas_nama',
                            render: function(data){
                                var edit_button = '<a href="' + data.act + '" class="" role="button" aria-pressed="true">'+data.atas_nama+'</a>';
                                return edit_button;
                            }
                        },
                        {data: 'nohp', name: 'nohp'},
                        {data: 'tglmasuk', name: 'tglmasuk'},
                        {data: 'nama_status', name: 'status'},
                        {data: 'name', name: 'name'}
                    ]
                });
            });
        </script>
    @endif

  
</div>
@endsection

    