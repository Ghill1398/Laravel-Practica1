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

Route::get('/','Controlador@Home');

Route::get('login/','Controlador@Login');

Route::get('forgotpassword/','Controlador@ForgotPassword');

Route::get('Logged/','Controlador@Logged');

Route::post('iniciarSesion/','Controlador@iniciarSesion');

Route::post('recuperarContrasena/','Controlador@recuperarContrasena');

