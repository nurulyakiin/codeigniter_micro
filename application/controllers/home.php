<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Home extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
        $this->load->helper('url');
        if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
			$data['email'] = $session['email'];
			$data['active'] = $session['active'];
            $this->load->view('v_home',$data);
        }else{
            redirect('login','refresh');   
        }
    }
}