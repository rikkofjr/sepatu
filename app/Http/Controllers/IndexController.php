<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class IndexController extends Controller
{
    public function ordershow($kode){
        $order = Order::where('kode', $kode)->first();
        return view ('order.show' , compact ('order'));
    }
}
