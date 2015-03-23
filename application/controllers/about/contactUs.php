<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
	
	/* 默认前台控制器 */
class ContactUs extends CI_Controller {
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'contact_model', 'contact' );
	}
	
	/* 默认首页显示方法 */
	public function index() {
		// echo 'hello';
		// echo base_url();
		$this->load->helper ( 'form' );
		$this->load->view ( 'about/contactUs' );
	}
	
	// 添加 feedback
	public function addFeedback() {
		
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 设置验证
	
		 /* $this->form_validation->set_rules('title', '文章标题不为空', 'required'); 
		 $this->form_validation->set_rules('email', '作者不为空', 'required'); 
		 $this->form_validation->set_rules('mobile', '类型不为空', 'required'); 
		
		 $this->form_validation->set_rules('content', '内容不为空', 'required'); */
		 
		 // 执行验证
		$status = $this->form_validation->run ( 'contact1' ); 
		
		if ($status) {
			// 操作model层
			$data = array (
					'title' => $this->input->post ( 'title' ),
					'email' => $this->input->post ( 'email' ),
					'mobile' => $this->input->post ( 'mobile' ),
					'ctime' => time (),
					'content' => $this->input->post ( 'content' ) 
			);
			
		
			$this->contact->addFeedback ( $data );
			success ( '/about/contactUs', '留学资讯添加成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( '/about/contactUs' );
		}
	}
}