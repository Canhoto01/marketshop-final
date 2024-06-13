<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert(
            [
                [
                    'nome'=> 'Camiseta Vermelha',
                    'descricao'=>'Camiseta para ser usada como camiseta, e a cor dela é vermelha.',
                    'valor' => 129,
                    'foto' => 'https://cdn.awsli.com.br/600x1000/2314/2314676/produto/145122190c7ae700ed9.jpg',
                    'user_id' => 1,
                ],
                [
                    'nome'=> 'Ferrari Itália',
                    'descricao'=>'Ferrari para andar no final de semana e ficar parado no posto enquanto as pessoas passam e ficam olhando.',
                    'valor' => 1500000,
                    'foto' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/0b/8a/90/f2.jpg',
                    'user_id' => 1,
                ],
                [
                    'nome'=> 'Ferrari Itália v2',
                    'descricao'=>'Ferrari para andar no final de semana e ficar parado no posto enquanto as pessoas passam e ficam olhando.',
                    'valor' => 1300000,
                    'foto' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/0b/8a/90/f2.jpg',
                    'user_id' => 1,
                ],
            ]
        );
    }
}
