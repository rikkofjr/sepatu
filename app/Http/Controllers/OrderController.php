<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
//Importing Models data
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\OrderPaket;
use App\User;
//importing plugin vendor
use Milon\Barcode\DNS1D;
use DataTables;


//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use Auth;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function dashboardOrderJson(){
        $user = Auth::user();
        $datanya = Order::query()
            ->join('tb_order_status', 'tb_order.status' ,'=', 'tb_order_status.no_status')
            ->select('id_order','atas_nama', 'nohp', 'tb_order.created_at', 'tb_order_status.nama_status')
            ->orderBy('id_order', 'desc');
        return Datatables::of($datanya)
            ->addColumn('tglmasuk', function ($datanya){
                return $datanya->created_at ? with (new carbon($datanya->created_at))->format('d/m/Y | H:i') : '';
            })
            ->addColumn('act', function ($datanya) {
                return route('order.edit', $datanya->id_order);
            })
            ->make(true);
    }
    public function cobadulu(){
        return view('order.coba');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderstatus = OrderStatus::all();
        $order = Order::all();
        $user = User::all();
        return view('order.index', compact('order', 'orderstatus','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket = OrderPaket::all();
        return view('order.create', compact('paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $now = now();
        $hash_now = hash('sha256', $now);
        $messages = [
            'required' => 'Formulir Wajid Diisi',
        ];
        $this->validate($request, [
            'atas_nama' =>'required',
            'nohp' =>'required',
            'selectedcake' =>'required',
            'itemtotal' =>'required',
        ],$messages);
        $order = new Order;
        $order->atas_nama = $request->atas_nama;
        $order->nohp = $request->nohp;
        $order->kode = $hash_now;
        $order->paket = $request->selectedcake;
        $order->jumlah_sepatu = $request->itemtotal;
        $order->harga= $request->harga;
        $order->kasir= Auth::user()->id;
        $order->perubah= Auth::user()->id;
        $order->status= 0;
        $order->catatan= $request->catatan;
        $order->remember_token= $request->_token;
        $order->save();
        return redirect()->route('order.show', array('id_order' => $order->id_order));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_order)
    {
        $order = Order::where('id_order', $id_order)->first();
        return view ('order.show' , compact ('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_order)
    {
        $orderstatus = OrderStatus::all();
        $order = Order::where('id_order', $id_order)->first(); //Find post of id = $id
        return view ('order.edit', compact('order','orderstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*
        Soft Delete Order
    */
    public function softdelete($id_order)
    {
        $order = Order::find($id_order);
    	$order->delete();

    	return redirect()->route('order.index');
    }

    //Get Status Order 
    public function status($status)
    {
        $orderstatus = OrderStatus::all();
        $order = Order::where('status', $status)->orderBy('id_order','desc')->take(100)->get(); 
        return view ('order.status', compact('order','orderstatus'));

    }
    public function updateto1(Request $request, $id_order)
    {
        $updateorder = Order::findOrFail($id_order);
        $updateorder->status = 1;
        $updateorder->perubah = Auth::user()->id;
        $updateorder->save();
        return redirect('dashboard/orderstatus/1');
        //return redirect()->route('judul.show', 
        //        $post->id_judul)->with('flash_message', 
        //        'Article, '. $post->judul.' updated');
    }
    public function updateto2(Request $request, $id_order)
    {
        $updateorder = Order::findOrFail($id_order);
        $updateorder->status = 2;
        $updateorder->perubah = Auth::user()->id;
        $updateorder->save();
        return redirect('dashboard/orderstatus/2');
        //return redirect()->route('judul.show', 
        //        $post->id_judul)->with('flash_message', 
        //        'Article, '. $post->judul.' updated');
    }
    public function updateto3(Request $request, $id_order)
    {
        $updateorder = Order::findOrFail($id_order);
        $updateorder->status = 3;
        $updateorder->perubah = Auth::user()->id;
        $updateorder->save();
        return redirect('dashboard/orderstatus/3');
        //return redirect()->route('judul.show', 
        //        $post->id_judul)->with('flash_message', 
        //        'Article, '. $post->judul.' updated');
    }
}
