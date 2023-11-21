<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table= 'stores';

    public $timestamps = false;

    protected $fillable= [
        'name',
        'description'
    ];


    public function storeBrand()
    {
        return $this->belongsTo(StoreBrand::class);
    }


    public function storeAddress()
    {
        return $this->hasOne(StoreAddress::class);
    }


    public function productStore()
    {
        return $this->hasMany(ProductStore::class);
    }
}
