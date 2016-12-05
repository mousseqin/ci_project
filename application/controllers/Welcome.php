<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 重映射方法
     *
     * 如果你的控制包含一个 _remap() 方法，那么无论 URI 中包含什么参数时都会调用该方法。
     * 它允许你定义你自己的路由规则，重写默认的使用 URI 中的分段来决定调用哪个方法这种行为。
     */
    public function _remap($method,$params = [])
    {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        } else {
            $this->index();
        }
//        show_404();
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }
}
