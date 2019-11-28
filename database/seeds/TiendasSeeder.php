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
            'direccion' => 'Carrera 56 #11-12',
            'imagen' => 'tienda_patitas.png'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Veterinaria cats',
            'direccion' => 'Avenida 16 #23-01',
            'imagen' => 'Veterinaria_cats.jpeg'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Hospital animal',
            'direccion' => 'Carrera 12 #22-12',
            'imagen' => 'hospital_animal.jpeg'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Clinica veterinaria',
            'direccion' => 'Carrera 67 #54-08',
            'imagen' => 'clinica_veterinaria.jpeg'
        ]);

        DB::table('tienda')->insert([
            'nombre' => 'Mevet',
            'direccion' => 'Carrera 3 #4-12',
            'imagen' => 'mevet.jpeg'
        ]);

    }
}
