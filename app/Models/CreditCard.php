<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $table= 'credit_cards';

    public $timestamps = false;

    protected $fillable= [
        'number',
        'cvv',
        'type',
        'expiration_date'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
