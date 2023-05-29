<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'date_inventaire',
        'observations'
    ];

    public function materielsInventores(){
        return $this->hasMany(MaterielsInventore::class);
    }
}
