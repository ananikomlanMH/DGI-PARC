<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'designation',
        'etat',
        'date_acquisition',
        'num_serie',
        'type_materiel_id',
        'services_id',
    ];


    public function typeMateriel()
    {
        return $this->belongsTo(TypeMateriel::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }
}
