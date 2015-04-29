<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyewa_m extends CI_Model
{
  function selectAll()
  {
    $query = $this->db->get('tb_data_penyewa');
    if ($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return array();
    }
  }

  function selectBy($field, $data)
  {
    $this->db->where($field, $data);
    $query = $this->db->get('tb_data_penyewa');
    return $query;
  }

  function insert($data)
  {
    $query = $this->db->insert('tb_data_penyewa', $data);
    return $query;
  }

  function update($data, $id)
  {
    $this->db->where('kd_data_penyewa', $id);
    $query = $this->db->update('tb_data_penyewa', $data);
    return $query;
  }

  function delete($data ,$id)
  {
    $this->db->where('kd_data_penyewa', $id);
    $query = $this->db->delete('tb_data_penyewa');
    return $query;
  }

  // function login($id_alumni, $password)
  // {
  //   $this->db->where('id_alumni', $id_alumni);
  //   $this->db->where('password', $password);
  //   $query = $this->db->get('alumni');
  //   if ($query->num_rows()==1)
  //   {
  //     return TRUE;
  //   }
  //   else
  //   {
  //     return FALSE;
  //   }
  // }

}