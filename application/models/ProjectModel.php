<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectModel extends CI_Model
{
    public $_table ="projects";
    public $id_kategori_project;
    public $nama_project;
    public $gambar_project;
    public $deskripsi_project;
    public $link_project;


    public $_table2 ="kategori_projects";



    private function _uploadGambar($link_project)
    {
        $tujuan ="./uploads/projects/";
        $config['upload_path']          = $tujuan;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            =$link_project;
        $config['overwrite']        = true;

        // $handle = ($_FILES["gambar"]["tmp_name"]);
        // $config['file_name']        = $config['full_path'];
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_project')) {
            # code...
            return $nama = $tujuan.$this->upload->data('file_name');
            // $lokasi = "/uploads/news/".$nama;
        }

        return "no-image.png";

    }

    private function _hapusGambar($id)
    {
        $project = $this->getById($id);
        $filename = explode(".",$project->link_project)[0];

        return array_map('unlink', glob(FCPATH."uploads/projects/$filename.*"));

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
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

    public function getById($id)
    {
        return $this->db->get_where($this->_table,['id_project'=>$id])->row();
    }


    public function simpan()
    {
        
        $link_project = url_title($this->input->post('nama_project'), 'dash', TRUE);

        $data = array(
            'nama_project' => $this->input->post('nama_project'),
            'id_kategori_project' => $this->input->post('id_kategori_project'),
            'gambar_project'=>$this->_uploadGambar($link_project),
            'deskripsi_project' => $this->input->post('deskripsi_project'),
            'link_project' => $link_project
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
        $link_project = url_title($this->input->post('nama_project'), 'dash', TRUE);

        if (!empty($_FILES["gambar_project"]["name"])) {
            $gambar = $this->gambar_project = $this->_uploadGambar($link_project);
        } else {
            $gambar = $this->input->post('gambar_lama');
        }
        // $this->deskripsi_project= $post["deskripsi_project"];
        
        $id =$this->input->post('id_project');

        $data = array(
            'nama_project' => $this->input->post('nama_project'),
            'id_kategori_project' => $this->input->post('id_kategori_project'),
            'gambar_project'=>$gambar,
            'deskripsi_project' => $this->input->post('deskripsi_project'),
            'link_project' => $link_project
        );
        


        $this->db->update($this->_table,$data, array('id_project'=>$id));

    }

    

    public function hapus($id)
    {
        $this->_hapusGambar($id);
        $this->db->where('id_project', $id);
        $this->db->delete($this->_table);
    }
}
