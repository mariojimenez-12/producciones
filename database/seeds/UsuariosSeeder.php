<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mario Alejandro Jimenez',
            'email' => 'cuentas.alexjimenez@gmail.com',
            'password' => Hash::make('12345678'),
            'imagen' => 'upload-admins/122123056_3508485462547456_5151327220227512095_n.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Roberto Ruiz Perez',
            'email' => 'roberto@example.com',
            'password' => Hash::make('12345678'),
            'imagen' => 'upload-admins/122123056_3508485462547456_5151327220227512095_n.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
