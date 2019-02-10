<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Home_m');
	}

	public function index()
	{

        // echo'<pre>';print_r($participants);echo'</pre>';die();

        $data = [

            ];

		$this->template->setPageTitle('WolfPack Studios')
                        ->setPartial('home_v', $data)
                        ->frontEndTemplate();
	}

    public function FAQ()
    {

        
    }


	



}

/* End of file Home.php */
/* Location: ./application/modules/Home/controllers/Home.php */
