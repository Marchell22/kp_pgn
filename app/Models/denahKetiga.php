<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denahKetiga extends Model
{
    use HasFactory;
    protected $table = 'denah_ketigas';
    protected $fillable = [
        'name',
        'value',
        'value_id'
    ];
}
