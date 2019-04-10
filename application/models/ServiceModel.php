<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model
{
    public $_table ="services";
    
    public $nama_service;
    public $gambar_service;
    public $deskripsi_service;
    public $link_service;





    private function _uploadGambar($link_service)
    {
        $tujuan ="./uploads/services/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            =$link_service;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_service')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/news/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $service = $this->getById($id);
        $filename = explode(".",$service->link_service)[0];

        return array_map('unlink', glob(FCPATH."uploads/services/$filename.*"));

        
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
        return $this->db->get_where($this->_table,['id_service'=>$id])->row();
    }


    public function simpan()
    {
        
        $link_service = url_title($this->input->post('nama_service'), 'dash', TRUE);

        $data = array(
            'nama_service' => $this->input->post('nama_service'),
            'gambar_service'=>$this->_uploadGambar($link_service),
            'deskripsi_service' => $this->input->post('deskripsi_service'),
            'link_service' => $link_service
        );
        
        return $this->db->insert($this->_table, $data);

        // return $data;
    }

    public function update()
    {
        // $post = $this->input->post();
        // $link_service = url_title($this->input->post('nama_service'), 'dash', TRUE);
        // $this->id_service= $post["id_service"];
        // $this->nama_service=$post["nama_service"];
        // $this->link_service=url_title($post["nama_service"], 'dash', TRUE);
        $link_service = url_title($this->input->post('nama_service'), 'dash', TRUE);

        if (!empty($_FILES["gambar_service"]["name"])) {
            $gambar = $this->gambar_service = $this->_uploadGambar($link_service);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_service= $post["deskripsi_service"];
        
        $id =$this->input->post('id_service');

        $data = array(
            'nama_service' => $this->input->post('nama_service'),
            'gambar_service'=>$gambar,
            'deskripsi_service' => $this->input->post('deskripsi_service'),
            'link_service' => $link_service
        );
        


        $this->db->update($this->_table,$data, array('id_service'=>$id));

    }

    

    public function hapus($id)
    {
        $this->_hapusGambar($id);
        $this->db->where('id_service', $id);
        $this->db->delete($this->_table);
    }
}
