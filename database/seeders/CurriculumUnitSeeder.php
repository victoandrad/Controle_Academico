<?php

namespace Database\Seeders;

use App\Models\CurriculumUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurriculumUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CurriculumUnit::factory(1)->create([
            'code' => 'ALLP221006',
            'name' => 'Algoritmos e Estrutura de Dados: Introdução a estrutura de dados',
            'hours' => 30
        ]);

        CurriculumUnit::factory(1)->create([
            'code' => 'PRIN220001',
            'name' => 'Projeto Interdisciplinar III: PI V',
            'hours' => 15
        ]);

        CurriculumUnit::factory(1)->create([
            'code' => 'MATE230020',
            'name' => 'Elementos de Cálculo e Álgebra Linear: Transformações lineares, autovalor e autovetor',
            'hours' => 15
        ]);

        CurriculumUnit::factory(1)->create([
            'code' => 'BDAD230003',
            'name' => 'Introdução a Banco de Dados: SQL Básico',
            'hours' => 30
        ]);
    }
}
