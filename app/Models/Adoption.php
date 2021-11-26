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
    ];

    protected $guarded = [
        'adoption_id',
        'date_adopted',
    ];
}

// CREATE TABLE adoption (
// 	adoption_id SERIAL PRIMARY KEY,
// 	account_id INTEGER NOT NULL,
// 	dog_id INTEGER NOT NULL UNIQUE, 
// 	date_adopted DATE NOT NULL DEFAULT CURRENT_DATE,
// 	CONSTRAINT adoption_account_fkey
// 		FOREIGN KEY (account_id)
// 			REFERENCES account(account_id),
// 	CONSTRAINT adoption_dog_fkey
// 		FOREIGN KEY (dog_id)
// 			REFERENCES dog(dog_id)
// );