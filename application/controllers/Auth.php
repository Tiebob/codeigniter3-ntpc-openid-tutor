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

  public function test()
  {
    $this->load->helper('util');

    echobr( '測試Helper 功能' );
    echo '結束';
  }

  public function login()
  {    
    $data['header_title'] = '新北市OpenID登入';

    $this->load->view('tpl/header', $data);
    $this->load->view('tpl/menu', $data);
    $this->load->view('auth/login', $data);
    $this->load->view('tpl/footer', $data);
  }

  public function do_login()
  {
    $username = $this->input->post("username");
    $pass = $this->input->post("pass");

    //臨時認證
    if( $username == 'aaaaa' and $pass == '11111'){
      $this->session->username = $username;
      $this->session->is_logined = true;
      redirect('student/index');
    }else{
      echo "抱歉，帳號密碼不相符，請確認後重新登入<br />";
      echo "<a href='/auth/login'> 重新登入</a> ";
    }
  }

  public function do_ntpc_login(){
   
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

    if ($openid->mode && $openid->validate()) {

      $attr = $openid->getAttributes();
				$tmp = explode('/', $openid->identity);
				$account = end($tmp);
			
				$cname = $attr['namePerson'];
				$email = $attr['contact/email'];

				//$allowed_school_id = '014613';
				$allowed_school_ids = ['014613', '014569'];
				// JSON 
				foreach (json_decode($attr['pref/timezone']) as $item) {
					foreach($allowed_school_ids as $allowed_school_id){
						if( $item->id == $allowed_school_id ){
							$school_id = $item->id;
							$role = $item->role;
							$title = $item->title;
							$groups = $item->groups;
							$groups_string = implode($item->groups);
							if( $item->title == '導師'){
								$is_allowed = true;
							}				
						}
					}
        }
        
        //測試是否 openid 資料是否取得
        /* echo $account . '<br />';
        echo $cname . '<br />';
        echo $email . '<br />';
        echo $school_id . '<br />';
        echo $role . '<br />';
        echo $title . '<br />';
        print_r( $groups ) . '<br />'; */

        $this->session->cname = $cname;
        $this->session->account = $account;
        $this->session->is_logined = true;
        header('Location:' . base_url('student') );
    }else{
      //header('Location:' . base_url('auth/login'));
    }
  }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */