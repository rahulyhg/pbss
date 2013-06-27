<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
	} 
	 
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->model('locations_model');
		$states = json_encode($this->locations_model->get_all_states());
		$counties = json_encode($this->locations_model->get_all_counties());
		$cities = json_encode($this->locations_model->get_all_cities());
		$zip = json_encode($this->locations_model->get_all_zip());
		$data = array();
		$data['states'] = $states;
		$data['counties'] = $counties;
		$data['cities'] = $cities;
		$data['zip'] = $zip;
		$this->load->view('search',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */