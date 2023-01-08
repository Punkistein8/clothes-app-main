<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mujeres extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("mujer");
  }

  public function index()
  {
    $data["listaMujeres"] = $this->mujer->getMujeres();
    $this->load->view('header');
    $this->load->view('Mujeres/index', $data);
    $this->load->view('footer');
  }
  public function guardarPrendaMujer()
  {
    $datosNuevaPrenda = array(
      "id_pm" => $this->input->post('id_pm'),
      "nombre_pm" => $this->input->post('nombre_pm'),
      "precio_pm" => $this->input->post('precio_pm'),
      "tipo_pm" => $this->input->post('tipo_pm'),
      "foto_pm" => $this->input->post('foto_pm'),
      "descripcion_pm" => $this->input->post('descripcion_pm')
    );
    if ($this->mujer->insertarMujer($datosNuevaPrenda)) {
      redirect('Mujeres'); //redirecciona a la vista index
    } else {
      echo "<h1>No</h1>";
    }
  }
  public function eliminarMujer($id)
  {
    if ($this->mujer->eliminarMujer($id)) {
      redirect('Mujeres');
    } else {
      echo "<h1>No se pudo eliminar</h1>";
    }
  }
  public function cargarDatosPrenda($id)
  {
    $data["prendaEditar"] = $this->mujer->obtenerMujerPorId($id);
    $this->load->view('header');
    $this->load->view('Mujeres/editar', $data);
    $this->load->view('footer');
  }

  public function editarMujer($id)
  {
    $datosEditarMujer = array(
      "nombre_pm" => $this->input->post('nombre_pm'),
      "precio_pm" => $this->input->post('precio_pm'),
      "tipo_pm" => $this->input->post('tipo_pm'),
      "foto_pm" => $this->input->post('foto_pm'),
      "descripcion_pm" => $this->input->post('descripcion_pm'),
    );

    if ($this->mujer->EditarMujerPorId($id, $datosEditarMujer)) {
      redirect('Mujeres'); //redirecciona a la vista index
      echo print_r($datosEditarMujer);
    } else {
      echo "<h1>Error al actualizar</h1>";
    }
  }
}
