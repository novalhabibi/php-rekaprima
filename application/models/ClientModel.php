<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model
{
    public $_table ="clients";
    
    
    public $nama_client;
    public $icon_client;
    public $link_client;
    




    private function _uploadGambar($slug)
    {
        $tujuan ="./uploads/clients/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            =$slug;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('icon_client')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/clients/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $clients = $this->getById($id);
        $filename = explode(".",$clients->slug)[0];

        return array_map('unlink', glob(FCPATH."uploads/clients/$filename.*"));

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAllJoin()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_table2,"$this->_table2.id_admin=$this->_table.id_admin");

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
        
        $slug = url_title($this->input->post('nama_client'), 'dash', TRUE);

        $data = array(
            'nama_client' => $this->input->post('nama_client'),
            'icon_client'=>$this->_uploadGambar($slug),
            'link_client' => $this->input->post('link_client')
        );
        
        return $this->db->insert($this->_table, $data);

        // return $data;
    }

    public function update()
    {

        $slug = url_title($this->input->post('nama_client'), 'dash', TRUE);

        if (!empty($_FILES["icon_client"]["name"])) {
            $gambar = $this->gambar = $this->_uploadGambar($slug);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_clients= $post["deskripsi_clients"];
        
        $id =$this->input->post('id');

        $data = array(
            'nama_client' => $this->input->post('nama_client'),
            'icon_client'=>$gambar,
            'link_client' => $this->input->post('link_client')
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
