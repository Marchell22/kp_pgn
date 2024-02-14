<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denahKedua extends Model
{
    use HasFactory;
    
    protected $table = 'denah_keduas';
    protected $fillable = [
        'name',
        'value',
        'value_id'
    ];
}
