<?php
namespace App\Http\Controllers\Modulos\Seguridad;

use App\Http\Controllers\Controller;
use DB;


/**
 * Description of CategoriasController
 *
 * @author DRX
 */
class PanelcontrolController extends controller {
    
    function getIndex(){
    return view('Modulos.Seguridad.panelControl');    
    }
}

