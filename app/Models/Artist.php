<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    use HasFactory;

    protected $fillable = ['artist_name','biography','image_url'];

    //return products of artist
    public function products()
    {
        return $this ->hasMany(Product::class);
    }

}
