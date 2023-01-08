<?php
class Mujer extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  # Método para insertar los datos de mujeres
  public function insertarMujer($datos)
  {
    return $this->db->insert("prenda-mujer", $datos);
  }
  # Método para obtener los datos de un mujer
  public function getMujeres()
  {
    $mujeres = $this->db->get('prenda-mujer');
    if ($mujeres->num_rows() > 0) {
      return $mujeres->result();
    } else {
      return false;
    }
  }
  # Método para borrar una prenda mujer por ID
  public function eliminarMujer($id)
  {
    $this->db->where('id_pm', $id);
    return $this->db->delete('prenda-mujer');
  }
  # Método para obtener una prenda mujer  por ID
  public function obtenerMujerPorId($id)
  {
    $this->db->where('id_pm', $id);
    $mujeres = $this->db->get('prenda-mujer');
    if ($mujeres->num_rows() > 0) {
      return $mujeres->row();
    } else {
      return false;
    }
  }

  # Método para editar una prenda mujer por ID
  public function editarMujerPorId($id, $nuevosDatos)
  {
    $this->db->where('id_pm', $id);
    return $this->db->update('prenda-mujer', $nuevosDatos);
  }
  // $this->db->where('id_est', $id);
  // return $this->db->update('estudiante', $data);
}
