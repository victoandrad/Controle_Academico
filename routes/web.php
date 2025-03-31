<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin_home');
})->name('home');

Route::get('/notas', function () {
    return view('admin_notas');
})->name('notas');

Route::get('/frequencia', function () {
    return view('admin_frequencia');
})->name('frequencia');

Route::get('/desempenho', function () {
    return view('admin_desempenho');
})->name('desempenho');

Route::prefix('cadastro')->group(function () {
    Route::get('/aluno', function () { return view('cadastro_aluno'); })->name('cadastro.aluno');
    Route::get('/professor', function () { return view('cadastro_professor'); })->name('cadastro.professor');
    Route::get('/turma', function () { return view('cadastro_turma'); })->name('cadastro.turma');
    Route::get('/calendario', function () { return view('cadastro_calendario'); })->name('cadastro.calendario');
});

Route::get('/logout', function () {
    // Lógica para logout
})->name('logout');
//rotas modais
Route::get('/modal', [ModalController::class, 'showModal']);
Route::get('/avaliacoes', [ModalController::class, 'showAvaliacoes']);
