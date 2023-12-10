<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;
    protected $table = 'bukutamu';

    protected $fillable = [
        'id',
        'name',
        'notelepon',
        'alamat',
        'email'
    ];
}
