<?php
/**
 * Created by PhpStorm.
 * User: mousse
 * Date: 2016/12/16
 * Time: 下午2:31
 */
class Fitness_access_log extends CI_Model {
	
	private $table;
	
	public function __construct ()
	{
		parent::__construct ();
		$this->table = 'access_log';
	}
	
	// 获取日志列表
	public function getLogList($condition = [],$field = '*',$limit = 0, $offset = 10){
		return $this->db->select($field)->get_where($this->table,$condition,$limit,$offset)->result_array();
	}
	
	// 新增日志记录
	public function add_log($data){
		if(empty($data) || $data['host'] == '::1' || $data['host'] == '127.0.0.1' || $data['host'] == 'localhost'){
			return false;
		}
		$data['ctime'] = date('Y-m-d H:i:s');
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
}