<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EassyTipList extends CI_Controller{
	
	public function index(){
		
		//加载视图
		$this->load->view('eassy/eassyTipList');
	}
	
	
}