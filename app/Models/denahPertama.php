<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denahPertama extends Model
{
    use HasFactory;

    protected $table = 'denah_pertamas';
    protected $fillable = [
        'name',
        'value',
        'value_id'
    ];
    
}
