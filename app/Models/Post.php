<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // Casting para el campo published_at
    protected function casts(): array {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    //
    use HasFactory;

    //protected $table = 'posts';
    protected function title():Attribute {
        return Attribute::make(
            // Mutador
            set: function($value){
                return strtolower($value);
            },
            // Accesor
            get: function($value){
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
