<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Sapato',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Meia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Tênis',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
