<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {

	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');
		if($this->session->userdata('level') <> 'admin')
		{
			redirect('backend/login');
		}
	}

	protected $table = 'education'; 

	function index()
	{
		$module = $this->table;
		$data['route'] = $this->table;
		$data[$module] = $this->Resource->show($this->table)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/index',$data);
		$this->load->view('backend/template/footer');
	}
	function create()
	{
		$module = $this->table;
		$data['route'] = $this->table;
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/create', $data);
		$this->load->view('backend/template/footer');
	}
	function store()
	{
		$module = $this->table;
		$date = $this->input->post('date');
		$school = $this->input->post('school');
		$content = $this->input->post('content');
		$data= array(
			'date' =>$date,
			'school' =>$school,
			'content' =>$content

		);
		$this->Resource->store($data,$this->table);
		redirect('backend/'.$module.'/index');
	}
	function edit($id){
		$module = $this->table;
        $data['route'] = $this->table; 
		$where = array('id' => $id);
	    $data[$module] = $this->Resource->edit($where,$this->table)->result();
	    $this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/edit',$data);
		$this->load->view('backend/template/footer');
	}
	function update(){
		$module = $this->table;

		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$school = $this->input->post('school');
		$content = $this->input->post('content');
		$data= array(
			'date' =>$date,
			'school' =>$school,
			'content' =>$content

		);
		$where = array(
			'id' => $id
			);

		$this->Resource->update($where,$data,$this->table);
		redirect('backend/'.$module.'/index');

	}

	function destroy ($id){ 
		$module = $this->table;

        $where = array('id' => $id); 
        $this->Resource->destroy($where,$this->table);

        redirect('backend/'.$module.'/index'); 
    }
	
	

}