<?php

use Illuminate\Support\Facades\Route;

// Rota inicial (pode ser só para teste)
Route::get('/', function () {
    return "<h1>Bem-vindo ao SITE ETEC!</h1>";
});

// Rota que mostra o formulário
Route::get('/form', function () {
    return view('form'); // procura o arquivo resources/views/form.blade.php
});

// Rota que processa os dados do formulário
Route::get('/form/processa', [FormController::class, 'processa'])->name('form.processa');

// Rota fallback (caso o usuário digite uma URL inexistente)
Route::fallback(function () {
    return "Página não encontrada (Erro 404)";
});
