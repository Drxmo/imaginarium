<?php

namespace App\Http\Controllers\Modulos\Busqueda;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Session;
use \Illuminate\Support\Collection;
//use App\Http\Controllers\Modulos\Usuarios\Input;
use DB;

/**
 * Description of usuariosController
 *
 * @author DRX
 */
class BusquedaController extends Controller {

    function postSearch() {

        $string = filter_input_array(INPUT_POST)['string'];
//        extract($registro);
//        include("/class.stemmer.inc");
//        include("./class.stemmer.php");
//        
        $results = DB::select(" SELECT DISTINCT * FROM bdp_sitio WHERE (sit_nombre LIKE '%" . $string . "%' OR sit_descripcion LIKE '%" . $string . "%' OR sit_direccion LIKE '%" . $string . "%') ORDER BY sit_id DESC ");
//     $results = DB::select(" SELECT DISTINCT * FROM bdp_sitio WHERE ((sit_nombre LIKE '%'.$string.'%' OR subtitle LIKE '%'.$string.'%' OR content LIKE '%'.$string.'%') OR (title LIKE '%form%' OR subtitle LIKE '%form%' OR content LIKE '%form%')) ORDER BY id DESC ");
////        include('./cleaner.php');
//
//        $stemmer = new Stemmer;
//        $stemmed_string = $stemmer->stem($string);
//
//        $clean_string = new cleaner();
//        $stemmed_string = $clean_string->parseString($stemmed_string);
//
//
//        $split = split(" ", $stemmed_string);
//        foreach ($split as $array => $value) {
//            if (strlen($value) > 3) {
//                continue;
//            }
//            $new_string .= '' . $value . ' ';
//        }
//        $new_string = substr($new_string, 0, (strLen($new_string) - 1));
//
//
//        $split_stemmed = split(" ", $new_string);
//
//        $sql = "SELECT DISTINCT * FROM articles WHERE (";
//
//        while (list($key, $val) = each($split_stemmed)) {
//            if ($val <> " " and strlen($val) > 0) {
//                $sql .= "(title LIKE '%'.$val.'%' OR subtitle LIKE '%'.$val.'%' OR content LIKE '%'.$val.'%') OR";
//            }
//        }
//        $sql = substr($sql, 0, (strLen($sql) - 3)); //this will eat the last OR
//        $sql .= ") ORDER BY id DESC";
//
//        $query = mysql_query($sql) or die(mysql_error());
//        $row_sql = mysql_fetch_assoc($query);
//        $total = mysql_num_rows($query);
//
//        if ($total > 0) {
//            while ($row_sql = mysql_fetch_assoc($query)) {//echo out the results
//                echo '' . $row_sql['title'] . '<br />' . $row_sql['subtitle'] . '';
//            }
//        } else {
//            echo "No results to display";
//        }

        return view('Modulos.busqueda.search', compact("results"));
    }

    function getBuscar() {

        return view('Modulos.Busqueda.buscar', compact("nombre", "roles"));
    }

    function getCrear() {

        $nombre = "Administrador";
        $roles = DB::select("SELECT * FROM bdp_rol WHERE rol_id != 1");
//        $maxId = 'SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1';



        return view('Modulos.Usuarios.usuarios.crear', compact("nombre", "roles"));
    }

