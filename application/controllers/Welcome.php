<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 public function __construct() {
            parent::__construct();
			//$this->check_isvalidated();
			$this->load->helper('url');
			$this->load->model('Items_model'); // load model
        
			
        }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function add_items()
	{
			$itname     = $this->input->post("itname") ;
			$qty     = $this->input->post("qty") ;
			$status     = $this->input->post("status") ;
			$dates     = $this->input->post("dates") ;
			$this->Items_model->add_items($itname,$qty,$status,$dates);
		
	}
	public function update()
	{
			$itname     = $this->input->post("itname") ;
			$qty     = $this->input->post("qty") ;
			$status     = $this->input->post("status") ;
			$dates     = $this->input->post("dates") ;
			$id     = $this->input->post("id") ;
			$this->Items_model->update($itname,$qty,$status,$dates,$id);
		
	}
	public function deleteitem()
	{
			
			$id     = $this->input->post("id") ;
			$this->Items_model->deleteitem($id);
		
	}
	

	
	
	
	
}
