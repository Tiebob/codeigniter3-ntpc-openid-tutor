<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Auth
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

class Auth extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {    
    $data['header_title'] = '新北市OpenID登入';

    $this->load->view('tpl/header', $data);
    $this->load->view('tpl/menu', $data);
    $this->load->view('auth/login', $data);
    $this->load->view('tpl/footer', $data);
  }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */