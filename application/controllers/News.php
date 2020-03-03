<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{
    public $user_id;

    public function __construct()
    {
        parent::__construct();


        $this->load->model('News_model', 'crud');
    }

    public function index()
    {
        $data[] = '';
        $data["users"] = $this->crud->get_users();
        $data["news_category"] = $this->crud->get_news_category();
        $this->layout->view('news/index', $data);
    }

    function fetch_news()
    {
        $fetch_data = $this->crud->make_datatables();
        $data = array();
        foreach ($fetch_data as $row) {
            $sub_array = array();
            $sub_array[] = to_thai_date_short($row->date_sent);
            //$sub_array[] = $row->id;
            $sub_array[] = $row->topic;
            $sub_array[] = $row->user_id;
            $sub_array[] = $row->read;
            //$sub_array[] = $row->file;
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

    public function del_news()
    {
        $id = $this->input->post('id');

        $rs = $this->crud->del_news($id);
        if ($rs) {
            $json = '{"success": true}';
        } else {
            $json = '{"success": false}';
        }

        render_json($json);
    }

    public function  save_news()
    {
        $data = $this->input->post('items');
        if ($data['action'] == 'insert') {
            $rs = $this->crud->save_news($data);
            if ($rs) {
                $json = '{"success": true,"id":' . $rs . '}';
            } else {
                $json = '{"success": false}';
            }
        } else if ($data['action'] == 'update') {
            $rs = $this->crud->update_news($data);
            if ($rs) {
                $json = '{"success": true}';
            } else {
                $json = '{"success": false}';
            }
        }

        render_json($json);
    }

    public function  get_news()
    {
        $id = $this->input->post('id');
        $rs = $this->crud->get_news($id);
        $rows = json_encode($rs);
        $json = '{"success": true, "rows": ' . $rows . '}';
        render_json($json);
    }
}