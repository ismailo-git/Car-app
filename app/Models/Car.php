<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Car extends Model
{
    use HasFactory;
    use Sluggable;


    public function user() 
    {

        return $this->belongsTo(User::class);
    
    }

    protected $fillable = ['user_id','title', 'slug', 'marque', 'modele', 'carburant', 'boite', 'kilometrage', 'price', 'year', 'description', 'image_path'];


    public function sluggable(): array {

        return [
        
            'slug' => [

                'source' => 'title'
            ]
        ];
    }


  
}
