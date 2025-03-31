<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalRegistrarNota extends Component
{
    public $id;
    public $title;
    public $description;
    public $buttonText;
    public $action;
    public $alunos;

    public function __construct($id, $title, $description = '', $buttonText = 'Enviar', $action = '#', $alunos)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->buttonText = $buttonText;
        $this->action = $action;
        $this->alunos = $alunos;
    }

    public function render()
    {
        return view('components.modal-registrar-nota');
    }
}

class ModalEditarAvaliacao extends Component
{
    public $avaliacao;

    public function __construct($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    public function render()
    {
        return view('components.modal-editar-avaliacao');
    }
}