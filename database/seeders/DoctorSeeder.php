<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    protected $fillable = ['nombre','apellido','telefono','grado_academico'];

        $doctor = new Doctor();
        $doctor->nombre = 'Jaime';
        $doctor->apellido = 'Velazco';
        $doctor->telefono = 147;
        $doctor->grado_academico = 'Licenciatura';
        $doctor->save();

        $doctor1 = new Doctor();
        $doctor1->nombre = 'Daniel ';
        $doctor1->apellido = 'Nosilia';
        $doctor1->telefono = 852;
        $doctor1->grado_academico = 'Masterado';
        $doctor1->save();

        $doctor2 = new Doctor();
        $doctor2->nombre = 'Julieta';
        $doctor2->apellido= 'Torrez';
        $doctor2->telefono =963;
        $doctor2->grado_academico = 'Postgrado';
        $doctor2->save();
    }
}
