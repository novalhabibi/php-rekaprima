<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        
        $this->load->helper('cookie');
        // $this->load->model('');
    }

    public function login()
    {
        if ($this->session->has_userdata('logged_in') == TRUE) {
            redirect('dashboard');
        }
        $this->load->view('admin/login');
    }

    public function ceklogin()
    {
        $username_admin = $_POST["username"];
        $password_admin = md5($_POST["password"]);
        $data = array(
            'username_admin' =>$username_admin,
            'password_admin' =>$password_admin
                     );
        $data['admin']=$this->db->get_where('admins',$data)->row();

        $cek = count($data['admin']);
        if ($cek == 1 ) {
             $id_admin = $data['admin']->id_admin;
             "<br>";
             $username_admin = $data['admin']->username_admin;
             $nama_admin = $data['admin']->nama_admin;
             
            $admin = array(
                    'id_admin'  => $id_admin,
                    'username_admin'  => $username_admin,
                    'nama_admin'  => $nama_admin,
                    'logged_in' => TRUE
            );

            $this->session->set_userdata($admin);
            $this->session->set_flashdata('success','Berhasil login');
            
            redirect('dashboard');
        }else{
            $this->session->set_flashdata('error','Gagal login');
            
            redirect('auth/login');
            
        }


    }


    public function get()
    {
       echo $this->session->userdata('username_admin');
       echo "<br>";
       echo $this->session->userdata('logged_in');
    }

    public function logout()
    {
        // $this->session->unset_userdata('username_admin');
        session_destroy();
        $this->session->set_flashdata('success','Anda telah logout');
            
            redirect('auth/login');

    }
}
