<?php
/**
 * Created by PhpStorm.
 * User: mousse
 * Date: 2016/12/19
 * Time: 下午2:52
 */
class Fitness_contact extends CI_Model {
	
	private $table;
	
	public function __construct ()
	{
		parent::__construct ();
		$this->table = 'contact';
	}
	
	// 新增日志记录
	public function add_contact($data){
		if(empty($data)){
			return false;
		}
		$data['ctime'] = date('Y-m-d H:i:s');
		$data['utime'] = $data['ctime'];
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
}