<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Account extends Authenticatable
{
    use HasFactory;

    protected $table = "account";
    protected $primaryKey = "account_id";
    // vypnutie automatickeho zadavania hodnot created_at & updated_at do tabulky
    public $timestamps = false;     

    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'phone_number',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guarded = [
        'account_id',
        'date_created',
        'account_role',
    ];

    // Mutator
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    // public function isAdmin()
    // {
    //     return $this->attributes['account_role'] === 'A';
    // }
}
