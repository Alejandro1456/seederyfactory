<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\Enfermera;

class Especialidad extends Model
{
    use HasFactory;
    protected $table ="especialidads";

    protected $primarykey = "id";
    protected $fillable = ['nombre','grado','doctor_id'];
    protected $hidden = ['id'];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function enfermera(){
        return $this->belongToMany(Enfermera::class);
    }
}
