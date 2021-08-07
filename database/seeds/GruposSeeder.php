<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_grupos')->insert([
            'grupo' => 'Los consentidos del sierreño',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('categoria_grupos')->insert([
            'grupo' => 'Ismael y los elegidos',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
