<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;
    protected $table = "adoption";
    protected $primaryKey = "adoption_id";
    public $timestamps = false;   
     

    protected $fillable = [
        'dog_id',
        'account_id',
    ];

    protected $guarded = [
        'adoption_id',
        'date_adopted',
    ];

    protected $dates= ['date_adopted'];
}
