<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
   // Exemplo no controlador
public function showModal()
{
    // Simulando dados de alunos (substituir por banco de dados)
    $alunos = [
        (object) ['id' => 1, 'nome' => 'Aluno 1'],
        (object) ['id' => 2, 'nome' => 'Aluno 2'],
    ];

    return view('sua-view', compact('alunos'));
}

public function showAvaliacoes()
{
    // Dados fictícios para avaliação
// Dados fictícios para as avaliações
    $avaliacoes = [
        (object) ['bim' => '1', 'tipo_avaliacao' => 'Trabalho', 'valor' => 10, 'data' => '2025-03-29'],
        (object) ['bim' => '2', 'tipo_avaliacao' => 'Prova', 'valor' => 20, 'data' => '2025-04-01'],
        (object) ['bim' => '3', 'tipo_avaliacao' => 'Participação', 'valor' => 5, 'data' => '2025-04-05'],
    ];

    return view('admin_notas', compact('avaliacoes')); // Passando a variável para a view
}
public function index()
{
    $avaliacao = Avaliacao::find(1); // ou o que for necessário
    return view('admin_notas', compact('avaliacao'));
}

}
