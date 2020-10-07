<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state',
        'character',
        'turn',
        'hours',
        'date',
        'observation'
    ];

    // Relación: una publicación tiene un establecimiento.

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }


    // Relación muchas publicaciones a muchos usuarios.

    public function publicationsUsers(){
        return $this->belongsToMany(User::class);
    }
}
