<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        // DB::table('bukutamu')->insert([
        //     'name' => 'Mila',
        //     'notelepon' => '0123',
        //     'alamat' => 'alamat1',
        //     'email' => 'mantan@gmail.com',
            
        // ]);
        \App\Models\BukuTamu::factory(10)->create();
    }
}
