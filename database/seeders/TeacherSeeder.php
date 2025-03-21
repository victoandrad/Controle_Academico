<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::factory(1)->create([
            'name' => 'Adalberto Pereira Neris'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Alisson Henrique dos Santos'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Anderson Yashiaki Iwazaki da Silva'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Bruna Thais Silva Sozzo'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Bruno Henrique Coleto'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Daniella Carolina Camargo Torelli'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Edson Shinki Kaneshima'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Eron Ponce Pereira'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Felipe Nathan dos Anjos'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Fernando Murilo Lourenço Roque'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Guilherme Cardoso Agostinetti'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Gustavo Queiroz Silveira'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Igor da Silva Elias'
        ]);

        Teacher::factory(1)->create([
            'name' => 'João Vitor da Costa Andrade'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Luis Carlos de Albuquerque Silva'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Luis Fernando Pereira Nunes'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Maicon Roger do Rosario'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Marcelo Yukio Yamamoto'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Mario Henrique Akihiko da Costa Adaniya'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Ricardo Petri Silva'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Robson de Lacerda Zambroti'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Sergio Akio Tanaka'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Simone Sawasaki Tanaka'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Suzana Rezende Lemanski'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Tania Camila Kochmanscky Goulart'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Tiago Ravache'
        ]);

        Teacher::factory(1)->create([
            'name' => 'Wilson Sanches'
        ]);
    }
}
