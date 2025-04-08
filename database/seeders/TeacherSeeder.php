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
        Teacher::factory()->withUser(['name' => 'Adalberto Pereira Neris', 'email' => 'adalberto.neris@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Alisson Henrique dos Santos', 'email' => 'alisson.santos@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Anderson Yashiaki Iwazaki da Silva', 'email' => 'anderson.silva@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Bruna Thais Silva Sozzo', 'email' => 'bruna.sozzo@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Bruno Henrique Coleto', 'email' => 'bruno.coleto@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Daniella Carolina Camargo Torelli', 'email' => 'daniella.torelli@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Edson Shinki Kaneshima', 'email' => 'edson.kaneshima@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Eron Ponce Pereira', 'email' => 'eron.pereira@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Felipe Nathan dos Anjos', 'email' => 'felipe.anjos@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Fernando Murilo Lourenço Roque', 'email' => 'fernando.roque@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Guilherme Cardoso Agostinetti', 'email' => 'guilherme.agostinetti@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Gustavo Queiroz Silveira', 'email' => 'gustavo.silveira@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Igor da Silva Elias', 'email' => 'igor.elias@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'João Vitor da Costa Andrade', 'email' => 'joão.andrade@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Luis Carlos de Albuquerque Silva', 'email' => 'luis.silva@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Luis Fernando Pereira Nunes', 'email' => 'luis.nunes@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Maicon Roger do Rosario', 'email' => 'maicon.rosario@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Marcelo Yukio Yamamoto', 'email' => 'marcelo.yamamoto@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Mario Henrique Akihiko da Costa Adaniya', 'email' => 'mario.adaniya@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Ricardo Petri Silva', 'email' => 'ricardo.silva@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Robson de Lacerda Zambroti', 'email' => 'robson.zambroti@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Sergio Akio Tanaka', 'email' => 'sergio.tanaka@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Simone Sawasaki Tanaka', 'email' => 'simone.tanaka@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Suzana Rezende Lemanski', 'email' => 'suzana.lemanski@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Tania Camila Kochmanscky Goulart', 'email' => 'tania.goulart@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Tiago Ravache', 'email' => 'tiago.ravache@email.com', 'password' => '12345678'])->create();
        Teacher::factory()->withUser(['name' => 'Wilson Sanches', 'email' => 'wilson.sanches@email.com', 'password' => '12345678'])->create();
    }
}
