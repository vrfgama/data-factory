<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $table= 'user_adresses';

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


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
