@extends('layouts.argon')
@section('title')
    Order - {{$order[0]->statusnya->nama_status}}
@endsection
@section('dynamic-script')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lib/datatable/jquery.dataTables.css') }}">
<script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>


@endsection
@section('content')
{{-- jika memiliki data lebih dari satu --}}
@if(count($order) > 0)
<div class="row justify-content-center">

    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <h1 class="text-gray">{{$order[0]->statusnya->nama_status}}</h1>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                 <!-- Projects table -->
                <table class="table align-items-center table-flush" id="judultable">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{ count($order)}}
                        @foreach($order as $ordr)
                        <tr>
                            <td><a href="{{ route ('order.edit',['ordr' => $ordr->id_order]) }}">{{$ordr->atas_nama}}</a></td><td>{{$ordr->nohp}}</td><td>{{$ordr->created_at->format('d/m/Y | H:i')}}</td>
                            <td>
                                @if($ordr->status == 0)
                                
                                {{ Form::model($ordr, array('route' => array('updateto1', $ordr->id_order), 'method' => 'PATCH')) }}
                                <input type="hidden" name="id_order" value="{{$ordr->id_order}}">
                                {{ Form::submit($ordr->statusnya->nama_status, array('class' => $ordr->statusnya->kodewarna)) }}
                                {{ Form::close() }}
                                
                                @endif
                                @if($ordr->status == 1)

                                {{ Form::model($ordr, array('route' => array('updateto2', $ordr->id_order), 'method' => 'PATCH')) }}
                                <input type="hidden" name="id_order" value="{{$ordr->id_order}}">
                                {{ Form::submit($ordr->statusnya->nama_status, array('class' => $ordr->statusnya->kodewarna)) }}
                                {{ Form::close() }}
                                
                                @endif
                                @if($ordr->status == 2)
                                
                                {{ Form::model($ordr, array('route' => array('updateto3', $ordr->id_order), 'method' => 'PATCH')) }}
                                <input type="hidden" name="id_order" value="{{$ordr->id_order}}">
                                {{ Form::submit($ordr->statusnya->nama_status, array('class' => $ordr->statusnya->kodewarna)) }}
                                {{ Form::close() }}
                                
                                @endif
                            </td>
                        </tr>
                        @endforeach
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
                            <td><a href="{{route('statusorder', $ordrsts->no_status )}}" class="{{$ordrsts->kodewarna}}">{{$ordrsts->nama_status}}</a></td>
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
    </div>

    <script>
    $(document).ready( function () {
        $('#judultable').DataTable({
            "autoWidth" :false,
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
        });    
    } );
</script>

<script type="text/javascript">
     function confirmUpdate() {
        return confirm('Are you sure you want to delete?');
     }
</script>
</div>
@endif
{{-- endof - jika memiliki data lebih dari satu --}}
@endsection