<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table= 'orders';

    public $timestamps = false;

    protected $fillable= [
        'total_itens',
        'total_price',
        'finish'
    ];


    public function cartItem()
    {
        return $this->belongsTo(CartItem::class);
    }
}
