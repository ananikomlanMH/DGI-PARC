<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMateriel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['designation'];
}
