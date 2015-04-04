<?php $this->load->view('public/header'); ?>


<link
	href="<?php echo base_url().'style/' ?>stylesheets/bootstrap.min.css"
	rel="stylesheet" />
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>stylesheets/fonts/font-awesome/css/font-awesome.css">
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.bxSlider.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.blackandwhite.min.js"></script>
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>stylesheets/ace.min.css" />
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>stylesheets/ace-rtl.min.css" />
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>stylesheets/ace-skins.min.css" />
<script src="<?php echo base_url().'style/' ?>scripts/ace-extra.min.js"></script>

<style>
body {
	font: 13px 'PT Sans', Arial, Tahoma, Verdana, Sans-Serif;
	color: #626363;
}

.footer footer .subscribe_block p input {
	font: 13px 'PT Sans';
	color: #626363;
	border: 1px solid #c0bebe;
	background: #f6f3f3;
	padding: 5px 10px;
	width: 213px;
}
</style>

<script>
$(function(){
	$('.clients_slider').bxSlider({
		auto: false,
		controls : false,
		mode: 'fade',
		pager: true
	});	
	$('.recent_slider').bxSlider({
		auto: false,
		displaySlideQty: 1,
		moveSlideQty: 1,
    	speed : 1000
	});
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
})
</script>

<link rel="stylesheet" href="<?php echo base_url().'style/' ?>assets/css/datepicker.css" />
<script src="<?php echo base_url().'style/' ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url().'style/' ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url().'style/' ?>assets/js/ace.min.js"></script>
<script type="text/javascript">
			jQuery(function($) {			
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});	
			});
		</script>

