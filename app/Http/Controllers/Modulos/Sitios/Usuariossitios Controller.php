<?php
namespace App\Http\Controllers\Modulos\Sitios;

use App\Http\Controllers\Controller;
use DB;

/**
 * Description of usuariosController
 *
 * @author DRX
 */
class SitiosController extends Controller {

  function getCrear() {

    $nombre = "David Barona";
    return view('Modulos.Usuarios.usuarios.crear', compact("nombre"));
  }

  function postCrear() {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

    return redirect(url("usuarios/usuarios/index"));
  }

  function getListar() {
    die("Funcion Listar");
  }

  function getIndex() {

    $sitio = DB::select("SELECT * FROM bdp_sitio");

    return view('Modulos.Sitios.index', compact("sitios"));
  }

  function getEditar($id) {

    $sitio = DB::select("SELECT * FROM usuario WHERE id = ?", array($id));
    $sitio = $sitio[0];

    return view('Modulos.Usuarios.usuarios.editar', compact("sitio"));
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
