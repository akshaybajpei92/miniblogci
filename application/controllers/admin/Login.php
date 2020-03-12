<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		if (isset($_SESSION['user_id'])) {
			redirect("admin/dashboard");
		}

		$data=[];
		if (isset($_SESSION['error'])) {
			# code...
			//die($_SESSION['error']);

			$data['error']=$_SESSION['error'];
		}else{
			$data['error']="NO_ERROR";
		}

		//$this->load->helper('url');
		$this->load->view('adminpanel/loginview',$data);
	}

	function login_post(){
		//print_r($_POST);



		if (isset($_POST)) {
				$email=$_POST['email'];
				$password=$_POST['password'];

				$query = $this->db->query("SELECT * FROM `backenduser` WHERE `username`='$email' AND password='$password'");

				if ($query->num_rows()) {
					//Credentials are valid

					$result = $query->result_array();
					//	echo "<pre>";
					//print_r($result); die();

					$this->session->set_userdata('user_id', $result[0]['uid']);

					redirect('admin/dashboard');
				}
				else{
					//invalid credentials
					$this->session->set_flashdata('error', 'Invalid Credentials');
					redirect("admin/login");
				}

		}else{
			die("Invalid Input!");
		}
	}


	function logout(){
		session_destroy();

		redirect('admin/login');
	}
}
