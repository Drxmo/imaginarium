<?php
namespace App\Http\Controllers\Modulos\Categorias;

use App\Http\Controllers\Controller;
use DB;


/**
 * Description of CategoriasController
 *
 * @author Alzate
 */
class CategoriasController extends controller {
    
    function getIndex(){
    return view('Modulos.Categorias.categoria');    
    }
}

class CategoriaController extends controller{
    function getIndex(){
        return view('Modulos.Categorias.categoriadetalle');
    }
}