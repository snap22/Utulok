<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $table = "breed";
    protected $primaryKey = "breed_id";
    public $timestamps = false; 

    protected $fillable = [
        'name',
    ];

    protected $guarded = [
        'breed_id',
    ];
}
