<?php

use App\Http\Controllers\admin\AdminSkill;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EducacionController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('inicio.inicio');
})->name('inicio');

Route::controller(ProyectoController::class)->group(function() {
    Route::get('/proyectos', 'index')->name('proyectos');
});

Route::controller(PersonaController::class)->group(function() {
    Route::get('/sobre-mi', 'index')->name('sobre-mi');
});

Route::controller(CertificadoController::class)->group(function() {
    Route::get('/certificados', 'index')->name('certificados');
});

Route::controller(EducacionController::class)->group(function() {
    Route::get('/educacion', 'index')->name('educacion');
});

Route::controller(ExperienciaController::class)->group(function() {
    Route::get('/experiencia', 'index')->name('experiencia');
});

Route::controller(BlogController::class)->group(function() {
    Route::get('/blog', 'index')->name('blog');
});

Route::controller(ContactoController::class)->group(function() {
    Route::get('/contacto', 'index')->name('contacto');
});

Route::controller(SkillController::class)->group(function() {
    Route::get('/skills', 'index')->name('skills');
});

