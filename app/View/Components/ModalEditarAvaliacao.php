<?php

namespace App\View\Components;

use Illuminate\View\Component;

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
