<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderStatus extends Model
{
    protected $table ='tb_order_status';
    protected $primaryKey = 'no_status';
}
