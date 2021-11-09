<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $table = "dog";
    protected $primaryKey = "dog_id";

    public $timestamps = false;   

    protected $fillable = [
        'name',
        'gender',
        'age',
        'picture',
        'info',
        'breed_id'
    ];

    protected $guarded = [
        'dog_id',
        
    ];

    public function getBreedAttribute()
    {
        return Breed::find($this->breed_id)->name;
    }

    public function setPictureAttribute()
    {
        if (empty($this->attributes['picture']))
        {
            $this->attributes['picture'] = 'dog_default.png';
        }
    }

}

/*
dog_id SERIAL PRIMARY KEY,
	name VARCHAR(50) NOT NULL,
	gender CHAR(1) NOT NULL CHECK(gender IN ('F', 'M')),
	age INTEGER CHECK(age >= 0),
	breed_id INTEGER,
	picture VARCHAR(30) NOT NULL DEFAULT 'dog_default.png',
	info VARCHAR(100),
*/