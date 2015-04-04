<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*默认前台控制器*/

class AppCountry extends CI_Controller{
	/*  默认首页显示方法*/
	public function index(){
		$this->load->view('apply/country/usa');
	}
	/**
	 * 构造函数
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model ( 'appcountry_model', 'app' );
		
	}
	
	/**
	 * 多国留学总控函数
	 */
	public function appKcountry(){ 
		$country = $this->uri->segment(4);
		$data ['applytip'] = $this->app->appCountryList ($country);
		if(empty($data['applytip']))
			error('数据缺失，请联系管理员！');
		$this->load->view ( 'apply/country/'.$country, $data );
	}
}