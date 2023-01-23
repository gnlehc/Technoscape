<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accs extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Email',
        'password',
        'Pass',
    ];
}
