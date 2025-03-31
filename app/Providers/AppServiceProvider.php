<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\ModalEditarAvaliacao;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::component('modal-editar-avaliacao', ModalEditarAvaliacao::class);
    }

    public function register()
    {
        //
    }
}


