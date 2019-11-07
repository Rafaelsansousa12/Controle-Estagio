<?php



Route::get('/', 'alunosController@login');
Route::get('/home', 'alunosController@home');
Route::get('/alunos', 'alunosController@index')->name('alunos');
Route::get('/alunos/detalhes/{id}', 'alunosController@details');
Route::get('/alunos/cadastrar', 'alunosController@create')->name('form-cadastrar-aluno');
Route::post('/alunos/cadastrar', 'alunosController@store');
Route::delete('/alunos/{id}', 'alunosController@destroy');

Route::post('/alunos/{id}/editaMatricula', 'alunosController@editaMatricula');
Route::post('/alunos/{id}/editaNome', 'alunosController@editaNome');
Route::post('/alunos/{id}/editaCpf', 'alunosController@editaCpf');
Route::post('/alunos/{id}/editaEndereco', 'alunosController@editaEndereco');
Route::post('/alunos/{id}/editaTelefone', 'alunosController@editaTelefone');
Route::post('/alunos/{id}/editaCurso', 'alunosController@editaCurso');
Route::post('/alunos/{id}/editaCiclo', 'alunosController@editaCiclo');