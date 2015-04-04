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
    <li><a href="#">成功案例</a></li>
    <li><a href="#">申请案例</a></li>
    
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <div class="faq_list">
   <ul class="filter">
    <li class="all active"><a href="#" onclick="return(false)" data-filter=".all">全部</a></li>
    <li class="web-design"><a href="#" onclick="return(false)" data-filter=".0">美国</a></li>
    <li class="print"><a href="#" onclick="return(false)" data-filter=".1">英国</a></li>
    <li class="videography"><a href="#" onclick="return(false)" data-filter=".2">香港</a></li>
	<li class="videography"><a href="#" onclick="return(false)" data-filter=".3">澳洲</a></li>
	 <li class="videography"><a href="#" onclick="return(false)" data-filter=".4">新加坡</a></li>
   </ul>
  </div>
  <!-- Short Text Layout 3 Column -->
  <div class="short_text_layout short_text_col_3 gallery filter_wrap">
   <ul>
    <?php foreach($case as $v): ?>
    <li class="all <?php echo $v['country']?>"><div class="bwWrapper">
      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'.'of_admin/style/uploads/appcase/'.$v['thumb'] ?>"
         rel="prettyPhoto[gallery2]"><img
         src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'.'of_admin/style/uploads/appcase/'.$v['thumb']?>"
         width="279" height="170" alt="" /></a>
      <p>
         <strong><a href="<?php echo site_url().'/case/appCaseList/appCaseContent/'.$v['cid']?>"><?php echo $v['academy']?></a></strong>
         <span>lolita</span>
      </p>
    </div></li>
    <?php endforeach;?>
   </ul>
  </div>
  <!-- pager_nav -->
  <div class="pager_nav" style="float:right;">
   <?php echo $links?>
  </div>
  <!-- /pager_nav -->
  <!-- /Short Text Layout 3 Column -->
 </div>
</div>


<?php $this->load->view('public/footer'); ?>