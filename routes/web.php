<?php



//Route::get('/', 'alunosController@login');
Route::get('/', 'alunosController@home');
Route::get('/cursos', 'cursosController@index');
Route::get('/coordenadores', 'coordenadoresController@index');
Route::get('/alunos', 'alunosController@index')->name('alunos');
Route::get('/alunos/detalhes/{id}', 'alunosController@details');

Route::get('/alunos/cadastrar', 'alunosController@create')->name('form-cadastrar-aluno');
Route::get('/cursos/cadastrar', 'cursosController@create')->name('form-cadastrar-curso');
Route::get('/coordenadores/cadastrar', 'coordenadoresController@create')->name('form-cadastrar-coordenador');
Route::get('/cursos/{id}/coordenadores', 'coordenadoresController@indexcoordenador2');

Route::post('/alunos/cadastrar', 'alunosController@store');
Route::post('/cursos/cadastrar', 'cursosController@store');
Route::post('/coordenadores/cadastrar', 'coordenadoresController@store');
Route::delete('/alunos/{id}', 'alunosController@destroy');
Route::delete('/cursos/{cod_curso}', 'cursosController@destroy');
Route::get('/cursos/{id}/alunos', 'alunosController@index2');

Route::get('/disciplinas', 'disciplinasController@index');
Route::get('/disciplinas/cadastrar', 'disciplinasController@create')->name('form-cadastrar-disciplina');
Route::post('/disciplinas/cadastrar', 'disciplinasController@store');
Route::get('/cursos/{id}/disciplinas', 'disciplinasController@indexdisciplina2');
Route::get('/cursos/{id}/cursos', 'cursosController@indexcurso2');

Route::post('/alunos/{id}/editaMatricula', 'alunosController@editaMatricula');
Route::post('/alunos/{id}/editaNome', 'alunosController@editaNome');
Route::post('/alunos/{id}/editaCpf', 'alunosController@editaCpf');
Route::post('/alunos/{id}/editaEndereco', 'alunosController@editaEndereco');
Route::post('/alunos/{id}/editaTelefone', 'alunosController@editaTelefone');
Route::post('/alunos/{id}/editaCurso', 'alunosController@editaCurso');
Route::post('/alunos/{id}/editaCiclo', 'alunosController@editaCiclo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
