<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_servicios')->insert([
            'servicio' => 'Servicio 1',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('categoria_servicios')->insert([
            'servicio' => 'Servicio 2',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('categoria_servicios')->insert([
            'servicio' => 'Servicio 3',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
