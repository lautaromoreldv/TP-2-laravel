<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'trabajo',
        'user_id',
        'lugar',
        'start_date',
        'finish_date',
        'responsabilidades',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
