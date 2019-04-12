<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingController extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('settingmodel');
        
        
        
    }


	public function index()
	{
        $data['setting'] = $this->db->get('setting')->row();
		$this->load->view('admin/setting',$data);
    }
    
    public function update()
    {
        $this->settingmodel->update();

        redirect('dashboard/setting');
    }
}
