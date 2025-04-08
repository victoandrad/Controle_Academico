<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->withUser(['name' => 'Joao Vitor Tupan Dias', 'email' => 'joao.dias@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Enzo Gardenal Fenato', 'email' => 'enzo.fenato@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Pedro Felipe Vaitkevicius Ferreira', 'email' => 'pedro.ferreira@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Carlos Alexandre Ferreira Granado', 'email' => 'carlos.granado@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Davi Guilherme', 'email' => 'davi.guilherme@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Fernando Ferreira Costa Junior', 'email' => 'fernando.junior@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Pedro Alpino Levandowski', 'email' => 'pedro.levandowski@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Rafael Previatto De Morais', 'email' => 'rafael.morais@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gustavo Da Silva Ramos', 'email' => 'gustavo.ramos@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Felipe Caldeira Akryghti', 'email' => 'felipe.akryghti@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Antonio Marcos Brito De Almeida', 'email' => 'antonio.almeida@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Felipe Marconi Gomes De Araujo', 'email' => 'felipe.araujo@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Renato Teixeira Barreto', 'email' => 'renato.barreto@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Daniel Sampaio Bezerra', 'email' => 'daniel.bezerra@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gabriel Junqueira De Lima Carneiro', 'email' => 'gabriel.carneiro@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gustavo Lamberty Carranza', 'email' => 'gustavo.carranza@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Samir Kaled Ali Chehade', 'email' => 'samir.chehade@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Arthur Vinicius De Oliveira Constantino', 'email' => 'arthur.constantino@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Pedro Augusto Lemos Da Costa', 'email' => 'pedro.costa@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Pedro Henrique Demian', 'email' => 'pedro.demian@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Caio Henrique Domingues', 'email' => 'caio.domingues@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gabriel Henrique Trindade Dona', 'email' => 'gabriel.dona@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Yuri Costa E Silva Eduardo', 'email' => 'yuri.eduardo@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gustavo Farias Ferreira', 'email' => 'gustavo.ferreira@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Murilo Choiti Fussuma', 'email' => 'murilo.fussuma@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Joao Felipe Da Silva Garcia', 'email' => 'joao.garcia@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Vitor Gabriel Dos Santos Goncalves', 'email' => 'vitor.goncalves@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Fernando Barros Greca', 'email' => 'fernando.greca@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Vinicius Tofano Henriques', 'email' => 'vinicius.henriques@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Lia Naomi Hoida', 'email' => 'lia.hoida@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Fernanda Tozzi Honorio', 'email' => 'fernanda.honorio@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gabriel Eiti Yamazaki Kikuchi', 'email' => 'gabriel.kikuchi@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Felipe Martins De Lima', 'email' => 'felipe.lima@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Miguel Lima', 'email' => 'miguel.lima@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Nycolas Rozisca Moreno', 'email' => 'nycolas.moreno@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gustavo Antonio Silva Oliveira', 'email' => 'gustavo.oliveira@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Lucas Jose Gomes Oliveira', 'email' => 'lucas.oliveira@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Marcos Vinicios Florencio De Oliveira', 'email' => 'marcos.oliveira@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Igor Domingues Pereira', 'email' => 'igor.pereira@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Ana Carolina Villas Boas Primo', 'email' => 'ana.primo@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Alexksandro Fernandes De Queiroz', 'email' => 'alexksandro.queiroz@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Leonardo Moreira Arcebispo De Sa', 'email' => 'leonardo.sa@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Nicholas Gabriel Soares Yamasita Sales', 'email' => 'nicholas.sales@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Lucas Tanaka Sato', 'email' => 'lucas.sato@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Caique Marques Serpeloni', 'email' => 'caique.serpeloni@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Joao Gabriel Romanin Seti', 'email' => 'joao.seti@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Joao Victor Alves Da Silva', 'email' => 'joao.silva@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Mariana Gabrielly Soares Silva', 'email' => 'mariana.silva@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Pedro Gabriel Bevilaqua Silva', 'email' => 'pedro.silva@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Rafael Ferreira Da Silva', 'email' => 'rafael.silva@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Guilherme Ramos Soares', 'email' => 'guilherme.soares@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Samuel Luiz Silva Souza', 'email' => 'samuel.souza@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Joao Rafael Lins Menezes Tadeu', 'email' => 'joao.tadeu@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Felipe Andre Tironi', 'email' => 'felipe.tironi@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Gustavo Montanini Victor', 'email' => 'gustavo.victor@email.com', 'password' => '12345678'])->create();
        Student::factory()->withUser(['name' => 'Murilo Bertalha Volante', 'email' => 'murilo.volante@email.com', 'password' => '12345678'])->create();
    }
}
