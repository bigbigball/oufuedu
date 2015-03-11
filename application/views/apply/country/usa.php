<?php $this->load->view('public/header'); ?>
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>stylesheets/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url().'style/' ?>stylesheets/tables.css" />
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.blackandwhite.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.bxSlider.min.js"></script>

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


<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
   <h2>美国留学申请<span>美国留学申请~~~！</span></h2>
   <ul>
    <li><a href="<?php echo base_url() ?>">首页</a></li>
    <li><a href="#">留学申请</a></li>
    <li>美国留学申请</li>
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <!-- contact_us -->
  <div class="contact_us">
  <h4>美国留学全程接申请</h4>
   <!-- 这儿放内容吧~~~ -->
  </div>
  <!-- /contact_us -->
  <!-- sidebar -->
  <div class="sidebar">
   <!-- most popular -->
   <div class="address_widget">
    <h4>办公地点</h4>
	<br/>
    <ul class="contact-us">
                              <li>
                                 <i class="icon-map-marker"></i>
                                 <p>
                                    <strong>Address：</strong> 中国黑龙江哈尔滨南岗区和兴路和兴商厦B座1204室
                                 </p>
                              </li>
                              <li>
                                 <i class="icon-phone"></i>
                                 <p>
                                    <strong>Phone：</strong> +8618645140283
                                 </p>
                              </li>
							  <li>
                                 <i class="icon-pinterest-sign"></i>
                                 <p>
                                    <strong>QQ：</strong> 1524674308、1691951153
                                 </p>
                              </li>
                              <li>
                                 <i class="icon-envelope"></i>
                                 <p>
                                    <strong>Email：</strong><a href="mailto:lolita.qiqi@qq.com">lolita.qiqi@qq.com</a>
                                 </p>
                              </li>
                           </ul>
   </div>
   <!-- /most popular -->
   <!-- latest tweets -->
   <div class="worktime">
    <h4>办公时间</h4>
	<br/>
    <ul>
                              <li><i class="icon-time"> </i>周一至周五 - 9:00-20:00 </li>
                              <li><i class="icon-time"> </i>周六 - 9:00-18:00</li>
                              <li><i class="icon-remove-circle"> </i>周天 - 休息</li>
                           </ul>
   </div>
   <!-- /latest tweets -->
   
   <!--关注我们开始-->
   <div class="member-social">
    <h4>关注我们</h4>
	<br/>
	<div class="">
                     <div class="weixin">
				<div>
					<img src="<?php echo base_url().'style/' ?>images/weixin.jpg" />
				</div>
				<div class="word">微信公共帐号</div>
			</div>
			<div class="weibo">
				<div>
					<img src="<?php echo base_url().'style/' ?>images/weibo.jpg" />
				</div>
				<div class="word">微博公共帐号</div>
			</div>        
                           </div>
   </div>
   <!--关注我们结束-->
   <!-- our clients -->
   <div class="our_clients">
    <h4>欧孚人寄语</h4>
     <ul class="clients_slider">
	  <li>
	   <blockquote>
	    <p>"让每个孩子受最好的教育"是欧孚人的服务宗旨，"送每个学生去背景条件下最好大学"是欧孚人的信念。</p>
	    <p>lolita, CEO of oufuedu</p>
	   </blockquote>
	  </li>	
	  <li>
	   <blockquote>
	    <p>"Cum soluta nobis est eligendi optio cumque nihl impedit quois minus id quod maxime placeait sadipsamets."</p>
	    <p>Jane Doe, CEO of Imperio</p>
	   </blockquote>
	  </li>	
	  <li>
	   <blockquote>
	    <p>"Libero tempore, cuendi optio cumque nihl impedit quois minus id quod maxime placeat facere rendus sit sadipsamets."</p>
	    <p>Jane Doe, CEO of Imperio</p>
	   </blockquote>
	  </li>	
	  <li>
	   <blockquote>
	    <p>"Nam libero tempore, cum soluta nobis es nihl impedit quois minus id quod maxime placeat facere rendus sit sadipsamets."</p>
	    <p>Jane Doe, CEO of Imperio</p>
	   </blockquote>
	  </li>	
	  <li>
	   <blockquote>
	    <p>"Am libero tempore, cum soluta nobis est eligendi optio cumque ipsamets."</p>
	    <p>Jane Doe, CEO of Imperio</p>
	   </blockquote>
	  </li>	
	 </ul>   
   </div>
   <!-- /our clients -->
   
  
  </div>
  <!-- /sidebar -->
 </div>
</div>




<?php $this->load->view('public/footer'); ?>