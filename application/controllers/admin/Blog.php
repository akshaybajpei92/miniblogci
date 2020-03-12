<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$query = $this->db->query("SELECT * FROM `articles` ORDER BY blogid DESC");

		$data['result'] = $query->result_array();
		$this->load->view('adminpanel/viewblog',$data);
	}

	function addblog(){
		$this->load->view('adminpanel/addblog');
	}

	function addblog_post(){
		/*print_r($_POST);
		print_r($_FILES);*/

		if ($_FILES) {
			//Image is Passed for Upload
			$config['upload_path']          = './assets/upload/blogimg/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    die("Error");
                    //$this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

/*                    echo "<pre>";
                    print_r($data);
                    echo $data['upload_data']['file_name'];
*/					
                    $fileurl = "assets/upload/blogimg/".$data['upload_data']['file_name'];
                    $blog_title = $_POST['blog_title'];
                    $desc = $_POST['desc'];

                    $query = $this->db->query("INSERT INTO `articles`( `blog_title`, `blog_desc`, `blog_img`) VALUES ('$blog_title','$desc','$fileurl')");

                    if ($query) {
                    	$this->session->set_flashdata('inserted', 'yes');
                    	redirect('admin/blog/addblog');
                    }
                    else{
                    	$this->session->set_flashdata('inserted', 'no');
                    	redirect('admin/blog/addblog');
                    }
                    //$this->load->view('upload_success', $data);
            }
		}else{
			// Image is not passed
		}

	}


	function editblog($blog_id){
		print_r($blog_id);
	}

	function deleteblog($blog_id){
		print_r($blog_id);
	}

}
