<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingModel extends CI_Model
{
    public $_table ="trainings";
    
    public $nama_training;
    public $gambar_training;
    public $deskripsi_training;
    public $link_training;





    private function _uploadGambar($link_training)
    {
        $tujuan ="./uploads/trainings/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            =$link_training;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_training')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/news/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $training = $this->getById($id);
        $filename = explode(".",$training->link_training)[0];

        return array_map('unlink', glob(FCPATH."uploads/trainings/$filename.*"));

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getBylink($link)
    {
        return $this->db->get_where($this->_table,['link_training'=>$link])->row();
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
        return $this->db->get_where($this->_table,['id_training'=>$id])->row();
    }


    public function simpan()
    {
        
        $link_training = url_title($this->input->post('nama_training'), 'dash', TRUE);

        $data = array(
            'nama_training' => $this->input->post('nama_training'),
            'gambar_training'=>$this->_uploadGambar($link_training),
            'deskripsi_training' => $this->input->post('deskripsi_training'),
            'link_training' => $link_training
        );
        
        return $this->db->insert($this->_table, $data);

        // return $data;
    }

    public function update()
    {
        // $post = $this->input->post();
        // $link_training = url_title($this->input->post('nama_training'), 'dash', TRUE);
        // $this->id_training= $post["id_training"];
        // $this->nama_training=$post["nama_training"];
        // $this->link_training=url_title($post["nama_training"], 'dash', TRUE);
        $link_training = url_title($this->input->post('nama_training'), 'dash', TRUE);

        if (!empty($_FILES["gambar_training"]["name"])) {
            $gambar = $this->gambar_training = $this->_uploadGambar($link_training);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_training= $post["deskripsi_training"];
        
        $id =$this->input->post('id_training');

        $data = array(
            'nama_training' => $this->input->post('nama_training'),
            'gambar_training'=>$gambar,
            'deskripsi_training' => $this->input->post('deskripsi_training'),
            'link_training' => $link_training
        );
        


        $this->db->update($this->_table,$data, array('id_training'=>$id));

    }

    

    public function hapus($id)
    {
        $this->_hapusGambar($id);
        $this->db->where('id_training', $id);
        $this->db->delete($this->_table);
    }
}
