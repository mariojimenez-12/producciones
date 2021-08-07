<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GruposSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(UsuariosSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
