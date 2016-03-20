<?php
namespace App\Http\Controllers\Modulos\Sitios;

use App\Http\Controllers\Controller;
use DB;


/**
 * Description of CategoriasController
 *
 * @author DRX
 */
class crearsitioController extends controller {
    
    function getIndex(){
    return view('Modulos.Sitios.crearsitio');    
    }
}

