<?php $this->load->view('public/header'); ?>
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>stylesheets/prettyPhoto.css">

<script src="<?php echo base_url().'style/' ?>scripts/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url().'style/' ?>scripts/jquery.isotope.js"></script>
<script src="<?php echo base_url().'style/' ?>scripts/jquery.blackandwhite.min.js"></script>

<script>
$(function(){
		var container = $('.short_text_layout');
		container.isotope({
			itemSelector: 'li',
			filter: '*',
		  animationEngine: 'jquery',
			animationOptions: {
				duration: 500,
				easing: 'linear',
				queue: false,
			}
		});
		$(".filter li a").click(function() {
			$('.filter li').removeClass("active");
			$(this).parent().addClass("active");
			var selector = $(this).attr('data-filter');
			container.isotope({
			    filter: selector,
			    animationEngine: 'jquery',
			    animationOptions: {
			        duration: 500,
			        easing: 'linear',
			        queue: false,
			    }
			});
			return false;
		});
	$(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_rounded'});
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
   <h2>成功案例 <span>无论何事，只要对它有无限的热情你就能取得成功！</span></h2>
   <ul>
    <li><a href="<?php echo base_url() ?>">首页</a></li>
    <li><a href="#">申请案例</a></li>
    <li><a href="#">成功案例</a></li>
    
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <div class="faq_list">
   <ul class="filter">
    <li class="all active"><a href="#" onclick="return(false)" data-filter=".all">全部</a></li>
    <li class="web-design"><a href="#" onclick="return(false)" data-filter=".web-design">英国</a></li>
    <li class="print"><a href="#" onclick="return(false)" data-filter=".print">香港</a></li>
    <li class="videography"><a href="#" onclick="return(false)" data-filter=".videography">澳洲</a></li>
	<li class="videography"><a href="#" onclick="return(false)" data-filter=".videography">新加坡</a></li>
	 <li class="videography"><a href="#" onclick="return(false)" data-filter=".videography">美国</a></li>
   </ul>
  </div>
  <!-- Short Text Layout 3 Column -->
  <div class="short_text_layout short_text_col_3 gallery filter_wrap">
   <ul>
    <li class="all web-design"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_01.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_11.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">南阳理工大学</a></strong><span>lolita</span></p></div></li>
    <li class="all print"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_02.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_12.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">新加坡国立大学</a></strong><span>lolita</span></p></div></li>
    <li class="all videography"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_03.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_13.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">悉尼大学</a></strong><span>lolita</span></p></div></li>
    <li class="all web-design"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_04.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_14.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">伦敦学院</a></strong><span>lolita</span></p></div></li>
    <li class="all print"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_05.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_15.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">剑桥大学</a></strong><span>lolita</span></p></div></li>
    <li class="all videography"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_06.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_16.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">谢菲尔德大学</a></strong><span>lolita</span></p></div></li>
    <li class="all web-design"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_07.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_17.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">谢菲尔德大学</a></strong><span>lolita</span></p></div></li>
    <li class="all print"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_08.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_18.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">谢菲尔德大学</a></strong><span>lolita</span></p></div></li>
    <li class="all videography"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_09.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_19.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">谢菲尔德大学</a></strong><span>lolita</span></p></div></li>
    <li class="all web-design"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_10.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_20.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">谢菲尔德大学</a></strong><span>lolita</span></p></div></li>
    <li class="all videography"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_01.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_21.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">谢菲尔德大学</a></strong><span>lolita</span></p></div></li>
    <li class="all print"><div class="bwWrapper"><a href="<?php echo base_url().'style/' ?>images/portfolio/portfolio_02.jpg" rel="prettyPhoto[gallery2]"><img src="<?php echo base_url().'style/' ?>images/portfolio/portfolio_22.jpg" width="279" height="170" alt="" /></a><p><strong><a href="single_full.html">谢菲尔德大学</a></strong><span>lolita</span></p></div></li>
   </ul>
  </div>
  <!-- pager_nav -->
  <div class="pager_nav">
   <a href="#">1</a><span>2</span><a href="#">3</a><a href="#">4</a><a href="#">5</a>
   <a href="#" class="bx-prev">prev</a><a href="#" class="bx-next">next</a>
  </div>
  <!-- /pager_nav -->
  <!-- /Short Text Layout 3 Column -->
 </div>
</div>


<?php $this->load->view('public/footer'); ?>