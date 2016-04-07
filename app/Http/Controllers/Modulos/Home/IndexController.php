<?php

namespace App\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Session;
use DB;


class IndexController extends Controller{
    function getIndex(){
    	//return view('Modulos.Home.index');
        
        
        
        $welcome = DB::select("SELECT * FROM bdp_welcome WHERE wel_view = 'home'");
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE bdp_imagen.sit_id = bdp_sitio.sit_id");
        
        
//              . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
        $new_arr[] = null;
        foreach ($welcome as $usuario) {
            $new_arr[] = $usuario->wel_title;
        }
        $usu_id = implode($new_arr);
        $welcome = $welcome[0];
        
        
        
//        
//        
//        if (isset($_SESSION['user']) === true) {
//            $this->defineView('home', 'index', 'html');
////            $index = $config->getUrl() . 'index.php';
////            header("Location: $index");
////            exit();
//        } else if ((isset($_SESSION['registroSuccess']) === true) or ( isset($_SESSION['usuarioInvalido']) === true)) {
//
//
////            $this->defineView('home/seguridad', 'loginFormulario', 'html');
//            $this->defineView('home/seguridad', 'loginFormulario', 'html');
//        } else {
//
//
//            $this->defineView('home', 'index', 'html');
////    include '../../view/home/seguridad/loginUsuario.html.php';
//        }
//    }
//
//}
//        
       
         
//        if (isset($_SESSION['user']) === true) {
//            $this->defineView('home', 'index', 'html');
//           
//        } else if ((isset($_SESSION['registroSuccess']) === true) or ( isset($_SESSION['usuarioInvalido']) === true)) {
//
//
//         
//            $this->defineView('home/seguridad', 'loginFormulario', 'html');
//        } else {
//
//
//            $this->defineView('home', 'index', 'html');
//
//        }
    
        
        
        
        
         if (Session::has('user') === true){
             if (Session::has('registroSuccess') === true){
                 return redirect(url("usuarios/usuarios/login"));
             }else{
    	return view('index', compact("welcome", "sitios", "titulo"));
//             header("Location: http://localhost/imaginarium/public/index.php");
//            exit();
             }
        
        } elseif ((Session::has('registroEditado') === true) or (Session::has('registroSuccess') === true) or (Session::has('usuarioInvalido') === true)){
            
            return redirect(url("usuarios/usuarios/login"));
//        return view('Modulos.Usuarios.usuarios.login', compact("usuario", "dato_usuario", "nombre", "roles"));
        }else {
            
            return view('index', compact("welcome", "sitios"));
            
        }
        
    }
}