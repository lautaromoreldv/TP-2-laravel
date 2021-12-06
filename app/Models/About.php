<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'about',
        'user_id',
        'titulo',
        'about',
        'boton',
        'image_about',
        'whatido',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetImageAttribute($key)
    {
        if($this->image_about){
            return url("storage/$this->image_about");
        }
    }
}
