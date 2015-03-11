  <!-- footer -->
  <!-- social block -->
  <div class="social_block">
   <div class="wraper">
   <span class="icon2"></span>
    <p>Stay connected with us in your favorite flavor!</p>
    <ul>
     <li class="facebook"><a href="#">QQ</a></li>
     <li class="twitter"><a href="#">新浪微博</a></li>
     <li class="linkedin"><a href="#">微信</a></li>
     <li class="rss"><a href="#">百度贴吧</a></li>
     <li class="dribbble"><a href="#">人人网</a></li>
     <li class="google"><a href="#">豆瓣</a></li>
    </ul>
   </div>
  </div>
  <!-- /social block -->
  
  <div class="footer">
   <footer>
    <!-- bottom about -->
    <div class="bottom_about">
     <p><a href="<?php echo base_url() ?>"><img src="<?php echo base_url().'style/' ?>images/logo.png" alt="" /></a></p>
     <p>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</p>
    </div>
    <!-- /bottom about -->
    <!-- recent tweets -->
    <div class="recent_tweets">
     <h3><span>最新回复</span></h3>
     <ul>
      <li><a href="#">@laurakalbag</a> I will be very soon. Ase result reco endation <a href="#">31 minutes ago</a></li>
      <li><a href="#">@laurakalbag</a> you got chocolates!? That's i I'm signing up. <a href="#">37 minutes ago</a></li>
     </ul>
    </div>
    <!-- /recent tweets -->
    <!-- recent posts -->
    <div class="recent_posts">
     <h3><span>最新文章</span></h3>
     <ul>
      <li><a href="#">欧孚教你如何写好PS写作</a></li>
      <li><a href="#">好的个人陈述从架构开始入手 </a></li>
      <li><a href="#">英国个人陈述关健四步骤</a></li>
      <li><a href="#">留学申请中个人陈述的十要十不要</a></li>
      <li><a href="#">留学申请注意事项及时间</a></li>
     </ul>
    </div>
    <!-- /recent posts -->
    <!-- subscribe block -->
    <div class="subscribe_block">
     <h3><span>联系我们</span></h3>
     <form method="post" action="#" />
      <p><input type="text" id="name" value="姓名 ..." /></p>
      <p><input type="text" id="email" value="电话 ..." /></p>
      <p><input type="submit" value="提交" /></p>
     </form>
    </div>
    <!-- /subscribe block -->
   </footer>
  </div>
  
  <!-- copyright -->
  <div class="copyright">
   <div class="wraper">
    <p><span>Copyright 2015 Construct</span>All Rights Reserved<a href="#">RSS</a><a href="#">Comments</a></p>
    <a class="top" href="#">Back to the top</a>
   </div>
  </div>
  <!-- /copyright -->
  <!-- /footer -->
  <!-- 代码部分 begin -->
<div class="main-im">
	<div id="open_im" class="open-im">&nbsp;</div>  
	<div class="im_main" id="im_main">
		<div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=1691951153&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
			<div class="qq-container"></div>
			<div class="qq-hover-c"><img class="img-qq" src="http://demo.lanrenzhijia.com/2015/service0119/images/qq.png"></div>
			<span> QQ在线咨询</span>
		</a>
		<div class="im-tel">
			<div>咨询热线：</div>
			<div class="tel-num">18645140283</div>
			
		</div>
		<div class="im-footer" style="position:relative">
			<div class="weixing-container">
				<div class="weixing-show">
					<div class="weixing-txt">微信扫一扫<br>加入留学微信群</div>
					<img class="weixing-ma" src="<?php echo base_url().'style/' ?>images/weixin.jpg">
					<div class="weixing-sanjiao"></div>
					<div class="weixing-sanjiao-big"></div>
				</div>
			</div>
			<div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>

<script>
$(function(){
	$('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
	$('.go-top').bind('click',function(){
		$(window).scrollTop(0);
	});
	$(".weixing-container").bind('mouseenter',function(){
		$('.weixing-show').show();
	})
	$(".weixing-container").bind('mouseleave',function(){        
		$('.weixing-show').hide();
	});
});
</script>
<!-- 代码部分 end-->
  </body>
  </html> 
