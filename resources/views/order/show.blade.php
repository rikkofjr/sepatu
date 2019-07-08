<title>{{$order->atas_nama}} | {{$order->kode}}</title>
<div style="width:150px;text-align:center;">
    

<br/>
<div style="width:140px;text-align:center;margin:0 auto;padding:0 auto;">
{!! DNS2D::getBarcodeHTML('http://127.0.0.1:8000/status?checkstatus='.$order->kode, "QRCODE" , 4,4) !!}
<a href="{{URL::previous()}}">Back</a>
</div>
<style>
    .table-stripped tr td{
        border-bottom:1pt solid black;
    }
</style>
<table class="table table-stripped" width="100%">
                            <tbody>
                            <tr>
                                 <td colspan="2">{{$order->atas_nama}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$order->paketnya->paket_nama}} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="text-align:right;">x {{$order->jumlah_sepatu}}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>{{number_format($order->harga)}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">catatan</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:0;">{{$order->catatan}}</td>
                            </tr>
                        </tbody>
                        </table>
</div>