<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2>
				免费留学评估<span>免费留学评估~~~！</span>
			</h2>
			<ul>
				<li><a href="<?php echo base_url() ?>">首页</a></li>
				<li><a href="#">留学申请</a></li>
				<li>免费留学评估</li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- contact_us -->
		<h4 style="font: 17px 'PT Sans', Arial, Tahoma, Verdana, Sans-Serif;">
			<strong>免费留学评估表：</strong>
		</h4>
		<div class="main-container" id="main-container">
			<div class="main-container-inner">
				<div class="main-content">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row-fluid">
									<div class="span12">
										<div class="widget-box">
											<div
												class="widget-header widget-header-blue widget-header-flat">
												<h4 class="lighter">评估流程：</h4>
											</div>
											<div class="widget-body">
												<div class="widget-main">
													<div id="fuelux-wizard" class="row-fluid"
														data-target="#step-container">
														<ul class="wizard-steps">
															<li data-target="#step1" class="active"><span
																class="step">1</span> <span class="title">留学意向</span></li>

															<li data-target="#step2"><span class="step">2</span> <span
																class="title">专业评估</span></li>

															<li data-target="#step3"><span class="step">3</span> <span
																class="title">联系信息</span></li>

															<li data-target="#step4"><span class="step">4</span> <span
																class="title">完成</span></li>
														</ul>
													</div>
													<hr />
													<div class="step-content row-fluid position-relative"
														id="step-container">
														<div class="step-pane active" id="step1">
															<!--<h3 class="lighter block green">Enter the following information</h3>-->

															<form action="<?php echo site_url('apply/appEvaluation/addAppEvaluation')?>" class="form-horizontal" name="sample-form" id="outDestination" method="POST" enctype="multipart/form-data">
																<div class="form-group has-warning">
																	<label for="inputWarning"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">留学国家</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="outcountry" id="inputWarning" class="width-100" /> <i
																			class="icon-leaf"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Warning tip help!</div>
																</div>



																<div class="form-group has-error">
																	<label for="inputError"
																		class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">留学专业</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="outmajor" id="inputError" class="width-100" /> <i
																			class="icon-remove-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Error tip help!</div>
																</div>

																<div class="form-group has-success">
																	<label for="inputSuccess"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">备选国家</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="altcountry" id="inputSuccess" class="width-100" /> <i
																			class="icon-ok-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Success tip help!</div>
																</div>

																<div class="form-group has-info">
																	<label for="inputInfo"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">出国时间</label>

																	<div class="col-xs-12 col-sm-5">
																		<div class="input-group">
																	<input class="form-control date-picker" id="id-date-picker-1" type="text" name="outtime" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>
																</div>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Info tip help!</div>
																</div>

																<div class="form-group">
																	<label for="inputError2"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">攻读学位</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block"> <select name="outdegree"
																			class="form-control" id="form-field-select-1">
																				<option value="">请选择</option>
																				<option value="0">大学</option>
																				<option value="1">硕士</option>
																				<option value="2">博士</option>

																		</select>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Error tip help!</div>
																</div>

															</form>
															<!--form 联系信息开始-->
															<form class="form-horizontal hide" id="validation-form"
																method="get">
																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="email">Email Address:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="email" name="email" id="email"
																				class="col-xs-12 col-sm-6" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="password">Password:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="password" name="password" id="password"
																				class="col-xs-12 col-sm-4" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="password2">Confirm Password:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="password" name="password2"
																				id="password2" class="col-xs-12 col-sm-4" />
																		</div>
																	</div>
																</div>

																<div class="hr hr-dotted"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="name">Company Name:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" id="name" name="name"
																				class="col-xs-12 col-sm-5" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="phone">Phone Number:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="input-group">
																			<span class="input-group-addon"> <i
																				class="icon-phone"></i>
																			</span> <input type="tel" id="phone" name="phone" />
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="url">Company URL:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="url" id="url" name="url"
																				class="col-xs-12 col-sm-8" />
																		</div>
																	</div>
																</div>

																<div class="hr hr-dotted"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe
																		to</label>

																	<div class="col-xs-12 col-sm-9">
																		<div>
																			<label> <input name="subscription" value="1"
																				type="checkbox" class="ace" /> <span class="lbl">
																					Latest news and announcements</span>
																			</label>
																		</div>

																		<div>
																			<label> <input name="subscription" value="2"
																				type="checkbox" class="ace" /> <span class="lbl">
																					Product offers and discounts</span>
																			</label>
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

																	<div class="col-xs-12 col-sm-9">
																		<div>
																			<label class="blue"> <input name="gender" value="1"
																				type="radio" class="ace" /> <span class="lbl"> Male</span>
																			</label>
																		</div>

																		<div>
																			<label class="blue"> <input name="gender" value="2"
																				type="radio" class="ace" /> <span class="lbl">
																					Female</span>
																			</label>
																		</div>
																	</div>
																</div>

																<div class="hr hr-dotted"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="state">State</label>

																	<div class="col-xs-12 col-sm-9">
																		<select id="state" name="state" class="select2"
																			data-placeholder="Click to Choose...">
																			<option value="">&nbsp;</option>
																			<option value="AL">Alabama</option>
																			<option value="AK">Alaska</option>
																			<option value="AZ">Arizona</option>
																			<option value="AR">Arkansas</option>
																			<option value="CA">California</option>
																			<option value="CO">Colorado</option>
																			<option value="CT">Connecticut</option>
																			<option value="DE">Delaware</option>
																			<option value="FL">Florida</option>
																			<option value="GA">Georgia</option>
																			<option value="HI">Hawaii</option>
																			<option value="ID">Idaho</option>
																			<option value="IL">Illinois</option>
																			<option value="IN">Indiana</option>
																			<option value="IA">Iowa</option>
																			<option value="KS">Kansas</option>
																			<option value="KY">Kentucky</option>
																			<option value="LA">Louisiana</option>
																			<option value="ME">Maine</option>
																			<option value="MD">Maryland</option>
																			<option value="MA">Massachusetts</option>
																			<option value="MI">Michigan</option>
																			<option value="MN">Minnesota</option>
																			<option value="MS">Mississippi</option>
																			<option value="MO">Missouri</option>
																			<option value="MT">Montana</option>
																			<option value="NE">Nebraska</option>
																			<option value="NV">Nevada</option>
																			<option value="NH">New Hampshire</option>
																			<option value="NJ">New Jersey</option>
																			<option value="NM">New Mexico</option>
																			<option value="NY">New York</option>
																			<option value="NC">North Carolina</option>
																			<option value="ND">North Dakota</option>
																			<option value="OH">Ohio</option>
																			<option value="OK">Oklahoma</option>
																			<option value="OR">Oregon</option>
																			<option value="PA">Pennsylvania</option>
																			<option value="RI">Rhode Island</option>
																			<option value="SC">South Carolina</option>
																			<option value="SD">South Dakota</option>
																			<option value="TN">Tennessee</option>
																			<option value="TX">Texas</option>
																			<option value="UT">Utah</option>
																			<option value="VT">Vermont</option>
																			<option value="VA">Virginia</option>
																			<option value="WA">Washington</option>
																			<option value="WV">West Virginia</option>
																			<option value="WI">Wisconsin</option>
																			<option value="WY">Wyoming</option>
																		</select>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="platform">Platform</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<select class="input-medium" id="platform"
																				name="platform">
																				<option value="">------------------</option>
																				<option value="linux">Linux</option>
																				<option value="windows">Windows</option>
																				<option value="mac">Mac OS</option>
																				<option value="ios">iOS</option>
																				<option value="android">Android</option>
																			</select>
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label
																		class="control-label col-xs-12 col-sm-3 no-padding-right"
																		for="comment">Comment</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<textarea class="input-xlarge" name="comment"
																				id="comment"></textarea>
																		</div>
																	</div>
																</div>

																<div class="space-8"></div>

																<div class="form-group">
																	<div class="col-xs-12 col-sm-4 col-sm-offset-3">
																		<label> <input name="agree" id="agree" type="checkbox"
																			class="ace" /> <span class="lbl"> I accept the policy</span>
																		</label>
																	</div>
																</div>
															</form>
															<!--form 联系信息结束-->
														</div>

														<div class="step-pane" id="step2">
															<form class="form-horizontal" name="sample-form" id="proEvaluation">
																<div class="form-group has-warning">
																	<label for="inputWarning"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">就读院校</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="incollege" id="inputWarning" class="width-100" /> <i
																			class="icon-leaf"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Warning tip help!</div>
																</div>

																<div class="form-group has-error">
																	<label for="inputError"
																		class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">就读专业</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="inmajor" id="inputError" class="width-100" /> <i
																			class="icon-remove-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Error tip help!</div>
																</div>

																<div class="form-group has-success">
																	<label for="inputSuccess"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">学校类型</label>

																	<div class="col-xs-12 col-sm-5">
																		<div>
																			<label class="blue checkbox-inline"> <input
																				name="ctype" value="0" type="radio" checked="checked" class="ace" />
																				<span class="lbl"> 211大学</span>
																			</label> <label class="blue  checkbox-inline"> <input
																				name="ctype" value="1" type="radio" class="ace" />
																				<span class="lbl"> 985大学</span>
																			</label><label class="blue  checkbox-inline"> <input
																				name="ctype" value="2" type="radio" class="ace" />
																				<span class="lbl"> 其他</span>
																			</label>
																		</div>
																		
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		</div>
																</div>

																<div class="form-group has-info">
																	<label for="inputInfo"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">平均成绩</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="gpa" id="inputInfo" class="width-100" /> <i
																			class="icon-info-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Info tip help!</div>
																</div>

																<div class="form-group">
																	<label for="inputError2"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">外语成绩</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block"> <input type="text" name="egpa"
																			id="inputError2" class="width-100" /> <i
																			class="icon-remove-sign red"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Error tip help!</div>
																</div>

															</form>
														</div>

														<div class="step-pane" id="step3">


															<form class="form-horizontal" name="sample-form" id="contactInfo">
																<div class="form-group has-warning">sample-form
																	<label for="inputWarning"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">姓名</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="username" id="inputWarning" class="width-100" /> <i
																			class="icon-leaf"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Warning tip help!</div>
																</div>

																<div class="form-group has-error">
																	<label for="inputError"
																		class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">性别</label>

																	<div class="col-xs-12 col-sm-5">
																		<div>
																			<label class="blue checkbox-inline"> <input
																				name="gender" value="0" type="radio" checked="checked" class="ace" />
																				<span class="lbl"> 男</span>
																			</label> <label class="blue  checkbox-inline"> <input
																				name="gender" value="1" type="radio" class="ace" />
																				<span class="lbl"> 女</span>
																			</label>
																		</div>
																	</div>

																</div>

																<div class="form-group has-success">
																	<label for="inputSuccess"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">最高学历</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block"> <select
																			class="form-control" name="maxdegree" id="form-field-select-1">
																				<option value="">请选择</option>
																				<option value="0">高中</option>
																				<option value="1">大学</option>
																				<option value="2">硕士</option>

																		</select>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Success tip help!</div>
																</div>

																<div class="form-group has-info">
																	<label for="inputInfo"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">Email地址</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right"> <input
																			type="text" name="email" id="inputInfo" class="width-100" /> <i
																			class="icon-info-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Info tip help!</div>
																</div>

																<div class="form-group">
																	<label for="inputError2"
																		class="col-xs-12 col-sm-3 control-label no-padding-right">手机号码</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block"> <input type="text" name="mobile"
																			id="inputError2" class="width-100" /> <i
																			class="icon-remove-sign red"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Error tip help!</div>
																</div>

															</form>


														</div>

														<div class="step-pane" id="step4">
															<div class="center">
																<h3 class="green">Congrats!</h3>
																信息填写完毕，提交耐心等候评估结果!
															</div>
														</div>
													</div>

													<hr />
													<div class="row-fluid wizard-actions">
														<button class="btn btn-prev">
															<i class="icon-arrow-left"></i> 上一步
														</button>

														<button class="btn btn-success btn-next" data-last="提
														交 ">
															下一步 <i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</div>
												<!-- /widget-main -->
											</div>
											<!-- /widget-body -->
										</div>
									</div>
								</div>

								<div id="modal-wizard" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" data-target="#modal-step-contents">
												<ul class="wizard-steps">
													<li data-target="#modal-step1" class="active"><span
														class="step">1</span> <span class="title">Validation
															states</span></li>

													<li data-target="#modal-step2"><span class="step">2</span>
														<span class="title">Alerts</span></li>

													<li data-target="#modal-step3"><span class="step">3</span>
														<span class="title">Payment Info</span></li>

													<li data-target="#modal-step4"><span class="step">4</span>
														<span class="title">Other Info</span></li>
												</ul>
											</div>

											<div class="modal-body step-content" id="modal-step-contents">
												<div class="step-pane active" id="modal-step1">
													<div class="center">
														<h4 class="blue">Step 1</h4>
													</div>
												</div>

												<div class="step-pane" id="modal-step2">
													<div class="center">
														<h4 class="blue">Step 2</h4>
													</div>
												</div>

												<div class="step-pane" id="modal-step3">
													<div class="center">
														<h4 class="blue">Step 3</h4>
													</div>
												</div>

												<div class="step-pane" id="modal-step4">
													<div class="center">
														<h4 class="blue">Step 4</h4>
													</div>
												</div>
											</div>

											<div class="modal-footer wizard-actions">
												<button class="btn btn-sm btn-prev">
													<i class="icon-arrow-left"></i> 上一步
												</button>

												<button class="btn btn-success btn-sm btn-next" id="last-submit"
													data-last="提交 ">
													下一步 <i class="icon-arrow-right icon-on-right"></i>
												</button>

												<button class="btn btn-danger btn-sm pull-left"
													data-dismiss="modal">
													<i class="icon-remove"></i> 取消
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.page-content -->
				</div>
				<!-- /.main-content -->

			</div>
			<!-- /.main-container-inner -->


		</div>
		<!-- /.main-container -->

		<!-- /contact_us -->

	</div>
