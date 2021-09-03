<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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

	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('_partials/auth/header', $data);
		$this->load->view('auth/login');
		$this->load->view('_partials/auth/footer');
	}

	public function Login()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);
		$response = $this->curl->simple_post($this->api . '/login', $data, array(CURLOPT_BUFFERSIZE => 10));
		$hasil = json_decode($response, true);
		if ($hasil['token']) {
			$this->session->set_userdata('message', $hasil['token']);
			redirect('data-admin/restdata');
		} else {
			// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"></div>');
			// redirect('/Auth/Auth/index');
			$this->session->set_flashdata('error', 'Email atau password salah');
		}
		redirect('/Auth/Auth/index');
	}

	public function regis()
	{
		$data['title'] = "Registrasi";
		$this->load->view('_partials/auth/header', $data);
		$this->load->view('auth/regist');
		$this->load->view('_partials/auth/footer');
	}

	public function Register()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$response = $this->curl->simple_post($this->api . '/register', $data, array(CURLOPT_BUFFERSIZE => 10));
		$hasil = json_decode($response, true);
		if ($hasil['token'] != null) {
			redirect('data-admin/restdata');
			$this->session->set_userdata('token', $hasil['token']);
		} else {
			$this->session->set_flashdata('error', 'Email sudah terdaftar');
		}
		redirect('/Auth/Auth/regis');
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('/Auth/Auth/index');
	}
}
