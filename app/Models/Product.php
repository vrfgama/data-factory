<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table= 'products';

    public $timestamps = false;

    protected $fillable= [
        'name',
        'ean',
        'description',
    ];


    public function productBrand()
    {
        return $this->belongsTo(ProductBrand::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function productStore()
    {
        return $this->hasMany(ProductStore::class);
    }
}
