<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Student_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Student_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get($id)
  {
    $this->db->select("*");
    $this->db->from("students");
    $this->db->where("id", $id);
    $this->db->where("is_work", 1);

    $query = $this->db->get();


    if ( $query->num_rows() > 0){
      return $query->row_array();
    }else{
      return array();
    }
  }

  public function get_by_school_id($school_id)
  {
    $this->db->select("*");
    $this->db->from("students");
    $this->db->where("school_id", $school_id);
    $this->db->where("is_work", 1);

    $query = $this->db->get();

    if ( $query->num_rows() > 0){
      return $query->row_array();
    }else{
      return array();
    }
  }

  public function get_by_class_name($class_name)
  {
    $this->db->select("*");
    $this->db->from("students");
    $this->db->where("class_name", $class_name);
    $this->db->where("is_work", 1);

    $query = $this->db->get();


    if ( $query->num_rows() > 0){
      //return $query->result();
      return $query->result_array();
    }else{
      return array();
    }
  }

  public function update($id, $data){
    //$this->db->from('students');
    $this->db->where('id', $id);

    $ret = $this->db->update('students', $data);
    return $ret;
  }




  // ------------------------------------------------------------------------

}

/* End of file Student_model.php */
/* Location: ./application/models/Student_model.php */