<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    public function items(){
        return $this->hasOne('App\Models\Product','id','product_id');
    }

    protected $guarded = [];
}
