<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GambarModel extends CI_Model
{
    public $_table ="gambar";
    public $id_project;
    public $gambar;
    public $deskripsi_gambar;


    public $_table2 ="kategori_projects";



    private function _uploadGambar($id_project)
    {
        $tujuan ="./uploads/projects/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['file_name']            =$id_project;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/news/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $project = $this->getById($id);
        $filename = explode(".",$project->id_project)[0];

        return array_map('unlink', glob(FCPATH."uploads/projects/$filename.*"));

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_project)
    {
        return $this->db->get_where($this->_table,['id_project'=>$id_project])->result();
    }

    public function getAllJoin()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join($this->_table2, 'projects.id_kategori_project=kategori_projects.id_kategori_project');
        return $query = $this->db->get()->result();
        // $query->result();
        // return $this->db->get($this->_table)->result();
    }


    public function simpan()
    {
        
        $id_project = $this->input->post('id_project');

        $data = array(
            'id_project' => $this->input->post('id_project'),
            'gambar'=>$this->_uploadGambar($id_project),
            'deskripsi_gambar' => $this->input->post('deskripsi_gambar')
        );
        
        return $this->db->insert($this->_table, $data);

        // return $data;
    }

    public function update()
    {
        // $post = $this->input->post();
        // $link_project = url_title($this->input->post('nama_project'), 'dash', TRUE);
        // $this->id_project= $post["id_project"];
        // $this->nama_project=$post["nama_project"];
        // $this->link_project=url_title($post["nama_project"], 'dash', TRUE);
        $id_project =$this->input->post('nama_project');

        if (!empty($_FILES["gambar"]["name"])) {
            $gambar = $this->gambar = $this->_uploadGambar($id_project);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_project= $post["deskripsi_project"];
        
        $id =$this->input->post('id_gambar');

        $data = array(
            'gambar'=>$gambar,
            'deskripsi_gambar' => $this->input->post('deskripsi_gambar')
        );
        


        $this->db->update($this->_table,$data, array('id_gambar'=>$id));

    }

    

    public function hapus($id)
    {
        $this->_hapusGambar($id);
        $this->db->where('id_gambar', $id);
        $this->db->delete($this->_table);
    }
}
