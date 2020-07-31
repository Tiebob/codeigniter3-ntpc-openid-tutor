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

class Student extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data["header_title"] = '學生查詢系統';

    $this->load->view('tpl/header');
		$this->load->view('tpl/menu');
    $this->load->view('student/index', $data);
    $this->load->view('tpl/footer');
    
  }

  public function lists(){

    $this->load->model('student_model');

    $grade = $this->input->post('grade');
    $class = $this->input->post('class');
    $class_name = $grade . '0' . $class;

    $data["header_title"] = '學生查詢系統';
    $data['students'] = $this->student_model->get_by_class_name($class_name);

    $this->load->view('tpl/header', $data);
		$this->load->view('tpl/menu', $data);
    $this->load->view('student/lists', $data);
    $this->load->view('tpl/footer', $data);
  }


  public function del($id){
    //$student = $this->student_model->get($id);

    $ret = $this->student_model->update($id);
    if($ret){
      redirect('student/lists');
    }else{
      echobr('刪除記錄發生錯誤，請確認');
    }
  }

  public function update($id){
    $data["header_title"] = '學生查詢系統';

    $data['student'] = $this->student_model->get($id);

    $this->load->view('tpl/header', $data);
		$this->load->view('tpl/menu', $data);
    $this->load->view('student/update', $data);
    $this->load->view('tpl/footer', $data);
  }

  public function do_update()
  {
    $data['id'] = $this->input->post('id');
    $data['school_id'] = $this->input->post('school_id');
    $data['cname'] = $this->input->post('cname');
    $data['class_no'] = $this->input->post('class_no');

    $ret = $this->student_model->update($data['id'], $data);

    if( $ret == true ){
      redirect('student/lists');
    }else{
      echobr('更新記錄發生錯誤，請確認..........');
    }
  }


}


/* End of file Studnet.php */
/* Location: ./application/controllers/Studnet.php */