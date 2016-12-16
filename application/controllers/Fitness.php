<?php
/**
 * Created by PhpStorm.
 * User: mousse
 * Date: 2016/12/2
 * Time: 下午4:35
 */
defined ( 'BASEPATH' ) OR exit( 'No direct script access allowed' );
class Fitness extends CI_Controller
{
	public function __construct ()
	{
		parent::__construct ();
		$this->load->model('fitness_access_log');
		$this->fitness_access_log->add_log(['host'=>$this->getIp()]);
	}
	
	public function _remap ( $method , $params = [] )
	{
		if ( method_exists ( $this , $method ) ) {
			return call_user_func_array ( [ $this , $method ] , $params );
		} else {
			$this->index ();
		}
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index ()
	{
		$this->load->view ( 'fitness/index' );
	}
}