<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Models\Student;

Route::get('/students', [StudentController::class, 'index']); // Esta ruta se encarga de obtener una lista de estudiantes mediante el método GET{


Route::post('/students', [StudentController::class, 'store']); // Esta ruta se encarga de crear un nuevo estudiante mediante el método POST,
    //el objeto request se pasa como parámetro, de esta forma se puede acceder a los datos del estudiante que se va a crear

Route::put('/students/{id}', [StudentController::class, 'update']); // Esta ruta se encarga de actualizar un estudiante existente mediante el método PUT,
    //el ID del estudiante se pasa como parámetro, de esta forma se puede identificar cuál estudiante se va a actualizar
    //el objeto request se pasa como parámetro, de esta forma se puede acceder a los datos del estudiante que se va a actualizar

Route::delete('/students/{id}', [StudentController::class, 'delete']); // Esta ruta se encarga de eliminar un estudiante existente mediante el método DELETE,
    //el ID del estudiante se pasa como parámetro, de esta forma se puede identificar cuál estudiante se va a eliminar
    //el objeto request se pasa como parámetro, de esta forma se puede acceder a los datos del estudiante que se va a eliminar

Route::get('/students/{id}', [StudentController::class, 'show']); // Esta ruta se encarga de obtener un estudiante específico mediante el método GET,
    //el ID del estudiante se pasa como parámetro, de esta forma se puede identificar cuál estudiante se va a obtener

Route::patch('/students/{id}', [StudentController::class, 'patchy']); // Esta ruta se encarga de actualizar parcialmente un estudiante
    //existente mediante el método PATCH, el ID del estudiante se pasa como parámetro, de esta forma se puede identificar cuál estudiante se va a actualizar
    //el objeto request se pasa como parámetro, de esta forma se puede acceder a los datos del estudiante que se va a actualizar
