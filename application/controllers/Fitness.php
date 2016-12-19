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
	
	/**
	 * Index Page for this controller.
	 */
	public function index ()
	{
		$this->load->view ( 'fitness/index' );
	}
	
	/**
	 *  保存意见
	 */
	public function contact(){
		$_return = new stdClass();
		$_return->return = false;
		$_return->flag = -1;
		$_return->message = '请求失败';
		$_return->data = [];
		$this->load->model('fitness_contact');
		$data = $this->input->post();
		$result = $this->fitness_contact->add_contact($data);
		if($result){
			$_return->return = true;
			$_return->flag = 1;
			$_return->message = '请求成功';
		}
		parent::output_json($_return);
	}
}