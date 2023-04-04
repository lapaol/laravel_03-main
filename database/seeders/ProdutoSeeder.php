<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'categoria_id' => 1,
            'nome' => 'Detergente',
            'quantidade' => 10,
            'valor' => 10.75
        ]);

        DB::table('produtos')->insert([
            'categoria_id' => 1,
            'nome' => 'Água Sanitaria',
            'quantidade' => 20,
            'valor' => 20.75
        ]);

        DB::table('produtos')->insert([
            'categoria_id' => 1,
            'nome' => 'Sabão em barra',
            'quantidade' => 2,
            'valor' => 2.65
        ]);

        DB::table('produtos')->insert([
            'categoria_id' => 2,
            'nome' => 'Cadeira',
            'quantidade' => 2,
            'valor' => 60.95
        ]);
    }
}
