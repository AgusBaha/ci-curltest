<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restdata extends CI_Controller
{

	var $api = "";
	function __construct()
	{
		parent::__construct();
		$this->api = "https://reqres.in/api";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Restpons data";
		$data['users'] = json_decode($this->curl->simple_get($this->api . '/users'))->data;
		// print_r($data['users']);
		$this->load->view('_partials/header', $data);
		$this->load->view("admin/index", $data);
		$this->load->view('_partials/footer');
	}

	public function create()
	{
		$data['title'] = "Respons Data";
		$this->load->view('_partials/header', $data);
		$this->load->view("admin/create", $data);
		$this->load->view('_partials/footer');
	}

	public function store()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'job' => $this->input->post('job'),
		);
		$insert = $this->curl->simple_post($this->api . '/users/', $data, array(CURLOPT_BUFFERSIZE => 10));
		if ($insert) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success!</strong> data added successfully.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		} else {
			$this->session->set_flashdata('message', 'div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Failed!</strong> data failed to add.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		}
		redirect('data-admin/restdata/create');
	}

	public function delete($id)
	{
		$delete = $this->curl->simple_delete($this->api . '/users/' . $id, array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
		if ($delete) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil di hapus</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">data gagal di hapus</div>');
		}
		redirect('data-admin/restdata');
	}

	public function update($id)
	{
		$data['users'] = json_decode($this->curl->simple_get($this->api . '/users/' . $id))->data;
		$data['title'] = "respons update";
		$this->load->view('_partials/header', $data);
		$this->load->view("admin/update", $data);
		$this->load->view('_partials/footer');
	}

	public function update_store()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'first_name' => $this->input->post('first_name'),
		);

		$update = $this->curl->simple_put($this->api . '/users/' . $this->input->post('id'), $data, array(CURLOPT_BUFFERSIZE => 10));
		if ($update) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success!</strong> data updated successfully.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');;
		} else {
			$this->session->set_flashdata('message', 'div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Failed!</strong> 
			data failed to update.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>');
		}
		redirect('data-admin/restdata');
	}
}
