<?php
namespace App\Http\Controllers\Modulos\Sitios;

use App\Http\Controllers\Controller;
use DB;

/**
 * Description of SitiosController
 *
 * @author Alzate
 */
class SitiosController extends controller{
   
    function getIndex(){
        return view('Modulos.Sitios.sitio');
    }
    
    
}

class sitioController extends controller{
    
    function getIndex(){
        return view('Modulos.Sitios.sitdetalles');
    }
}