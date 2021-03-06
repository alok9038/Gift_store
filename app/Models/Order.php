<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function coupon(){
        return $this->hasOne('App\Models\Coupon','id','coupon_id');
    }
}
