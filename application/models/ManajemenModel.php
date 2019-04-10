<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManajemenModel extends CI_Model
{
    public $_table ="manajemen";
    
    
    public $nama_manajemen;
    public $posisi_manajemen;
    public $gambar_manajemen;
    public $profile_manajemen;
    




    private function _uploadGambar($nama_manajemen)
    {
        $tujuan ="./uploads/manajemens/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            =$nama_manajemen;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_manajemen')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/manajemen/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $manajemen = $this->getById($id);
        $filename = explode(".",url_title($manajemen->nama_manajemen, 'dash', TRUE))[0];

        return array_map('unlink', glob(FCPATH."uploads/manajemens/$filename.*"));

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAllJoin()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        // $this->db->join($this->_table2,"$this->_table2.id_admin=$this->_table.id_admin");

        return $query = $this->db->get()->result();
        // $query->result();
        // return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_manajemen'=>$id])->row();
    }


    public function simpan()
    {
        
        $nama_manajemen = url_title($this->input->post('nama_manajemen'), 'dash', TRUE);

        $data = array(
            'nama_manajemen' => $this->input->post('nama_manajemen'),
            'gambar_manajemen'=>$this->_uploadGambar($nama_manajemen),
            'posisi_manajemen' => $this->input->post('posisi_manajemen'),
            'profile_manajemen' => $this->input->post('profile_manajemen')
            
        );
        
        return $this->db->insert($this->_table, $data);

        // return $data;
    }

    public function update()
    {

        $nama_manajemen = url_title($this->input->post('judul'), 'dash', TRUE);

        if (!empty($_FILES["gambar_manajemen"]["name"])) {
            $gambar = $this->gambar_manajemen = $this->_uploadGambar($nama_manajemen);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_manajemen= $post["deskripsi_manajemen"];
        
        $id =$this->input->post('id_manajemen');

        $data = array(
            'nama_manajemen' => $this->input->post('nama_manajemen'),
            'gambar_manajemen'=>$gambar,
            'posisi_manajemen' => $this->input->post('posisi_manajemen'),
            'profile_manajemen' => $this->input->post('profile_manajemen')
        );
        


        $this->db->update($this->_table,$data, array('id_manajemen'=>$id));

    }

    

    public function hapus($id)
    {
        $this->_hapusGambar($id);
        $this->db->where('id_manajemen', $id);
        $this->db->delete($this->_table);
    }
}
