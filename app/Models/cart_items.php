<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_items extends Model
{
    use HasFactory;

    public function cart()
    {
       return $this->belongsTo(cart::class);
    }

    public function product()
    {
       return $this->belongsTo(product::class, 'product_id');
    }
}
