<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hombres extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("hombre");
  }

  public function index()
  {
    $data["listaHombres"] = $this->hombre->getHombres();
    $this->load->view('header');
    $this->load->view('hombres/index', $data);
    $this->load->view('footer');
  }
  public function guardarPrendaHombre()
  {
    $datosNuevaPrenda = array(
      "id_ph" => $this->input->post('id_ph'),
      "nombre_ph" => $this->input->post('nombre_ph'),
      "precio_ph" => $this->input->post('precio_ph'),
      "tipo_ph" => $this->input->post('tipo_ph'),
      "foto_ph" => $this->input->post('foto_ph'),
      "descripcion_ph" => $this->input->post('descripcion_ph')
    );
    if ($this->hombre->insertarHombre($datosNuevaPrenda)) {
      redirect('hombres'); //redirecciona a la vista index
    } else {
      echo "<h1>No</h1>";
    }
  }
  public function eliminarHombre($id)
  {
    if ($this->hombre->eliminarHombre($id)) {
      redirect('hombres');
    } else {
      echo "<h1>No se pudo eliminar</h1>";
    }
  }
  public function cargarDatosPrenda($id)
  {
    $data["prendaEditar"] = $this->hombre->obtenerHombrePorId($id);
    $this->load->view('header');
    $this->load->view('hombres/editar', $data);
    $this->load->view('footer');
  }

  public function editarHombre($id)
  {
    $datosEditarHombre = array(
      "nombre_ph" => $this->input->post('nombre_ph'),
      "precio_ph" => $this->input->post('precio_ph'),
      "tipo_ph" => $this->input->post('tipo_ph'),
      "foto_ph" => $this->input->post('foto_ph'),
      "descripcion_ph" => $this->input->post('descripcion_ph'),
    );

    if ($this->hombre->editarHombrePorId($id, $datosEditarHombre)) {
      redirect('hombres'); //redirecciona a la vista index
      echo print_r($datosEditarHombre);
    } else {
      echo "<h1>Error al actualizar</h1>";
    }
  }
}
