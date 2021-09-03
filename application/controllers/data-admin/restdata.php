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
		$this->load->view("admin/index", $data);
	}

	public function create()
	{
		$this->load->view('admin/create');
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
}
