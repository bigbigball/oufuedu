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
			<h2>
				文书范例 <span>读书造成充实的人，会议造成未能觉悟的人，写作造成正确的人！</span>
			</h2>
			<ul>
				<li><a href="<?php echo base_url() ?>">首页</a></li>
				<li><a href="#">留学文书</a></li>
				<li><a href="#">留学文书范例</a></li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<div class="faq_list">
			<ul class="filter">
				<li class="all active"><a href="#" onclick="return(false)"
					data-filter=".all">全部</a></li>
				<li class="web-design"><a href="#" onclick="return(false)"
					data-filter=".0">个人陈述</a></li>
				<li class="print"><a href="#" onclick="return(false)"
					data-filter=".1">推荐信</a></li>
				<li class="videography"><a href="#" onclick="return(false)"
					data-filter=".2">个人简历</a></li>
				<li class="videography"><a href="#" onclick="return(false)"
					data-filter=".3">申请短文</a></li>
				<li class="videography"><a href="#" onclick="return(false)"
					data-filter=".4">套磁信</a></li>
			</ul>
		</div>
		<!-- Short Text Layout 2 Column -->
		<div class="short_text_layout short_text_col_2 gallery filter_wrap">
			<ul>
			    <?php foreach ($eassyexa as $v): ?>
				<li class="all <?php echo $v['type']?>"><div class="bwWrapper">
						<a
							href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'.'of_admin/style/uploads/'.$v['thumb'] ?>"
							rel="prettyPhoto[gallery2]"><img
							src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'.'of_admin/style/uploads/'.$v['thumb'] ?>"
							width="442" height="264" alt="" /></a>
						<p>
							<strong><a href="single_full.html"><?php echo $v['author']?></a></strong><span><?php echo $v['title']?></span>
						</p>
					</div></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<!-- pager_nav -->
		<div class="pager_nav"  style="float:right;">
			<?php echo $links?>
		</div>
		<!-- /pager_nav -->
		<!-- /Short Text Layout 2 Column -->
	</div>
</div>


<?php $this->load->view('public/footer'); ?>