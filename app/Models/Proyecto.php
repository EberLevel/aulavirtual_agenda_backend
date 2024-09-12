<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    
    protected $table = 'proyectos';

    protected $fillable = [
        'estado',
        'nombre',
        'domain_id'
    ];

    public function domain()
    {
        return $this->belongsTo(Domains::class, 'domain_id');
    }

    public function tareas()
    {
        return $this->hasMany(ProyectoTarea::class, 'proyecto_id');
    }
}
