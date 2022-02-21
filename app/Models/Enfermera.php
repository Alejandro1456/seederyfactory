<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidad;

class Enfermera extends Model
{
    use HasFactory;
    protected $table ="enfermeras";

    protected $primarykey = "id";
    protected $fillable = ['nombre','apellido','telefono','edad','universidad'];
    protected $hidden = ['id'];

    public function especialidad(){
        return $this->belongToMany(Especialidad::class);
    }
}
