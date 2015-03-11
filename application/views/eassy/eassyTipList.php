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
   <h2>写作小贴士 <span>读书破万卷，下笔如有神！</span></h2>
   <ul>
    <li><a href="<?php echo base_url() ?>">首页</a></li>
    <li><a href="#">留学文书</a></li>
    <li><a href="#">写作小贴士</a></li>
    
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <!-- portfolio_sidebar -->
  <div class="portfolio_sidebar">
   <ul class="gallery">
    <li>
     
     <div class="desc">
      <h5><a href="single_full.html">英国留学申请之教你如何写好PS写作 </a> <span>by lolita  &nbsp;&nbsp;&nbsp;&nbsp;02-11-2014</span></h5>
      <p>PS的写作应该是英国留学申请当中技术含量较高的一环,要到位地描述自己是一件很难的事情。这套简易的教程主要是希望帮助到达家写好自我陈述，请仔细阅读，并按照这个步骤进行，你将能轻松度过这个写作关。在进行PS写作之前，我们希望大家对专业及学校已经有了清晰的认识和明确的定位。总体而言，英国的留学文书是非常具有针对性的，所以如果你决定转专业的话还需要重新再写PS ...</p>
      <p><a class="read_more btn_col" href="eassycontent.html">Read More</a></p>
     </div>
    </li>
    <li>
     
     <div class="desc">
      <h5><a href="single_full.html">好的个人陈述从架构开始入手 </a> <span>by lolita &nbsp;&nbsp;&nbsp;&nbsp;02-11-2014</span></h5>
      <p>讲述你自己的故事，像任何一种叙述，可以不拘形式，篇幅小起伏大或口语化，在一篇个人陈述中介绍自己可以有着不同的形式格局－－－就像每个人讲话一样风格不拘。然而，一篇成功的个人陈述，是一种比较有针对性的自我介绍，聚焦于申请表格提出的两个问题回答“我是谁”，“我能提供些什么”，成功的陈述从未偏离过这两个主题介绍自身，描述你作为有竞争力候选者的潜能 ...</p>
      <p><a class="read_more btn_col" href="single_full.html">Read More</a></p>
     </div>
    </li>
    <li>
     
     <div class="desc">
      <h5><a href="single_full.html">英国个人陈述关健四步骤 </a> <span>by lolita &nbsp;&nbsp;&nbsp;&nbsp;02-11-2014</span></h5>
      <p>英国留学个人陈述在整个申请过程中的重要性不言而喻，而英国留学个人陈述PS写作说难很难，说易也容易，难在要把握的内容细节是很繁多，容易在大体步骤是差不多的，下面就介绍下如何让英国留学个人陈述PS写作轻松四步走 ...</p>
      <p><a class="read_more btn_col" href="single_full.html">Read More</a></p>
     </div>
    </li>
    <li>
    
     <div class="desc">
      <h5><a href="single_full.html">留学申请中个人陈述的十要十不要 </a><span>by lolita &nbsp;&nbsp;&nbsp;&nbsp;02-11-2014</span></h5>
      <p>美国大学研究生院入学申请材料中的个人陈述（PERSONAL STATEMENTS）无疑是申请人向学校推荐自己的最好机会。然而这关键的一步却令许多申请人不知从何落笔。现向大家介绍书写个人陈述过程中的十要十不要，请记住这二十条，申请人写的个人陈述自会给校方留下深刻的印象。 ...</p>
      <p><a class="read_more btn_col" href="single_full.html">Read More</a></p>
     </div>
    </li>
	
	
   </ul>
   <!-- pager_nav -->
   <div class="pager_nav">
    <a href="#">1</a><span>2</span><a href="#">3</a><a href="#">4</a><a href="#">5</a>
    <a href="#" class="bx-prev">prev</a><a href="#" class="bx-next">next</a>
   </div>
   <!-- /pager_nav -->
  </div>
  <!-- /portfolio_sidebar -->
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
                                    <strong>Address：</strong>中国黑龙江哈尔滨南岗区和兴路和兴商厦B座1204室
                                 </p>
                              </li>
                              <li>
                                 <i class="icon-phone"></i>
                                 <p>
                                    <strong>Phone：</strong>+8618645140283
                                 </p>
                              </li>
							  <li>
                                 <i class="icon-pinterest-sign"></i>
                                 <p>
                                    <strong>QQ：</strong>1524674308、1691951153
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
				<div class="word">官方微信</div>
			</div>
			<div class="weibo">
				<div>
					<img src="<?php echo base_url().'style/' ?>images/weibo.jpg" />
				</div>
				<div class="word">官方微信群</div>
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