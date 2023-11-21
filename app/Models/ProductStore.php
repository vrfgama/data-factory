<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    use HasFactory;

    protected $table= 'product_stores';

    public $timestamps = false;

    protected $fillable= [
        'stock',
        'price'
    ];


    public function product()
    {
        return $this->belongsToMany(Product::class);
    }


    public function store()
    {
        return $this->belongsToMany(Store::class);
    }


    public function cartItem()
    {
        return $this->hasMany(CartItem::class);
    }

}
