<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuemSomosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//####################
//****QUEM SOMOS****##
//####################

// Rota para exibir a página de índice dos dados 'Quem Somos' no painel do usuário
Route::get('/dashboard_page/quemsomos', [QuemSomosController::class, 'index'])
    ->name('quemsomos.index')
    ->middleware('auth');

// Rota para exibir o formulário de inserção de novos dados 'Quem Somos' no painel do usuário
Route::get('/dashboard_page/quemsomos_insert', [QuemSomosController::class, 'new_insert'])
    ->name('quemsomos_insert')
    ->middleware('auth');

// Rota para armazenar os dados enviados através do formulário de inserção 'Quem Somos'
Route::post('/dashboard_page/quemsomos_insert/store', [QuemSomosController::class, 'store'])
    ->name('quemsomos.store')
    ->middleware('auth');

// Rota para selecionar e exibir um registro específico 'Quem Somos' para atualização no painel do usuário
Route::get('/dashboard_page/quemsomos/{id}', [QuemSomosController::class, 'update_selc'])
    ->name('quemsomos.update_selc')
    ->middleware('auth');


// Rota para exibir o formulário de atualização de um registro específico 'Quem Somos' no painel do usuário
Route::get('/dashboard_page/quemsomos_update/{id}', [QuemSomosController::class, 'update'])
    ->name('quemsomos.update')
    ->middleware('auth');

// Rota altera um registro específico 'Quem Somos' no painel do usuário
Route::post('/dashboard_page/show', [QuemSomosController::class, 'show'])
    ->name('quemsomos.show')
    ->middleware('auth');

//Deletar a rota
Route::post('/dashboard_page/destroy', [QuemSomosController::class, 'destroy'])
    ->name('quemsomos.destroy')
    ->middleware('auth');




// Rota para exibir a página pública 'Quem Somos' para os visitantes do site
Route::get('/quemsomos', [QuemSomosController::class, 'page_quemsomos'])
    ->name('page.quemsomos');




//####################
//****EMPRESA****##
//####################

// Rota para exibir a página de índice dos dados 'Empresas' no painel do usuário
Route::get('/dashboard_page/empresas', [EmpresaController::class, 'index'])
    ->name('empresas.index')
    ->middleware('auth');


// Rota para exibir o formulário de inserção de novos dados 'Empresas' no painel do usuário
Route::get('/dashboard_page/empresas_insert', [EmpresaController::class, 'new_insert'])
    ->name('empresas_insert')
    ->middleware('auth');


Route::post('/dashboard_page/empresas_insertt/store', [EmpresaController::class, 'store'])
    ->name('empresas.store')
    ->middleware('auth');


// Rota para selecionar e exibir um registro específico 'Empresas' para atualização no painel do usuário
Route::get('/dashboard_page/empresas/{id}', [EmpresaController::class, 'update_selc'])
    ->name('empresas.update_selc')
    ->middleware('auth');


// Rota para exibir o formulário de atualização de um registro específico 'Empresas' no painel do usuário
Route::get('/dashboard_page/empresas_update/{id}', [EmpresaController::class, 'update'])
    ->name('empresas.update')
    ->middleware('auth');

// Rota altera um registro específico 'Empresas' no painel do usuário
Route::post('/dashboard_page/show', [EmpresaController::class, 'show'])
->name('empresas.show')
->middleware('auth');

//Deletar a rota
Route::post('/dashboard_page/destroy', [EmpresaController::class, 'destroy'])
    ->name('empresas.destroy')
    ->middleware('auth');

//####################
//****PRODUTOS****##
//####################




//####################
//****PORTIFOLIO****##
//####################




//####################
//****CONTATOS****##
//####################




//####################
//****ORÇAMENTO****##
//####################



//####################
//****PREÇO****##
//####################




//####################
//****CLIENTES****##
//####################


//####################
//****FUNCIONARIOS****##
//####################
