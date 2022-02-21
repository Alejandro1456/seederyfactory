<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspecialidaEnfermera extends Model
{
    use HasFactory;
    protected $table ="especialida_enfermeras";
    protected $primarykey = "id";
    protected $fillable = ['especialidad_id','enfermera_id'];
    protected $hidden = ['id'];
 
}
