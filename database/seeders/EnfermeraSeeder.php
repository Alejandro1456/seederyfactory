<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enfermera;
class EnfermeraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    protected $fillable = ['nombre','apellido','telefono','edad','universidad'];

        $enfermera = new Enfermera();
        $enfermera->nombre = 'Daniel ';
        $enfermera->apellido = 'Miranda';
        $enfermera->telefono = '789';
        $enfermera->edad = 18;
        $enfermera->universidad = 'UMSA';
        $enfermera->save();

        $enfermera1 = new Enfermera();
        $enfermera1->nombre = 'Maria';
        $enfermera1->apellido = 'Rene';
        $enfermera1->telefono = '456';
        $enfermera1->edad = 21;
        $enfermera1->universidad  = 'UDABOL';
        $enfermera1->save();

        $enfermera2 = new Enfermera();
        $enfermera2->nombre = 'Brain';
        $enfermera2->apellido = 'Cardenas';
        $enfermera2->telefono = '123';
        $enfermera2->edad = 23;
        $enfermera2->universidad  = 'UNIFRANZ';
        $enfermera2->save();
    }
}
