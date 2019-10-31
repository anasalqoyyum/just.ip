<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model
{
    private $_table = "agent";

    public $id_agent;
    public $nama;
    public $nohp;
    public $alamat;
    public $kota;
    public $email;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'kota',
            'label' => 'Kota',
            'rules' => 'required'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_agent" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_agent = uniqid();
        $this->nama = $post["nama"];
        $this->nohp = $post["nohp"];
        $this->alamat = $post["alamat"];
        $this->kota = $post["kota"];
        $this->email = $post["email"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_agent = $post["id"];
        $this->nama = $post["nama"];
        $this->nohp = $post["nohp"];
        $this->alamat = $post["alamat"];
        $this->kota = $post["kota"];
        $this->email = $post["email"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('id_agent' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_agent" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/agent/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_agent;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $agent = $this->getById($id);
        if ($agent->image != "default.jpg") {
            $filename = explode(".", $agent->image)[0];
            return array_map('unlink', glob(FCPATH."upload/agent/$filename.*"));
        }
    }

    public function detail($id_agent)
    {
        $result = $this->db->where('id_agent',$id_agent)->get('agent');
        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }
}