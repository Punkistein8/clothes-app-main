<?php
class Hombre extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  # Método para insertar los datos de hombres
  public function insertarHombre($datos)
  {
    return $this->db->insert("prenda-hombre", $datos);
  }
  # Método para obtener los datos de un hombre
  public function getHombres()
  {
    $hombres = $this->db->get('prenda-hombre');
    if ($hombres->num_rows() > 0) {
      return $hombres->result();
    } else {
      return false;
    }
  }
  # Método para borrar una prenda hombre por ID
  public function eliminarHombre($id)
  {
    $this->db->where('id_ph', $id);
    return $this->db->delete('prenda-hombre');
  }
  # Método para obtener una prenda hombre  por ID
  public function obtenerHombrePorId($id)
  {
    $this->db->where('id_ph', $id);
    $hombres = $this->db->get('prenda-hombre');
    if ($hombres->num_rows() > 0) {
      return $hombres->row();
    } else {
      return false;
    }
  }

  # Método para editar una prenda hombre por ID
  public function editarHombrePorId($id, $nuevosDatos)
  {
    $this->db->where('id_ph', $id);
    return $this->db->update('prenda-hombre', $nuevosDatos);
  }
  // $this->db->where('id_est', $id);
  // return $this->db->update('estudiante', $data);
}
