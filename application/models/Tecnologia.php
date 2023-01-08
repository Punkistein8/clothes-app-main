<?php
class Tecnologia extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  # Método para insertar los datos de Tecnologia
  public function insertarTecnologia($datos)
  {
    return $this->db->insert("tecnologia", $datos);
  }
  # Método para obtener los datos de un Tecnologia
  public function getTecnologias()
  {
    $tecnologias = $this->db->get('tecnologia');
    if ($tecnologias->num_rows() > 0) {
      return $tecnologias->result();
    } else {
      return false;
    }
  }
  # Método para borrar una Tecnologia por ID
  public function eliminarTecnologia($id)
  {
    $this->db->where('id_tec', $id);
    return $this->db->delete('tecnologia');
  }
  # Método para obtener un Tecnologia  por ID
  public function obtenerTecnologiaPorId($id)
  {
    $this->db->where('id_tec', $id);
    $tecnologias = $this->db->get('tecnologia');
    if ($tecnologias->num_rows() > 0) {
      return $tecnologias->row();
    } else {
      return false;
    }
  }

  # Método para editar un Tecnologia por ID
  public function editarTecnologiaPorId($id, $nuevosDatos)
  {
    $this->db->where('id_tec', $id);
    return $this->db->update('Tecnologia', $nuevosDatos);
  }
}
