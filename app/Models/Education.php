<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_name',
        'user_id',
        'degree',
        'start_date',
        'finish_date',
        'description',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
