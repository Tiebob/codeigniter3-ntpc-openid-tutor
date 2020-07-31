<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Helpers Util_helper
 *
 * This Helpers for ...
 * 
 * @package   CodeIgniter
 * @category  Helpers
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 *
 */

// ------------------------------------------------------------------------

if (!function_exists('echobr')) {
  /**
   * Test
   *
   * This test helpers
   *
   * @param   ...
   * @return  ...
   */
function echobr($str)
{
  echo $str . '<br />';
}
}

if (!function_exists('d')) {
  /**
   * d
   *
   * This d helpers
   *
   * @param   ...
   * @return  ...
   */
  function d($obj){
    echo '<pre>';
    var_dump($obj);
    echo '</pre>';
  }
}

if (!function_exists('dd')) {
  /**
   * dd
   *
   * This dd helpers
   *
   * @param   ...
   * @return  ...
   */
  function dd($obj){
    echo '<pre>';
    var_dump($obj);
    echo '</pre>';
    die();
  }
}
// ------------------------------------------------------------------------

/* End of file Util_helper.php */
/* Location: ./application/helpers/Util_helper.php */