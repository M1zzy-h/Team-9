<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['catagory_name','description'];

    //return products of catagory
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
