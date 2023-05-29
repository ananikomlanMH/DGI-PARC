<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterielsInventore extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'qte',
        'materiels_id',
        'etat_materiel_id',
        'inventaire_id',
    ];


    public function materiel(){
        return $this->belongsTo(Materiel::class, 'materiels_id', 'id');
    }
    public function etat(){
        return $this->belongsTo(EtatMateriel::class, 'etat_materiel_id', 'id');
    }

}
