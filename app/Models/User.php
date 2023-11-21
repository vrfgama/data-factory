<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserAddress;
use App\Models\CreditCard;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table= 'users';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birth',
        'gender',
        'fone',
        'rg',
        'cpf'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function userAddress()
    {
        return $this->hasMany(UserAddress::class);
    }


    public function creditCard()
    {
        return $this->hasMany(CreditCard::class);
    }


    public function cartItem()
    {
        return $this->hasMany(CartItem::class);
    }
}
