<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante_libro extends Model
{
    use HasFactory;
    protected $fillable = ['estudiante_id','libro_id'];
}
