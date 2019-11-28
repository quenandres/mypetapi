<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TiendasSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
