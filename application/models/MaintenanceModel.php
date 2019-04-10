<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceModel extends CI_Model
{
    public $_table ="maintenances";
    
    public $nama_maintenance;
    public $gambar_maintenance;
    public $deskripsi_maintenance;
    public $link_maintenance;





    private function _uploadGambar($link_maintenance)
    {
        $tujuan ="./uploads/maintenances/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            =$link_maintenance;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_maintenance')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/news/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $maintenance = $this->getById($id);
        $filename = explode(".",$maintenance->link_maintenance)[0];

        return array_map('unlink', glob(FCPATH."uploads/maintenances/$filename.*"));

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAllJoin()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        return $query = $this->db->get()->result();
        // $query->result();
        // return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_maintenance'=>$id])->row();
    }


    public function simpan()
    {
        
        $link_maintenance = url_title($this->input->post('nama_maintenance'), 'dash', TRUE);

        $data = array(
            'nama_maintenance' => $this->input->post('nama_maintenance'),
            'gambar_maintenance'=>$this->_uploadGambar($link_maintenance),
            'deskripsi_maintenance' => $this->input->post('deskripsi_maintenance'),
            'link_maintenance' => $link_maintenance
        );
        
        return $this->db->insert($this->_table, $data);

        // return $data;
    }

    public function update()
    {
        // $post = $this->input->post();
        // $link_maintenance = url_title($this->input->post('nama_maintenance'), 'dash', TRUE);
        // $this->id_maintenance= $post["id_maintenance"];
        // $this->nama_maintenance=$post["nama_maintenance"];
        // $this->link_maintenance=url_title($post["nama_maintenance"], 'dash', TRUE);
        $link_maintenance = url_title($this->input->post('nama_maintenance'), 'dash', TRUE);

        if (!empty($_FILES["gambar_maintenance"]["name"])) {
            $gambar = $this->gambar_maintenance = $this->_uploadGambar($link_maintenance);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_maintenance= $post["deskripsi_maintenance"];
        
        $id =$this->input->post('id_maintenance');

        $data = array(
            'nama_maintenance' => $this->input->post('nama_maintenance'),
            'gambar_maintenance'=>$gambar,
            'deskripsi_maintenance' => $this->input->post('deskripsi_maintenance'),
            'link_maintenance' => $link_maintenance
        );
        


        $this->db->update($this->_table,$data, array('id_maintenance'=>$id));

    }

    

    public function hapus($id)
    {
        $this->_hapusGambar($id);
        $this->db->where('id_maintenance', $id);
        $this->db->delete($this->_table);
    }
}
