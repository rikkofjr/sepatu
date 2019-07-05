<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*
    Get External Model
*/
use App\Models\OrderStatus;

class Order extends Model
{
    protected $table = 'tb_order';
    protected $primaryKey = 'id_order';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =[
        'atas_nama','no_hp','kode','paket','jumlah_sepatu','harga','status','kasir'
    ];

    public function statusnya(){
        return $this->belongsTo('App\Models\OrderStatus', 'status');
        
    }
    public function paketnya(){
        return $this->belongsTo('App\Models\OrderPaket', 'paket');
        
    }
}