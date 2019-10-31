<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("agent_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["agent"] = $this->agent_model->getAll();
        $this->load->view("admin/agent/list", $data);
    }

    public function add()
    {
        $agent = $this->agent_model;
        $validation = $this->form_validation;
        $validation->set_rules($agent->rules());

        if ($validation->run()) {
            $agent->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/agent/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/agent');
       
        $agent = $this->agent_model;
        $validation = $this->form_validation;
        $validation->set_rules($agent->rules());

        if ($validation->run()) {
            $agent->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["agent"] = $agent->getById($id);
        if (!$data["agent"]) show_404();
        
        $this->load->view("admin/agent/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->agent_model->delete($id)) {
            redirect(site_url('admin/agent'));
        }
    }
}