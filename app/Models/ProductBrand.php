<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    use HasFactory;

    protected $table= 'product_brands';

    public $timestamps = false;

    protected $fillable= [
        'name',
        'description'
    ];


    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
