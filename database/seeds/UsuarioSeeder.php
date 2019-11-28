<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Lizz',
            'apellido' => 'Linares',
            'email' => 'lizz.linares95@gmail.com',
            'password' => '123456789',
            'cc' => '12345',
            'tipo' => 'admin'
        ]);
    }
}
