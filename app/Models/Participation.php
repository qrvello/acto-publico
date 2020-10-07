<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    // Relación: una participación pertenece a una publicación
    public function publication() {
        $this->belongsTo(Publication::class);
    }
    // Relación: una participación tiene muchos usuarios
    public function users() {
        $this->hasMany(User::class);
    }
}
