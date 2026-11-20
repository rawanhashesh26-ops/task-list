<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

//use Pest\Support\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',action: function(){
    $name = 'Rawan';
    $departments = [
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    //return view('about')->with(key: 'name', value: $name);
    //return view(view:'about', data: ['name' => $name]);
    return view(view:'about', data: compact('name', 'departments'));
});

Route::post('/about', function () {
    $name=$_POST['name'];
    $departments = [
        '1' => 'Tichnical',
        '2' => 'Financial',
        '3' => 'Sales',
    ];
    return view(view:'about', data: compact('name'));
});
Route::get('tasks' , [TaskController::class, 'index']);

Route::post('create' , [ TaskController::class, 'create']);

Route::post('delete/{id}', [TaskController::class, 'destroy']);

Route::post('edit/{id}', [TaskController::class, 'edit']);

Route::post('update', [TaskController::class, 'update']);
