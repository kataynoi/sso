<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ita_ebit_items extends CI_Controller
{
    public $user_id;

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata("user_type") != 1)
            redirect(site_url("user/login"));
        $this->layout->setLeft("layout/left_admin");
        $this->layout->setLayout("admin_layout");
        $this->load->model('Admin_ita_ebit_items_model', 'crud');
    }

    public function index()
    {
        $data[] = '';
        $data["ita_ebit"] = $this->crud->get_ita_ebit();
        $this->layout->view('Admin_ita_ebit_items/index', $data);
    }


    function fetch_Admin_ita_ebit_items()
    {
        $fetch_data = $this->crud->make_datatables();
        $data = array();
        foreach ($fetch_data as $row) {
            if($row->file !=0){$file="<a href='".base_url('assets/uploads/'.$row->file)."' target='_blank'><i class='fa fa-file'></i></a>";}else{$file='';};

            $sub_array = array();
            $sub_array[] = $row->id;
            $sub_array[] = $row->name;
            $sub_array[] = $row->ita_ebit;
            $sub_array[] = $row->n_year;
            $sub_array[] = $row->link;
            $sub_array[] = $file;
            $sub_array[] = '<div class="btn-group pull-right" role="group" >
                <button class="btn btn-outline btn-success" data-btn="btn_view" data-id="' . $row->id . '"><i class="fa fa-eye"></i></button>
                <button class="btn btn-outline btn-warning" data-btn="btn_edit" data-id="' . $row->id . '"><i class="fa fa-edit"></i></button>
                <button class="btn btn-outline btn-danger" data-btn="btn_del" data-id="' . $row->id . '"><i class="fa fa-trash"></i></button></div>';
            $data[] = $sub_array;
        }
        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->crud->get_all_data(),
            "recordsFiltered" => $this->crud->get_filtered_data(),
            "data" => $data
        );
        echo json_encode($output);
    }

    public function del_Admin_ita_ebit_items()
    {
        $id = $this->input->post('id');

        $rs = $this->crud->del_Admin_ita_ebit_items($id);
        if ($rs) {
            $json = '{"success": true}';
        } else {
            $json = '{"success": false}';
        }

        render_json($json);
    }

    public function  save_Admin_ita_ebit_items()
    {
        $data = $this->input->post('items');

        if ($data['action'] == 'insert') {
            $rs = $this->crud->save_Admin_ita_ebit_items($data);
            if ($rs) {
                $json = '{"success": true,"id":' . $rs . '}';
            } else {
                $json = '{"success": false}';
            }
        } else if ($data['action'] == 'update') {
            $rs = $this->crud->update_Admin_ita_ebit_items($data);
            if ($rs) {
                $json = '{"success": true}';
            } else {
                $json = '{"success": false}';
            }
        }

        render_json($json);
    }

    public function  get_Admin_ita_ebit_items()
    {
        $id = $this->input->post('id');
        $rs = $this->crud->get_Admin_ita_ebit_items($id);
        $rows = json_encode($rs);
        $json = '{"success": true, "rows": ' . $rows . '}';
        render_json($json);
    }
}