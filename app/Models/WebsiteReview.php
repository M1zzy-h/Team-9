<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteReview extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','rating','review_text','customer_service_rating'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
