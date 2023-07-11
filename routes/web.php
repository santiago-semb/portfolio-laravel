<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminSkill;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EducacionController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\login\RegisterController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return redirect()->route('inicio');
});

Route::get('/inicio', function() {
    return view('inicio.inicio');
})->name('inicio');

Route::controller(ProyectoController::class)->group(function() {
    Route::get('/proyectos', 'index')->name('proyectos');
    Route::get('/create-proyecto', 'create')->name('proyecto.create');
    Route::post('/store-proyecto', 'store')->name('proyecto.store');
    Route::get('/destroy-proyecto/{proyecto}', 'destroy')->name('proyecto.destroy');
    Route::get('/edit-proyecto/{proyecto}', 'edit')->name('proyecto.edit');
    Route::put('/update-proyecto', 'update')->name('proyecto.update');
});

Route::controller(PersonaController::class)->group(function() {
    Route::get('/sobre-mi', 'index')->name('sobre-mi');
    Route::get('/create-persona', 'create')->name('persona.create');
    Route::post('/store-persona', 'store')->name('persona.store');
    Route::get('/destroy-persona/{persona}', 'destroy')->name('persona.destroy');
    Route::get('/edit-persona/{persona}', 'edit')->name('persona.edit');
    Route::put('/update-persona', 'update')->name('persona.update');
});

Route::controller(CertificadoController::class)->group(function() {
    Route::get('/certificados', 'index')->name('certificados');
    Route::get('/create-certificado', 'create')->name('certificado.create');
    Route::post('/store-certificado', 'store')->name('certificado.store');
    Route::get('/destroy-certificado/{certificado}', 'destroy')->name('certificado.destroy');  
    Route::get('/edit-certificado/{certificado}', 'edit')->name('certificado.edit');
    Route::put('/update-certificado', 'update')->name('certificado.update');
});

Route::controller(EducacionController::class)->group(function() {
    Route::get('/educacion', 'index')->name('educacion');
    Route::get('/create-educacion', 'create')->name('educacion.create');
    Route::post('/store-educacion', 'store')->name('educacion.store');
    Route::get('/destroy-educacion/{educacion}', 'destroy')->name('educacion.destroy');
    Route::get('/edit-educacion/{educacion}', 'edit')->name('educacion.edit');
    Route::put('/update-educacion', 'update')->name('educacion.update');
});

Route::controller(ExperienciaController::class)->group(function() {
    Route::get('/experiencia', 'index')->name('experiencia');
    Route::get('/create-experiencia', 'create')->name('experiencia.create');
    Route::post('/store-experiencia', 'store')->name('experiencia.store');
    Route::get('/destroy-experiencia/{experiencia}', 'destroy')->name('experiencia.destroy');
    Route::get('/edit-experiencia/{experiencia}', 'edit')->name('experiencia.edit');
    Route::put('/update-experiencia', 'update')->name('experiencia.update');
});

Route::controller(BlogController::class)->group(function() {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/ver-blog/{blog}', 'show')->name('blog.show');
    Route::get('/create-blog', 'create')->name('blog.create');
    Route::post('/store-blog', 'store')->name('blog.store');
    Route::get('/destroy-blog/{blog}', 'destroy')->name('blog.destroy'); 
    Route::get('/edit-blog/{blog}', 'edit')->name('blog.edit');
    Route::put('/update-blog', 'update')->name('blog.update');
});

Route::controller(ContactoController::class)->group(function() {
    Route::get('/contacto', 'index')->name('contacto');
});

Route::controller(SkillController::class)->group(function() {
    Route::get('/skills', 'index')->name('skills');
    Route::get('/create-skill', 'create')->name('skill.create');
    Route::post('/store-skill', 'store')->name('skill.store');
    Route::get('/destroy-skill/{skill}', 'destroy')->name('skill.destroy');
    Route::get('/edit-skill/{skill}', 'edit')->name('skill.edit');
    Route::put('/update-skill', 'update')->name('skill.update');
});