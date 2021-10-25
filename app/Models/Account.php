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
}


/*
account_id SERIAL PRIMARY KEY,
	email VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(60) NOT NULL ,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(100) NOT NULL,
	phone_number VARCHAR(20),
	date_created DATE NOT NULL DEFAULT CURRENT_DATE,
	account_role CHAR(1) NOT NULL DEFAULT 'U' CHECK (account_role IN ('A', 'U')) 
*/