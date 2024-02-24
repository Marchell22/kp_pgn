<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denahKelima extends Model
{
    use HasFactory;
    protected $table = 'denah_kelimas';
    protected $fillable = [
        'name',
        'value',
        'value_id'
    ];
}
