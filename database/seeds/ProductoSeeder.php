<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'nombre' => 'Vetactin',
            'categoria_id' => 1,
            'tienda_id' => 1,
            'imagen' => 'vetactin.jpg',
            'stock' => 100,
            'precio' => 13000,
            'descripcion' => 'Estimulante de apetito'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'Viusid',
            'categoria_id' => 1,
            'tienda_id' => 1,
            'imagen' => 'viusid.jpg',
            'stock' => 20,
            'precio' => 15000,
            'descripcion' => 'Complemento alimenticio'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'Babemic',
            'categoria_id' => 1,
            'tienda_id' => 1,
            'imagen' => 'babemic.jpg',
            'stock' => 100,
            'precio' => 18500,
            'descripcion' => 'Quimioterápico para el tratamiento de las piroplasmosis, babesiosis y tripanosomas'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'Colivet',
            'categoria_id' => 3,
            'tienda_id' => 1,
            'imagen' => 'colivet.png',
            'stock' => 10,
            'precio' => 19000,
            'descripcion' => 'Analgésico y antipirético'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'Veproflox',
            'categoria_id' => 1,
            'tienda_id' => 2,
            'imagen' => 'veproflox.jpg',
            'stock' => 100,
            'precio' => 21000,
            'descripcion' => 'tratamiento de infecciones'
        ]);



        DB::table('producto')->insert([
            'nombre' => 'Correas perros',
            'categoria_id' => 4,
            'tienda_id' => 1,
            'imagen' => 'correas.jpg',
            'stock' => 20,
            'precio' => 17000,
            'descripcion' => 'Correas para perros pequeños'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'kit de limpieza para mascotas',
            'categoria_id' => 2,
            'tienda_id' => 1,
            'imagen' => 'kitlimpieza.jpg',
            'stock' => 10,
            'precio' => 27000,
            'descripcion' => 'Kit de limpieza para mascotas'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'Sulphur',
            'categoria_id' => 1,
            'tienda_id' => 1,
            'imagen' => 'sulphur.jpg',
            'stock' => 12,
            'precio' => 21000,
            'descripcion' => 'Producto de limpieza'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'Caja de transporte',
            'categoria_id' => 3,
            'tienda_id' => 1,
            'imagen' => 'caja.jpg',
            'stock' => 3,
            'precio' => 58000,
            'descripcion' => 'Caja de transporte'
        ]);

        DB::table('producto')->insert([
            'nombre' => 'Baño seco',
            'categoria_id' => 2,
            'tienda_id' => 1,
            'imagen' => 'banoseco.jpg',
            'stock' => 100,
            'precio' => 13000,
            'descripcion' => 'Baño seco desodorizante'
        ]);
    }
}
