<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginUser'])->name('login.auth');

/**
 * Type Materiels
 */
Route::prefix("/materiels")->name('materiel.')->controller(\App\Http\Controllers\MaterielController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/edit/{materiel}', 'editForm')->name('editForm');
    Route::post('/edit/{materiel}', 'edit')->name('edit');
    Route::post('/delete/{materiel}', 'delete')->name('delete');
});

/**
 * Type Materiels
 */
Route::prefix("/type-materiel")->name('type_materiel.')->controller(\App\Http\Controllers\TypeMaterielController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/edit/{typeMateriel}', 'editForm')->name('editForm');
    Route::post('/edit/{typeMateriel}', 'edit')->name('edit');
    Route::post('/delete/{typeMateriel}', 'delete')->name('delete');
});

/**
 * Etat Materiels
 */
Route::prefix("/etat-materiel")->name('etat_materiel.')->controller(\App\Http\Controllers\EtatMaterielController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/edit/{etatMateriel}', 'editForm')->name('editForm');
    Route::post('/edit/{etatMateriel}', 'edit')->name('edit');
    Route::post('/delete/{etatMateriel}', 'delete')->name('delete');
});

/**
 * Services
 */
Route::prefix("/services")->name('service.')->controller(\App\Http\Controllers\ServiceController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/edit/{service}', 'editForm')->name('editForm');
    Route::post('/edit/{service}', 'edit')->name('edit');
    Route::post('/delete/{service}', 'delete')->name('delete');
});


/**
 * Agents
 */
Route::prefix("/agents")->name('agent.')->controller(\App\Http\Controllers\AgentController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/edit/{agent}', 'editForm')->name('editForm');
    Route::post('/edit/{agent}', 'edit')->name('edit');
    Route::post('/delete/{agent}', 'delete')->name('delete');
});

/**
 * Fournisseur
 */
Route::prefix("/fournisseurs")->name('fournisseur.')->controller(\App\Http\Controllers\FournisseurController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/edit/{fournisseur}', 'editForm')->name('editForm');
    Route::post('/edit/{fournisseur}', 'edit')->name('edit');
    Route::post('/delete/{fournisseur}', 'delete')->name('delete');
});

/**
 * Maintenance
 */
Route::prefix("/maintenances")->name('maintenance.')->controller(\App\Http\Controllers\MaintenanceController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/edit/{maintenance}', 'editForm')->name('editForm');
    Route::post('/edit/{maintenance}', 'edit')->name('edit');
    Route::post('/delete/{maintenance}', 'delete')->name('delete');
    Route::get('/print/{maintenance}', 'print')->name('print');
});

/**
 * Inventaire
 */
Route::prefix("/inventaires")->name('inventaire.')->controller(\App\Http\Controllers\InventaireController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'addForm')->name('addForm');
    Route::post('/add', 'add')->name('add');
    Route::get('/print/{inventaire}', 'print')->name('print');
});
