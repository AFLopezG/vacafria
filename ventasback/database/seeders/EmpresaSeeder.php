<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            [
                "nombre"=>'VACA FRIA',
                "nit"=>'408741025',
                "telefono"=>'75637071',
                "direccion"=>'Av. Tacna, Jaen y Tomas Frias',
            ]
        ]);
    }
}
