<?php

use Illuminate\Database\Seeder;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tienda')->insert([
            'nombre' => 'Tienda patitas',
            'direccion' => 'Carrera 56 #11-12'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Veterinaria cats',
            'direccion' => 'Avenida 16 #23-01'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Veterinaria canes',
            'direccion' => 'Carrera 12 #22-12'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Tienda huellitas',
            'direccion' => 'Carrera 67 #54-08'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Tienda pulgosos',
            'direccion' => 'Carrera 3 #4-12'
        ]);

    }
}
