<?php

namespace App\Models;

use App\Models\Address;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


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
        'account_role',
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
        $this->attributes['password'] = Hash::make($password);
    }

    public function getIsAdminAttribute()
    {
        return $this->account_role === 'A';
    }

    public function getHasAddressAttribute()
    {
        return Address::where('account_id', '=', $this->account_id)->exists();
    }
}
