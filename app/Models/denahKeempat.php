<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denahKeempat extends Model
{
    use HasFactory;
    protected $table = 'denah_keempats';
    protected $fillable = [
        'name',
        'value',
        'value_id'
    ];
}
