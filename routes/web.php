<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ->middleware('auth')

//login
Route::get('/', function () {
    return view('auth.login');
});

//calender
Route::get('/calendario', function(){
    return view('nav.calender');
})->middleware('auth');

Auth::routes();

//home
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//Account
Route::get('/minha-conta', 'HomeController@show')->name('my_account')->middleware('auth');
Route::put('/minha-conta-update/{id}', 'HomeController@update')->name('update_account');
Route::put('/minha-conta-update-photo/{id}', 'HomeController@uploadImgPerfil')->name('updatePhoto');


//setting
// Route::get('/configuracao', function(){
//     return view('setting');
// })->middleware('auth');

Route::get('/configuracao', 'HomeController@showSetting')->name('setting')->middleware('auth');
Route::put('/configuracao-update-salario/{id}', 'HomeController@update')->name('update_account');
Route::post('/enviandoEmail', 'HomeController@sendEmail')->name('sendEmail');

//cost
Route::get('/gastos', 'CostController@index')->name('cost')->middleware('auth');
Route::get('/gasto-editar/{id}', 'CostController@show')->name('costEdit')->middleware('auth');
Route::get('/gastos-adicionar', function(){ 
    return view('cost.add');
})->middleware('auth');
Route::post('/gastosAdicionando', 'CostController@store')->name('costAdd');
Route::put('/gastoEditadando/{id}', 'CostController@update')->name('costEditing');
Route::delete('/gastosExcluir/{id}', 'CostController@delete')->name('costDelete');

//cost fixed
Route::get('/gastos-fixo', 'CostFixedController@index')->name('costFixed')->middleware('auth');
Route::get('/gastos-fixo-detalhes/{id}', 'CostFixedController@show')->name('costFixedEdit')->middleware('auth');
Route::get('/gastos-fixo-adicionar', function(){ 
    return view('fixed_cost.add');
})->middleware('auth');
Route::post('/gastosFixoAdicionando', 'CostFixedController@store')->name('costFixedAdd');
Route::put('/gastoFixoEditadando/{id}', 'CostFixedController@update')->name('costFixedEditing');
Route::delete('/gastosFixoExcluir/{id}', 'CostFixedController@delete')->name('costFixedDelete');

//annotations
Route::get('/anotacoes', 'AnnotationsController@index')->name('annotations')->middleware('auth');
Route::get('/anotacoes-detalhes/{id}', 'AnnotationsController@show')->name('annotationsView')->middleware('auth');
Route::get('/anotacoes-detalhe-editar/{id}', 'AnnotationsController@edit')->name('annotationsEdit')->middleware('auth');
Route::get('/anotacoes-adicionar', function(){ 
    return view('annotations.add');
})->middleware('auth');
Route::post('/anotacoesAdicionando', 'AnnotationsController@store')->name('annotationsAdd');
Route::put('/anotacoesEditando/{id}', 'AnnotationsController@update')->name('annotationsEditing');
Route::delete('/anotacoesExcluir/{id}', 'AnnotationsController@delete')->name('annotationsDelete');

//reports
Route::get('/relatorios', 'ReportsController@index')->name('reports')->middleware('auth');
Route::get('/relatorio-detalhe/{id}', 'ReportsController@show')->name('reportsView')->middleware('auth');
Route::get('/relatorio-adicionar', function(){ 
    return view('reports.add');
})->middleware('auth');

//yield
Route::get('/rendimento', 'YieldVariedController@index')->name('yield')->middleware('auth');
Route::get('/rendimento-detalhe/{id}', 'YieldVariedController@show')->name('yieldView')->middleware('auth');
Route::get('/rendimento-adicionar', function(){ 
    return view('yield.add');
})->middleware('auth');
Route::post('/rendimentoAdicionando', 'YieldVariedController@store')->name('yieldAdd');
Route::put('/rendimentosEditando/{id}', 'YieldVariedController@update')->name('yieldEditing');
Route::delete('/rendimentoExcluir/{id}', 'YieldVariedController@delete')->name('yieldDelete');