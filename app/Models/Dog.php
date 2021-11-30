<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use function PHPUnit\Framework\isNull;

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
        if (Breed::where('breed_id', '=' ,$this->breed_id)->exists())
        {
            return Breed::find($this->breed_id)->name;
        }
        else
        {
            return "Žiadne";
        }
        
    }

    public function getIsAdoptedAttribute()
    {
        return Adoption::where('dog_id', '=', $this->dog_id)->exists();
    }


}
