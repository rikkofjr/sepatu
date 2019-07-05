@extends('layouts.argon')
@section('title')
    Buat Order Baru
@endsection
@section('dynamic-script')
    <script src="{{asset ('js/calculate.js')}}"></script>
    <script>
        //harga paket dirubah menjadi array javascript 
        var cake_prices = new Array();
        @foreach($paket as $pkty)
        cake_prices["{{$pkty->id_paket}}"]={{$pkty->paket_harga}};
        @endforeach
    </script>
@endsection
@section('content')
    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-gray">Buat Order Baru</h1>
            </div>
            <div class="card-body">
                {{ Form::open(array('route' => 'order.store', 'id' => 'cakeform')) }}
                <div class="form-group">
                    {{ Form::label('atas_nama', 'Nama', array('class' => 'form-control-label')) }}
                    {{ Form::text('atas_nama', '', array('class' => 'form-control form-control-alternative')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('nohp', 'No Handphone', array('class' => 'form-control-label')) }}
                    {{ Form::text('nohp', '', array('class' => 'form-control form-control-alternative')) }}
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('paket', 'Pilih Paket', array('class' => 'form-control-label')) }}<br/>
                            @foreach($paket as $pkt)
                                <label class="form-control-label"><input type="radio"  name="selectedcake" value="{{$pkt->id_paket}}" onclick="calculateTotal()" /> {{$pkt->paket_nama }}</label><br/>
                            @endforeach     
                        </div>
                        <br/>
                    </div>
                    <div class="col-md-6">
                        <input id="itemtotal" name="itemtotal" type="number" onkeyup="calculateTotal()" onclick="calculateTotal()" class="form-control form-control-alternative" min="1" /><br/>
                        <div id="totalPrice"></div>
                        <input type="hidden" name="harga" id="hargaTotal" class="form-control form-control-alternative" readonly>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('catatan', 'catatan', array('class' => 'form-control-label')) }}
                    {{ Form::textarea('catatan', '', array('class' => 'form-control form-control-alternative')) }}
                </div>
                
                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}
            </div>
            <div class="card-footer">
            
            </div>
        </div>
    </div>
    
@endsection