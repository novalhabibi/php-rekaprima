<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    public $_table ="admins";

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
            'nama_admin' => $this->input->post('nama_admin'),
            'username_admin' => $this->input->post('username_admin'),
            'password_admin' => md5($this->input->post('password_admin'))
        );

        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $id =$this->input->post('id_admin');

        if ($this->input->post('password_admin_lama') == TRUE) {
            $password = $this->input->post('password_admin_lama');
        } else {
            $password = $this->input->post('password_admin');
        }
        
        

        $data = array(
            'nama_admin' => $this->input->post('nama_admin'),
            'username_admin' => $this->input->post('username_admin'),
            'password_admin' => ($password)
        );

        $this->db->where('id_admin', $id);
        return $this->db->update($this->_table, $data);

    }

    

    public function hapus($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete($this->_table);
    }
}
