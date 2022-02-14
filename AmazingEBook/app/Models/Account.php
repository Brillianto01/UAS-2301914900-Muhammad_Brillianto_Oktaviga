<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Account as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "account";
    protected $primaryKey = 'account_id';

    protected $fillable = [
        'role_id',
        'gender_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'display_picture_link'
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'gender_id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class, 'order_id', 'order_id');
    }
}
