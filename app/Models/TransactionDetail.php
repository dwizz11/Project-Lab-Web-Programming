<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public function transaction()
    {
       return $this->belongsTo(transaction::class);
    }

    public function product()
    {
       return $this->belongsTo(product::class, 'product_id');
    }
}
