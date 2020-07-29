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

  public function do_login(){
   
    require FCPATH . 'assets/lib/openid.php';

    try {
      $openid = new LightOpenID( base_url() );
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$openid->mode) {
        $openid->identity = 'https://openid.ntpc.edu.tw/';
        $openid->required = array(
          'namePerson/friendly',
          'contact/email',
          'namePerson',
          'person/gender',
          'contact/country/home',
          'pref/language',
          'pref/timezone'
        );
        header('Location: ' . $openid->authUrl());
      }
    } catch (ErrorException $e) {
      echo $e->getMessage();
    }

    
  }


}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */