<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'commentaire',
        'materiels_id',
    ];

    public function materiel()
    {
        return $this->belongsTo(Materiel::class, 'materiels_id', 'id');
    }
}
