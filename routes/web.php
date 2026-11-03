<?php

use Illuminate\Support\Facades\Route;
use Pest\Support\View;

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
