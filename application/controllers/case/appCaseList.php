<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppCaseList extends CI_Controller{
	
    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct ();
        $this->load->model ( 'appcase_model', 'case' );
    }
    
	//添加控制
	public function index(){
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 12;
	     
	    //配置项设置
	    $config['base_url'] = site_url('case/caseAcademyList/index');
	    $config['total_rows'] = $this->db->count_all_results('applycase');
	    $config['per_page'] = $perPage;
	    $config['uri_segment'] = 4;
	    $config['first_link'] = '首页';
	    $config['prev_link'] = '上一页';
	    $config['next_link'] = '下一页';
	    $config['last_link'] = '尾页';
	     
	    $this->pagination->initialize($config);
	     
	    $data['links'] = $this->pagination->create_links();
	    //p($data);die;
	    $offset = $this->uri->segment(4);
	    $this->db->limit($perPage, $offset);
	   
	    $data ['case'] = $this->case->appCaseList ();
		$this->load->view('case/appCaseList', $data);
	}
	
	//显示申请案例具体内容
	public function appCaseContent(){
		$cid = $this->uri->segment(4);
		$data ['case'] = $this->case->checkAppCaseById ($cid);
		if(empty($data['case']))
			error('数据缺失，请联系管理员！');
		$this->load->view ( 'case/appCaseContent', $data );
	}
	
	
}