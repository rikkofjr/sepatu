@extends('layouts.argon')
@section('title')
    Edit Order {{$order->atas_nama}}
@endsection
@section('dynamic-script')

@endsection
@section('content')
    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-white">Buat Order Baru</h1>
            </div>
            <div class="card-body">
            {{ Form::model($order, array('route' => array('order.update', $order->id_order), 'method' => 'PUT')) }}
                <div class="form-group">
                    {{ Form::label('atas_nama', 'Nama', array('class' => 'form-control-label')) }}
                    {{ Form::text('atas_nama', null, array('class' => 'form-control form-control-alternative')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('nohp', 'No Handphone', array('class' => 'form-control-label')) }}
                    {{ Form::text('nohp', null, array('class' => 'form-control form-control-alternative')) }}
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Detail Pesanan</h5>
                        <table class="table table-stripped">
                            <tr>
                                <td>Nama Paket</td>
                                <td>{{$order->paketnya->paket_nama}}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Sepatu</td>
                                <td>{{$order->jumlah_sepatu}}</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>{{number_format($order->harga)}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h5>Catatan</h5><br/>
                                    {{ Form::textarea('catatan', null, array('class' => 'form-control form-control-alternative')) }}
                                </td>
                            </tr>
                        </table>                     
                    </div>
                    <div class="col-md-6">
                        {!! DNS2D::getBarcodeHTML('http://127.0.0.1:8000/order/'.$order->kode, "QRCODE" , 5,5) !!}
                        {{$order->kode}}
                    </div>
                </div>
                
                <br/>

                {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}{{ Form::close() }} 
                {!! Form::open(['method' => 'PATCH', 'route' => ['softdeleteorder', $order->id_order] ]) !!}{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}{!! Form::close() !!}

            </div>
            <div class="card-footer">
            
            </div>
        </div>
    </div>
    
@endsection