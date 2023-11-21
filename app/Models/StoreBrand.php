<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreBrand extends Model
{
    use HasFactory;

    protected $table= 'store_brands';

    public $timestamps = false;

    protected $fillable= [
        'name',
        'description'
    ];


    public function store()
    {
        return $this->hasMany(Store::class);
    }
}
