<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('default_layout');
        $this->db = $this->load->database('default', true);
        $this->load->model('Basic_model', 'crud');
        $this->load->model('Dashboard_model', 'dash');
    }

    public function index()
    {
       // $data['all_pc'] = $this->db->from('com_survey')->where('computertype',2)->count_all_results();
        //$data['all_nb'] = $this->db->from('com_survey')->where('computertype',3)->count_all_results();
        $data['all_employee'] = $this->db->from('employee')->where('active',1)->count_all_results();
        //$data['all_printer'] = $this->db->from('printer_survey')->count_all_results();
        $boss = $this->crud->get_boss();
        $this->session->set_userdata($boss);
        $data['office'] = $this->crud->get_office();
        $data['ita_ebit'] = $this->dash->get_ita_ebit();
        $this->layout->view('dashboard/index_view', $data);
    }
    public function test(){
        $data[]='';
        $this->layout->view('test/index_view', $data);
    }
}
