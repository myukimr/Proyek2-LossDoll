<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('User/dashboard/index');
    }

}

/* End of file Controllername.php */