    function postCrear() {
        $registro = filter_input_array(INPUT_POST)['registro'];
        extract($registro);

//    $nombre = $_POST['nombre'];
//    $apellido = $_POST['apellido'];
//      'SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1';
        $usuarios = DB::select('SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
        $new_arr[] = null;
        foreach ($usuarios as $usuario) {
            $new_arr[] = $usuario->id;
        }
        $usu_id = implode($new_arr);
//            print_r($res_arr);
//      'SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1';
        $usuarios = DB::select('SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
        $new_arr2[] = null;
        foreach ($usuarios as $usuario) {
            $new_arr2[] = $usuario->id;
        }
        $dus_id = implode($new_arr2);
//            print_r($res_arr);


        $rules = array(
            'nombre' => 'required|alpha|min:2',
            'apellidos' => 'required|alpha|min:2',
//                'email'=>'required|email|unique:users,email,'.Input::get('id').',id',
            'pass' => 'alpha_num|between:6,12|confirmed',
            'pass2' => 'alpha_num|between:5,12',
//                'address'=>'regex:/^[a-z0-9- ]+$/i|min:2',
//                'city'=>'alpha|min:2',
//                'state'=>'alpha|min:2|max:2',
//                'zip'=>'numeric|min:5|max:5',
//                'phone'=>'regex:/^\d{3}\-\d{3}\-\d{4}$/',
        );
        $messages = array(
            'unique' => 'The :attribute already been registered.',
//                                'phone.regex' => 'The :attribute number is invalid , accepted format: xxx-xxx-xxxx',
//                                'address.regex' => 'The :attribute format is invalid.',
        );








        if (($pass) == ($pass2)) {


            DB::insert("INSERT INTO bdp_usuario "
                    . "( usu_id, usu_usuario , usu_password, usu_activado,"
                    . " rol_id) VALUES (?,?,?,?,?)", array($usu_id, $nick,
                $pass, $activado, $rol));

            DB::insert("INSERT INTO bdp_dato_usuario "
                    . "( dus_id, usu_id, dus_nombre , "
                    . "dus_apellidos, dus_correo, dus_genero, "
                    . "dus_fecha_nacimiento, dus_facebook, dus_twitter,"
                    . " dus_google_plus) VALUES (?,?,?,?,?,?,?,?,?,?)", array($dus_id,
                $usu_id, $nombre, $apellidos, $email, $genero, $fecha, $facebook,
                $twitter, $google));

            Session::put('registroSuccess', 'Usuario creado exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));


            if (Session::has('admin') === true) {


                return redirect(url("usuarios/usuarios/index"));
            } elseif (Session::has('super') === true) {

                return redirect(url("usuarios/usuarios/index"));
            } else {
                return redirect(url("index"));
            }
        } else {
            return redirect(url("usuarios/usuarios/crear"));
        }
    }

    function getListar() {
        die("Funcion Listar");
    }

    function getIndex2($id) {

        $usuarios = DB::select("SELECT * FROM bdp_usuario WHERE usu_id = $id");
        $dato_usuarios = DB::select("SELECT * FROM bdp_dato_usuario WHERE usu_id = $id");
        return view('Modulos.Usuarios.usuarios.index2', compact("usuarios", "dato_usuario"));
    }

    function getIndex() {
        if (Session::has('super') === true) {
            $usuarios = DB::select("SELECT * FROM bdp_usuario");
            $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario");
            Session::put('admin', 'Administrador');

            return view('Modulos.Usuarios.usuarios.index', compact("usuarios", "dato_usuario"));
        } else {
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getEditar($id) {
        if (Session::has('super') === true) {


            $nombre = "Administrador";
            $roles = DB::select("SELECT * FROM bdp_rol WHERE rol_id != 1");

            $usuario = DB::select("SELECT * FROM bdp_usuario WHERE usu_id = ?", array($id));
            $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
            $usuario = $usuario[0];
            $dato_usuario = $dato_usuario[0];
            $rol1 = DB::select("SELECT rol_rol FROM bdp_rol WHERE rol_id = ?", array($usuario->rol_id));

//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
            $new_arr2[] = null;
            foreach ($rol1 as $rol) {
                $new_arr2[] = $rol->rol_rol;
            }
            $rol = implode($new_arr2);


            return view('Modulos.Usuarios.usuarios.editar', compact("usuario", "dato_usuario", "nombre", "roles", "rol"));
        } else {
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function postEditar() {

        if (Session::has('super') === true) {


            $registro = filter_input_array(INPUT_POST)['registro'];
            extract($registro);


            if (($pass) == ($pass2)) {

                DB::update("UPDATE bdp_usuario SET usu_usuario = ?, usu_password = ? , usu_activado = ? , rol_id = ? , usu_updated_at = ? "
                        . " WHERE usu_id = ?", array($nick, $pass, $activado, $rol, $usu_updated_at, $id1));

                DB::update("UPDATE bdp_dato_usuario SET  dus_nombre = ?, dus_apellidos = ?, dus_correo = ?, dus_genero = ?,"
                        . " dus_fecha_nacimiento = ?, dus_facebook = ?, dus_twitter = ?,"
                        . " dus_google_plus = ?, dus_updated_at = ? WHERE usu_id = ?", array($nombre, $apellidos, $email, $genero, $fecha, $facebook,
                    $twitter, $google, $usu_updated_at, $id1));

                if (Session::has('super') !== true) {
                    Session::put('registroSuccess', 'Datos editados exitosamente');
                }


                if (Session::has('admin') === true) {


                    return redirect(url("usuarios/usuarios/index"));
                } elseif (Session::has('super') === true) {

                    return redirect(url("usuarios/usuarios/index"));
                } else {
                    return redirect(url("index"));
                }
            } else {
                return redirect(url("usuarios/usuarios/crear"));
            }


            return redirect(url("usuarios/usuarios/index"));
        } else {
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getSuspender($id) {

        if (Session::has('super') === true) {


//            UPDATE `bdp_sitio` SET `sit_deleted_at` = NULL WHERE `bdp_sitio`.`sit_id` = 23

            $usu_deleted_at = date("Y-m-d\TH:i:s");


            DB::update("UPDATE bdp_usuario SET usu_deleted_at = ? "
                    . " WHERE usu_id = ?", array($usu_deleted_at, $id));

            DB::update("UPDATE bdp_dato_usuario SET dus_deleted_at = ? WHERE usu_id = ?", array($usu_deleted_at, $id));

            return redirect(url("usuarios/usuarios/index"));
        } else {
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getEliminar($id) {

        if (Session::has('user') === true) {

//  if (Session::has('super') === true) {
//        DB::delete("DELETE FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
//        DB::delete("DELETE FROM bdp_usuario WHERE usu_id = ?", array($id));
            // DB::update("UPDATE bdp_dato_usuario SET dus_deleted_at = ? WHERE usu_id = ?", array( $usu_deleted_at, $id));
//        return redirect(url("usuarios/usuarios/eliminar"));
            return view('Modulos.Usuarios.usuarios.eliminar', compact("id", "dato_usuario"));
//  }
        } else {
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getBorrar($id) {



        if (Session::has('super') === true) {

            DB::delete("DELETE FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
            DB::delete("DELETE FROM bdp_usuario WHERE usu_id = ?", array($id));


            // DB::update("UPDATE bdp_dato_usuario SET dus_deleted_at = ? WHERE usu_id = ?", array( $usu_deleted_at, $id));


            return redirect(url("usuarios/usuarios/index"));
        } else {
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getLogin() {

        if (Session::has('user') !== true) {


            if (Session::has('user') === true) {
                $titulo = 'Bienvenid@ ' . Session::get('nombre');
            } else {
                $titulo = 'Agenda';
            }

//        $this->loginForm = $config->getUrl() . 'index.php/seguridad/login';
//        $this->preLogin = $config->getUrl() . 'index.php/home/lista';
//        $this->registroURL = $config->getUrl() . 'index.php/seguridad/registro';
//        $this->logoutURL = $config->getUrl() . 'index.php/home/seguridad/logout';
//        $this->defineView('home/seguridad', 'loginFormulario', 'html');
//            $this->defineView('home', 'index', 'html');
//    include '../../view/home/seguridad/loginUsuario.html.php';
//    
//        return redirect(url("usuarios/usuarios/login"));
            return view('Modulos.Usuarios.usuarios.login', compact("usuarios", "dato_usuario", "titulo"));
        } else {

            return redirect(url("index"));
        }
    }

    function postLogin() {


//       function nombre($id) {
//    $nombre = DB::select("SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
//    $new_arr[] = null;
//foreach($nombre as $nombr)
//{
//    $new_arr[] = $nombr->sit_nombre;
//}
//$res_arr = implode($new_arr);
//print_r($res_arr);
//  }
//  
//  function descripcion($id) {
//    $descripcio = DB::select("SELECT sit_descripcion FROM bdp_sitio WHERE sit_id = ?", array($id));
//    $new_arr[] = null;
//foreach($descripcio as $descripcion)
//{
//    $new_arr[] = $descripcion->sit_descripcion;
//}
//$res_arr = implode($new_arr);
//print_r($res_arr);
//  }




        if (filter_has_var(INPUT_POST, 'seguridad') === TRUE) {
//            $user = filter_input_array(INPUT_POST)['seguridad']['user'];
//            $password = filter_input_array(INPUT_POST)['seguridad']['pass'];
            $seguridad = filter_input_array(INPUT_POST)['seguridad'];
            extract($seguridad);

            $usuarioI = DB::select("SELECT usu_id FROM bdp_usuario WHERE usu_deleted_at IS NULL AND usu_activado = '1' AND (usu_usuario = ? AND usu_password = ?)", array($user, $pass));
            //$usuarioId2 = $usuarioId[0];
            //   $usuarioId = implode($usuarioId2);



            $new_arr[] = null;
            foreach ($usuarioI as $nombr) {
                $new_arr[] = $nombr->usu_id;
            }
            $usuarioId = implode($new_arr);
//print_r($res_arr);
//            $usuario->setUsuario($user);
//            $usuario->setPassword($password);

            if (isset($usuarioI) === true) {

                if (empty($usuarioId) !== true) {
//                

                    echo $usuarioId . "bien hecho";
                    echo $usuarioId;
                    //     $datoUsuario = $usuario->getById($id); //getDataByUserPassword();
                    $usuario = DB::select("SELECT * FROM bdp_usuario WHERE usu_id = ?", array($usuarioId));
                    // print_r($usuario);

                    $usuario = $usuario[0];
                    $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario WHERE usu_id = ?", array($usuarioId));
                    $dato_usuario = $dato_usuario[0];

//        print_r($usuario);
//        die();
                    if ($usuario != false) {
                        //             $_SESSION['user']['id'] = $usuario->usu_id;
                        Session::put('user', $usuarioId);
                        Session::put('rol', $usuario->rol_id);
                        if ($dato_usuario->dus_genero == 1) {
                            Session::put('userNombre', 'o ' . $dato_usuario->dus_nombre);
                        } else {
                            Session::put('userNombre', 'a ' . $dato_usuario->dus_nombre);
                        }
                        if ($usuario->rol_id == 3) {
                            Session::put('super', true);
                        }

                        //              $_SESSION['user']['nombre'] = $usuario->nombre;
//                    header("Location:" . $config->getUrl() . "index.php");
//                    exit();
                        return redirect(url("index"));
                    } else {
                        echo "Mal hecho<br>";
                        echo'Ocurrio un error usuario no existente';
                    }
                } else {
                    echo "Mal hecho";
//                $ind = $iddd;
                    Session::put('usuarioInvalido', 'Datos de usuario son inválidos.');
                }
            }
        }
//        $index = $config->getUrl() . 'index.php';
//        header("Location: $index");
//        exit();
        return redirect(url("index"));
    }

    function getLogout() {

        if (Session::has('user') === true) {
            session::forget('user');
        }
        if (Session::has('userNombre') === true) {
            session::forget('userNombre');
        }
        if (Session::has('admin') === true) {
            session::forget('admin');
        }
        if (Session::has('rol') === true) {
            session::forget('rol');
        }
        if (Session::has('super') === true) {
            session::forget('super');
        }

//        $config = $this->getConfig();
//        $index = $config->getUrl().'index.php';
//                header("location: $index");
//                exit();
        return redirect(url("index"));
    }

}
