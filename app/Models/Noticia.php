<?php

namespace App\Models;

use Database\Seeders\UsuarioSeeder;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function autor() 
{
    return $this->belongsTo(User::class, 'usuario_id');
}
}