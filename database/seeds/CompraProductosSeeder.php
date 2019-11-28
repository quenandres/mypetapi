<?php

use Illuminate\Database\Seeder;

class CompraProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compra_producto')->insert([
            'compra_id' => 0,
            'producto_id' => 1,
            'cantidad' => 2,
            'valor' => 26000
        ]);
    }
}
