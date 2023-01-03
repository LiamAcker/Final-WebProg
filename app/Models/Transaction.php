<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transaction_item(){
        return $this->belongstoMany(Transaction_item::class, 'transaction_items', 'transaction_id', 'product_id');
    }
}
