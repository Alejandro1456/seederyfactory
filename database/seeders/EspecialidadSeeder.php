<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Especialidad;


class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    protected $fillable = ['nombre','grado','doctor_id'];

        $especialidad = new Especialidad();
        $especialidad->nombre = 'Dentista';
        $especialidad->grado = 'Medio';
        $especialidad->doctor_id = 1;
        $especialidad->save();

        $especialidad1 = new Especialidad();
        $especialidad1->nombre = 'Fisioterapia';
        $especialidad1->grado = 'Intermedio';
        $especialidad1->doctor_id = 2;
        $especialidad1->save();

        $especialidad2 = new Especialidad();
        $especialidad2->nombre = 'Cirugia';
        $especialidad2->grado = 'Avanzado';
        $especialidad2->doctor_id = 3;
        $especialidad2->save();

        $especialidad->enfermera()->attach(1);
        $especialidad->enfermera()->attach(2);

        $especialidad1->enfermera()->attach(1);
        $especialidad1->enfermera()->attach(3);

        $especialidad2->enfermera()->attach(1);
        $especialidad2->enfermera()->attach(2);
    }
}
