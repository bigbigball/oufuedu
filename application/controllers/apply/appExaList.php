<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppExaList extends CI_Controller{
	
    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct ();
        $this->load->model ( 'appexa_model', 'appexa' );
    }
    
	//添加控制
	public function index(){
		
	    $data ['applyexa'] = $this->appexa->appExaList ();
	    //p($data);die;
		$this->load->view('apply/applyExaList', $data);
	}
	
	
}