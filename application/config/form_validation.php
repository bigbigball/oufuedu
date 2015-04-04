<?php

$config = array(
	'applytip' => array(
		array(
		    'field' => 'title',
			'label' => '标题',
			'rules' => 'required|min_length[5]',
	        ),
		array(
			'field' => 'author',
			'label' => '作者',
			'rules' => 'required',
			),
		array(
			'field' => 'type',
			'label' => '类型',
			'rules' => 'required',
			),
		array(
			'field' => 'desc',
			'label' => '摘要',
			'rules' => 'required|max_length[10]',
			),
		array(
			'field' => 'content',
			'label' => '内容',
			'rules' => 'required',
		    ),
    ),
	'eassytip' => array(
		array(
			'field' => 'title',
			'label' => '标题',
			'rules' => 'required|min_length[5]',
		),
		array(
			'field' => 'author',
			'label' => '作者',
			'rules' => 'required',
		),
		array(
			'field' => 'type',
			'label' => '类型',
			'rules' => 'required',
		),
		array(
			'field' => 'desc',
			'label' => '摘要',
			'rules' => 'required|max_length[10]',
		),
		array(
			'field' => 'content',
			'label' => '内容',
			'rules' => 'required',
		),
	),
	'applyexa' => array(
		array(
			'field' => 'title',
			'label' => '标题',
			'rules' => 'required|min_length[5]',
		),
	    array(
			'field' => 'author',
			'label' => '作者',
			'rules' => 'required',
		),
				
	),
		'appevaluation' => array(
				array(
						'field' => 'outcountry',
						'label' => '留学国家',
						'rules' => 'required',
				),
				array(
						'field' => 'outmajor',
						'label' => '留学专业',
						'rules' => 'required',
				),
				array(
						'field' => 'altcountry',
						'label' => '备选国家',
						'rules' => 'required',
				),
				array(
						'field' => 'outtime',
						'label' => '出国时间',
						'rules' => 'required',
				),
				array(
						'field' => 'outdegree',
						'label' => '攻读学位',
						'rules' => 'required',
				),
				
				array(
						'field' => 'incollege',
						'label' => '就读院校',
						'rules' => 'required',
				),
				array(
						'field' => 'inmajor',
						'label' => '就读专业',
						'rules' => 'required',
				),
				array(
						'field' => 'ctype',
						'label' => '学校类型',
						'rules' => 'required',
				),
				array(
						'field' => 'gpa',
						'label' => '平均成绩',
						'rules' => 'required',
				),
				array(
						'field' => 'egpa',
						'label' => '外语成绩',
						'rules' => 'required',
				),
				
				array(
						'field' => 'username',
						'label' => '姓名',
						'rules' => 'required',
				),
				array(
						'field' => 'gender',
						'label' => '性别',
						'rules' => 'required',
				),
				array(
						'field' => 'maxdegree',
						'label' => '最高学历',
						'rules' => 'required',
				),
				array(
						'field' => 'email',
						'label' => 'Email地址',
						'rules' => 'required',
				),
				array(
						'field' => 'mobile',
						'label' => '手机号码',
						'rules' => 'required',
				),
		),
		
		'contact1' => array(
				array(
						'field' => 'title',
						'label' => '主题',
						'rules' => 'required',
				),
				array(
						'field' => 'email',
						'label' => 'email',
						'rules' => 'required|valid_email',
				),
				array(
						'field' => 'mobile',
						'label' => '电话',
						'rules' => 'required',
				),
				array(
						'field' => 'content',
						'label' => '留言',
						'rules' => 'required',
				),
		
		),
);