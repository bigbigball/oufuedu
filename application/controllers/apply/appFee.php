<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*默认前台控制器*/

class AppFee extends CI_Controller{
	/*  默认首页显示方法*/
	public function index(){
		//echo 'hello';
		//echo base_url();
		$this->load->view('apply/applyFee');
	}
}