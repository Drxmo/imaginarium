<?php
namespace App\Http\Controllers\Modulos\Categorias;

use App\Http\Controllers\Controller;
use DB;


/**
 * Description of CategoriasController
 *
 * @author Alzate
 */
class EventosController extends controller {
    
    function getIndex(){
    return view('Modulos.Categorias.categoria');    
    }
}

class EventoController extends controller{
    function getIndex(){
        return view('Modulos.Categorias.categoriadetalle');
    }
}