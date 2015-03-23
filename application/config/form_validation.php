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