<?php
namespace App\Http\Controllers\Modulos\Seguridad;

use App\Http\Controllers\Controller;
use DB;


/**
 * Description of usuariosController
 *
 * @author Alzate
 */
class usuariosController extends Controller {
    
    function getLogin () {
        return view('Modulos.Seguridad.login.login');
        
    }
}
