<?php
class Alcohol extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  # Método para insertar los datos de Alcohol
  public function insertarAlcohol($datos)
  {
    return $this->db->insert("alcohol", $datos);
  }
  # Método para obtener los datos de un Alcohol
  public function getAlcoholes()
  {
    $alcoholes = $this->db->get('alcohol');
    if ($alcoholes->num_rows() > 0) {
      return $alcoholes->result();
    } else {
      return false;
    }
  }
  # Método para borrar una Alcohol por ID
  public function eliminarAlcohol($id)
  {
    $this->db->where('id_alc', $id);
    return $this->db->delete('alcohol');
  }
  # Método para obtener un Alcohol  por ID
  public function obtenerAlcoholPorId($id)
  {
    $this->db->where('id_alc', $id);
    $alcoholes = $this->db->get('alcohol');
    if ($alcoholes->num_rows() > 0) {
      return $alcoholes->row();
    } else {
      return false;
    }
  }

  # Método para editar un Alcohol por ID
  public function editarAlcoholPorId($id, $nuevosDatos)
  {
    $this->db->where('id_alc', $id);
    return $this->db->update('alcohol', $nuevosDatos);
  }
}
