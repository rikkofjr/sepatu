<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CLientController extends Controller
{
    public function index()
    {
        return view('clients.index');
    }
    public function status(Request $request)
    {
        $kode = $request->checkstatus;
        $order = Order::where('kode', 'LIKE', '%'.$kode.'%')->get();;
        if(count($order) == 1){
            return view ('clients.status' , compact ('order'));
        }else{
            return view('errors.404');
        }
        
    }
}
