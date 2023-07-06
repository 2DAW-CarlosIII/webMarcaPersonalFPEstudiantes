<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliaProfesional extends Model
{
    use HasFactory;

    protected $table = 'familias_profesionales';

    public const filterFields = [
        'nombre',
    ];

    public function ciclos()
    {
        // return $this->hasMany(Related::class, 'foreign_key', 'local_key');
        return $this->hasMany(Ciclo::class, 'familia_id', 'id');
    }
}
