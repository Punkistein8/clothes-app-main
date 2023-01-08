<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alcoholes extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("alcohol");
  }

  public function index()
  {
    $data["listaAlcoholes"] = $this->alcohol->getAlcoholes();
    $this->load->view('header');
    $this->load->view('alcoholes/index', $data);
    $this->load->view('footer');
  }
  public function guardarAlcohol()
  {
    $datosNuevoAlcohol = array(
      "id_alc" => $this->input->post('id_alc'),
      "nombre_alc" => $this->input->post('nombre_alc'),
      "precio_alc" => $this->input->post('precio_alc'),
      "foto_alc" => $this->input->post('foto_alc'),
    );
    if ($this->alcohol->insertarAlcohol($datosNuevoAlcohol)) {
      redirect('alcoholes'); //redirecciona a la vista index
    } else {
      echo "<h1>No</h1>";
    }
  }
  public function eliminarAlcohol($id)
  {
    if ($this->alcohol->eliminarAlcohol($id)) {
      redirect('alcoholes');
    } else {
      echo "<h1>No se pudo eliminar</h1>";
    }
  }
  public function cargarDatosAlcohol($id)
  {
    $data["alcoholEditar"] = $this->alcohol->obtenerAlcoholPorId($id);
    $this->load->view('header');
    $this->load->view('alcoholes/editar', $data);
    $this->load->view('footer');
  }

  public function editarAlcohol($id)
  {
    $datosEditarAlcohol = array(
      "nombre_alc" => $this->input->post('nombre_alc'),
      "precio_alc" => $this->input->post('precio_alc'),
      "foto_alc" => $this->input->post('foto_alc'),
    );

    if ($this->alcohol->editarAlcoholPorId($id, $datosEditarAlcohol)) {
      redirect('alcoholes'); //redirecciona a la vista index
      echo print_r($datosEditarAlcohol);
    } else {
      echo "<h1>Error al actualizar</h1>";
    }
  }
}
