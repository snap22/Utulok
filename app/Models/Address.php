<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = "address";
    protected $primaryKey = "address_id";

    public $timestamps = false;   

    protected $fillable = [
        'street',
        'house_number',
        'city',
        'zip_code',
        'additional_info',
        'account_id',
    ];

    protected $guarded = [
        'address_id',
    ];

}

