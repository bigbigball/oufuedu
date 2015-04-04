<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*默认前台控制器*/

class AppEvaluation extends CI_Controller{
	/*  默认首页显示方法*/
	public function index(){
		$this->load->view('apply/applyEvaluation');
	}
	
	/**
	 * 构造函数
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model ( 'appevaluate_model', 'eva' );
	}
	
	// 添加留学评估资料
	public function addAppEvaluation() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'appevaluation' );
	
		if ($status) {
			// 操作model层
			$data = array (
					'outcountry' => $this->input->post ( 'outcountry' ),
					'outmajor' => $this->input->post ( 'outmajor' ),
					'altcountry' => $this->input->post ( 'altcountry' ),
					'outtime' => strtotime($this->input->post ( 'outtime' )),
					'outdegree' => $this->input->post ( 'outdegree' ),
					
					'incollege' => $this->input->post ( 'incollege' ),
					'inmajor' => $this->input->post ( 'inmajor' ),
					'ctype' => $this->input->post ( 'ctype' ),
					'gpa' => $this->input->post ( 'gpa' ),
					'egpa' => $this->input->post ( 'egpa' ),
					
					'username' => $this->input->post ( 'username' ),
					'gender' => $this->input->post ( 'gender' ),
					'maxdegree' => $this->input->post ( 'maxdegree' ),
					'email' => $this->input->post ( 'email' ),
					'mobile' => $this->input->post ( 'mobile' ),
					
					'ctime'=>time(),
			);
			
			$x=$this->eva->addAppEvaluation ( $data );
			
			success ( '/apply/appEvaluation', '留学资料添加成功！' );
			
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( '/apply/appEvaluation', $data);
		}
	}
}