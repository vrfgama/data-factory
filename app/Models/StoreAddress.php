<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreAddress extends Model
{
    use HasFactory;

    protected $table= 'store_adresses';

    public $timestamps = false;

    protected $fillable= [
        'street',
        'number',
        'cep',
        'district',
        'city',
        'state',
        'country'
    ];


    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
