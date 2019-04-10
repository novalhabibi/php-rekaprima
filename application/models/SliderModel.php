<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SliderModel extends CI_Model
{
    public $_table ="slider";
    
    
    public $judul;
    public $gambar;
    public $deskripsi;
    public $tgl_posting;
    public $id_admin;





    private function _uploadGambar($slug)
    {
        $tujuan ="./uploads/sliders/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            =$slug;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/slider/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $slider = $this->getById($id);
        $filename = explode(".",url_title($slider->judul, 'dash', TRUE))[0];

        return array_map('unlink', glob(FCPATH."uploads/sliders/$filename.*"));

        
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
        return $this->db->get_where($this->_table,['id'=>$id])->row();
    }


    public function simpan()
    {
        
        $slug = url_title($this->input->post('judul'), 'dash', TRUE);

        $data = array(
            'judul' => $this->input->post('judul'),
            'gambar'=>$this->_uploadGambar($slug),
            'deskripsi' => $this->input->post('deskripsi'),
            'status' => $this->input->post('status')
            
        );
        
        return $this->db->insert($this->_table, $data);

        // return $data;
    }

    public function update()
    {

        $slug = url_title($this->input->post('judul'), 'dash', TRUE);

        if (!empty($_FILES["gambar"]["name"])) {
            $gambar = $this->gambar = $this->_uploadGambar($slug);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_slider= $post["deskripsi_slider"];
        
        $id =$this->input->post('id');

        $data = array(
            'judul' => $this->input->post('judul'),
            'gambar'=>$gambar,
            'deskripsi' => $this->input->post('deskripsi'),
            'status' => $this->input->post('status')
        );
        


        $this->db->update($this->_table,$data, array('id'=>$id));

    }

    

    public function hapus($id)
    {
        $this->_hapusGambar($id);
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }
}
