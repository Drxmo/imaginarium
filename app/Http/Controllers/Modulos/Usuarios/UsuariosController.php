<?php

namespace App\Http\Controllers\Modulos\Usuarios;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;

/**
 * Description of usuariosController
 *
 * @author DRX
 */
class UsuariosController extends Controller {

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
            $usu_id=  implode($new_arr);
//            print_r($res_arr);
        

        
//      'SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1';
            $usuarios = DB::select('SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
            $new_arr2[] = null;
            foreach ($usuarios as $usuario) {
                $new_arr2[] = $usuario->id;
            }
            $dus_id= implode($new_arr2);
//            print_r($res_arr);
       
        
         
        

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

            Session::put('success', 'Usuario creado exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

            return redirect(url("usuarios/usuarios/index"));
        } else {
            return redirect(url("usuarios/usuarios/crear"));
        }
    }

    function getListar() {
        die("Funcion Listar");
    }

    function getIndex() {

        $usuarios = DB::select("SELECT * FROM bdp_usuario");
        $dato_usuario = DB::select("SELECT * FROM bdp_dato_usuario");


        return view('Modulos.Usuarios.usuarios.index', compact("usuarios", "dato_usuario"));
    }

    function getEditar($id) {

        $usuario = DB::select("SELECT * FROM usuario WHERE id = ?", array($id));
        $usuario = $usuario[0];

        return view('Modulos.Usuarios.usuarios.editar', compact("usuario"));
    }

    function postEditar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        DB::update("UPDATE usuario SET nombre = ?, apellido = ? WHERE id = ?", array(
            $nombre,
            $apellido,
            $id
                )
        );

        return redirect(url("usuarios/usuarios/index"));
    }
    

}
