<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denahKeenam extends Model
{
    use HasFactory;
    protected $table = 'denah_keenams';
    protected $fillable = [
        'name',
        'value',
        'value_id'
    ];
}
