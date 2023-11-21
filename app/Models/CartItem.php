<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table= 'cart_itens';

    public $timestamps = false;

    protected $fillable= [
        'price',
        'amount'
    ];


    public function productStore()
    {
        return $this->belongsToMany(ProductStore::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
