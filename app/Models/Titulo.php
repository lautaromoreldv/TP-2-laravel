<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'user_id',
        'descripcion',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
