<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class occupation extends Model
{
    use HasFactory;
    protected $fillable = [
        'occupationName',
    ];
    
    public function users(){
        return $this->hasMany(User::class);
    } 
}