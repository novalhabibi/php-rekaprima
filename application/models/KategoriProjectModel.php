<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriProjectModel extends CI_Model
{
    public $_table ="kategori_projects";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_kategori_project'=>$id])->row();
    }


    public function simpan()
    {
        $data = array(
            'nama_kategori_project' => $this->input->post('nama_kategori_project')
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $id =$this->input->post('id_kategori_project');

        $data = array(
            'nama_kategori_project' => $this->input->post('nama_kategori_project')
        );

        $this->db->where('id_kategori_project', $id);
        return $this->db->update($this->_table, $data);

    }

    

    public function hapus($id)
    {
        $this->db->where('id_kategori_project', $id);
        $this->db->delete($this->_table);
    }
}
