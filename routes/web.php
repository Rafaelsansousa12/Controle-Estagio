<?php



Route::get('/', 'alunosController@login');
Route::get('/home', 'alunosController@home');
Route::get('/alunos', 'alunosController@index')->name('alunos');
Route::get('/alunos/detalhes/{id}', 'alunosController@details');
Route::get('/alunos/cadastrar', 'alunosController@create')->name('form-cadastrar-aluno');
Route::post('/alunos/cadastrar', 'alunosController@store');
Route::delete('/alunos/{id}', 'alunosController@destroy');
Route::post('/alunos/{id}/editaMatricula', 'SeriesController@editaMatricula');