</div>



<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url().'style/' ?>scripts/jquery.min.js'>"+"<"+"/script>");
		</script>
<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url().'style/' ?>scripts/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
<script src="<?php echo base_url().'style/' ?>scripts/bootstrap.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->
<script
	src="<?php echo base_url().'style/' ?>scripts/fuelux/fuelux.wizard.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.validate.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/additional-methods.min.js"></script>
<script src="<?php echo base_url().'style/' ?>scripts/bootbox.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url().'style/' ?>scripts/select2.min.js"></script>
<!-- ace scripts -->
<script
	src="<?php echo base_url().'style/' ?>scripts/ace-elements.min.js"></script>
<script src="<?php echo base_url().'style/' ?>scripts/ace.min.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) return false;
					}
				}).on('finished', function(e) {
					$.ajax({ 
				        url: 'http://localhost/oufuedu/index.php/apply/appEvaluation/addAppEvaluation',
				        data: $("#outDestination, #contactInfo, #proEvaluation").serialize(), 
				        type: 'POST', 				        
				        success: function(result){
					        		bootbox.dialog({
										message: "感谢支持欧孚留学! 您的留学评估信息已提交!", 
										buttons: {
											"success" : {
												"label" : "OK",
												"className" : "btn-sm btn-primary"
											}
										}
									});
					        },
					    error:function(result){
					    		   bootbox.dialog({
										message: "您的输入有误，请重新输入提交！", 
										buttons: {
											"danger" : {
											"label" : "Error",
											"className" : "btn-sm btn-danger"
											}
										}
									});			        
						     },
				    });		
				}).on('stepclick', function(e){
					//return false;//prevent clicking on steps
				});
			
			
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				});
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: 'required',
						agree: 'required'
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
					invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-danger', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is(':checkbox') || element.is(':radio')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
	
				$('#modal-wizard .modal-header').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
			})
		</script>
<br />
<br />
<?php $this->load->view('public/footer'); ?>