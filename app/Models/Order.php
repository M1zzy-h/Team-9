<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'product_title',
        'product_quantity',
        'price',
        'image',
        'product_id',
        'payment_status',
        'delivery_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}