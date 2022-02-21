<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\specialidad;

class Doctor extends Model
{
    use HasFactory;

    protected $table ="doctors";

    protected $primarykey = "id";
    protected $fillable = ['nombre','apellido','telefono','grado_academico'];
    protected $hidden = ['id'];

    public function especialidad(){
        return $this->hasMany(Especialidad::class);
    }
}
