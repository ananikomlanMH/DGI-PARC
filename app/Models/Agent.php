<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'services_id',
    ];


    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }
}
