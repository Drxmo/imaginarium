<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
  return view('index');
});




Route::controllers([
    'home/index' => "Modulos\Home\IndexController",
    'usuarios/usuarios' => "Modulos\Usuarios\UsuariosController",
    'usuarios/roles' => "Modulos\Usuarios\RolesController",
    'eventos/eventos' => "Modulos\Eventos\EventosController",
    'sitios/sitios' => "Modulos\Sitios\SitiosController",
//    'sitios/sitdetalles' => "Modulos\Sitios\SitioController",
//    'sitios/creasitio' => "Modulos\Sitios\CrearsitioController",
    'categorias/categoria' => "Modulos\Categorias\CategoriasController",
    'categorias/categoriadetalle' => "Modulos\Categorias\CategoriaController",
    'seguridad/login' => "Modulos\Seguridad\usuariosController",
    'seguridad/panelcontrol' => "Modulos\Seguridad\panelcontrolController",
    
]);
/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
  //
});
