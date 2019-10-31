<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("agent_model");
	}

	public function index()
	{
		// load view admin/overview.php
        $data["agent"] = $this->agent_model->getAll();
        $this->load->view("result", $data);
	}

	public function detail($id_agent)
	{
		$data["agent"] = $this->agent_model->detail($id_agent);
		$this->load->view("detail",$data);
	}
}