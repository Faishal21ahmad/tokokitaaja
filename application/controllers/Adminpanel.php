<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/form_login');
        $data['userName'] = $this->session->userdata('userName');
    }
    public function dashboard()
    {
        $data['userName'] = $this->session->userdata('userName');
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->template->load('layout_admin', 'admin/dashboard', $data);
    }
}
