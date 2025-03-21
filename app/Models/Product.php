<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['catagory_id','artist_id','album_title','description','price','image_url','stock_level','stock_threshold','status'];

    //return catagory that product belongs to
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    //return order items for product
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    //return reviews for product
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    //return carts that have product
    public function cartItems()
    {
        return $this->hasMany(ShoppingCart::class);
    }

    //return inventory transactons for product
    public function inventoryTransactions()
    {
        return $this->hasMany(InventoryTransaction::class);
    }

}

