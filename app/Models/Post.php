<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*// Propieda que habilita la asignacion masiva y en esta propieda se define que campos se permiten
    protected $fillable = [
        'title',
        'slug',
        'category',
        'content'
    ];*/

    // Propieda que habilita la asignacion masiva y en esta propieda se define que campos no se permiten
    protected $guarded = [
        'is_active',
    ];


    // Casting para el campo published_at
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    //
    use HasFactory;

    //protected $table = 'posts';
    protected function title(): Attribute
    {
        return Attribute::make(
            // Mutador
            set: function ($value) {
                return strtolower($value);
            },
            // Accesor
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
