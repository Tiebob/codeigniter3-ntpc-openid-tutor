<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Studnet
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Studnet extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('tpl/header');
		$this->load->view('tpl/menu');
    $this->load->view('student/index');
    $this->load->view('tpl/footer');
    
  }

  public function lists(){
    echo "LIST ALL STUDENTS";
  }

}


/* End of file Studnet.php */
/* Location: ./application/controllers/Studnet.php */