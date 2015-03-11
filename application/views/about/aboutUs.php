<?php $this->load->view('public/header'); ?>

<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.bxSlider.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.blackandwhite.min.js"></script>
	
<script>
$(function(){
	$('.features_slider').bxSlider({
		auto: false,
		displaySlideQty: 5,
		moveSlideQty: 1,
    	speed : 1000
	});
	$('.intro_slider').bxSlider({
		auto: false,
		controls : false,
		mode: 'fade',
		pager: true
	});	
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
});
</script>

<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
   <h2>关于我们<span>We think you'll love to work with us</span></h2>
   <ul>
    <li><a href="<?php echo base_url() ?>">首页</a></li>
    <li><a href="#">关于我们</a></li>
    <li>欧孚简介</li>
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <!-- intro text -->
  <div class="intro_text">
   <ul class="intro_slider">
    <li>
     <div class="bwWrapper"><img src="<?php echo base_url().'style/' ?>images/about_us/about_us_slide_1.png" width="426" height="238" alt="" /></div>
     <div class="desc">
      <h4>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</h4>
      <p>欧孚留学团队由资深留学咨询专家，专业的英语翻译人员以及毕业于世界名校的海归成员组成。.团队成员不仅对英语有超强的驾驭能力，而且对各个专业领域的大学录取过程有深入了解，并且都具有丰富的留学申请经验，深知留学申请及文书写作特点，能为学生专业打造出量身定做的并能够展现自身特色，提供符合学校要求的申请材料以及有竞争力的申请。自2006年开始欧孚留学已经为近千中国学子提供了全面的留学服务，拥有了大量的成功案例，积累了丰富的经验。</p>
     </div>
    </li>
    <li>
     <div class="bwWrapper"><img src="<?php echo base_url().'style/' ?>images/about_us/about_us_slide_2.png" width="426" height="238" alt="" /></div>
     <div class="desc">
      <h4>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</h4>
      <p>欧孚留学团队由资深留学咨询专家，专业的英语翻译人员以及毕业于世界名校的海归成员组成。.团队成员不仅对英语有超强的驾驭能力，而且对各个专业领域的大学录取过程有深入了解，并且都具有丰富的留学申请经验，深知留学申请及文书写作特点，能为学生专业打造出量身定做的并能够展现自身特色，提供符合学校要求的申请材料以及有竞争力的申请。自2006年开始欧孚留学已经为近千中国学子提供了全面的留学服务，拥有了大量的成功案例，积累了丰富的经验。</p>
     </div>
    </li>
    <li>
     <div class="bwWrapper"><img src="<?php echo base_url().'style/' ?>images/about_us/about_us_slide_3.png" width="426" height="238" alt="" /></div>
     <div class="desc">
      <h4>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</h4>
      <p>欧孚留学团队由资深留学咨询专家，专业的英语翻译人员以及毕业于世界名校的海归成员组成。.团队成员不仅对英语有超强的驾驭能力，而且对各个专业领域的大学录取过程有深入了解，并且都具有丰富的留学申请经验，深知留学申请及文书写作特点，能为学生专业打造出量身定做的并能够展现自身特色，提供符合学校要求的申请材料以及有竞争力的申请。自2006年开始欧孚留学已经为近千中国学子提供了全面的留学服务，拥有了大量的成功案例，积累了丰富的经验。</p>
     </div>
    </li>
    <li>
     <div class="bwWrapper"><img src="<?php echo base_url().'style/' ?>images/about_us/about_us_slide_4.png" width="426" height="238" alt="" /></div>
     <div class="desc">
      <h4>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</h4>
      <p>欧孚留学团队由资深留学咨询专家，专业的英语翻译人员以及毕业于世界名校的海归成员组成。.团队成员不仅对英语有超强的驾驭能力，而且对各个专业领域的大学录取过程有深入了解，并且都具有丰富的留学申请经验，深知留学申请及文书写作特点，能为学生专业打造出量身定做的并能够展现自身特色，提供符合学校要求的申请材料以及有竞争力的申请。自2006年开始欧孚留学已经为近千中国学子提供了全面的留学服务，拥有了大量的成功案例，积累了丰富的经验。</p>
     </div>
    </li>
    <li>
     <div class="bwWrapper"><img src="<?php echo base_url().'style/' ?>images/about_us/about_us_slide_5.png" width="426" height="238" alt="" /></div>
     <div class="desc">
      <h4>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</h4>
      <p>欧孚留学团队由资深留学咨询专家，专业的英语翻译人员以及毕业于世界名校的海归成员组成。.团队成员不仅对英语有超强的驾驭能力，而且对各个专业领域的大学录取过程有深入了解，并且都具有丰富的留学申请经验，深知留学申请及文书写作特点，能为学生专业打造出量身定做的并能够展现自身特色，提供符合学校要求的申请材料以及有竞争力的申请。自2006年开始欧孚留学已经为近千中国学子提供了全面的留学服务，拥有了大量的成功案例，积累了丰富的经验。</p>
     </div>
    </li>
   </ul>
  </div>
  <!-- /intro text -->
  <!-- process -->
  <div class="process">
   <h4>成长历程</h4>
   <ul>
    <li>
     <h3><span>Step 1</span> 成立</h3>
     <p>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</p>
    </li>
    <li>
     <h3><span>Step 2</span> 起步</h3>
     <p>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</p>
    </li>
    <li>
     <h3><span>Step 3</span> 成长</h3>
     <p>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</p>
    </li>
    <li>
     <h3><span>Step 4</span> 跳跃</h3>
     <p>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。</p>
    </li>
   </ul>
  </div>
  <!-- /process --> 
  <div class="why_choose_explore">
   <h4>为什么选择欧孚留学?  We’ll Tell You!</h4>
  <!-- why choose -->
  <div class="why_choose">
   <ul>
    <li>委托方仅为学生，拒绝海外大学的佣金.</li>
    <li>真正零风险不成功不收费.</li>
    <li>提出“留学规划师”和“学习规划师”概念.</li>
    <li>纯英文个性化创作申请文书.</li>
    <li>专业的咨询师团队.</li>
    <li>出色的成功案例.</li>
    <li>丰富的申请和培训经验.</li>
   </ul>
  </div>
  <!-- /why choose -->
  <!-- features_explore -->
  <div class="features_explore">
   <ul>
    <li>
     <div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/about_us/why_choose_us_1.png" width="94" height="65" alt="" /></a></div>
     <p>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。  ...<a href="#" class="read_more">read more</a></p>
    </li>
    <li>
     <div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/about_us/why_choose_us_2.png" width="94" height="65" alt="" /></a></div>
     <p>欧孚留学是一家从事留学文书写作和留学申请指导咨询服务的专业机构，服务内容包括提供留学申请、留学指导咨询，留学文书咨询，文书原创写作，文书润色修改、留学材料翻译、移民签证等服务。  ...<a href="#" class="read_more">read more</a></p>
    </li>
   </ul>
  </div>
  <!-- /features_explore -->
  </div>
  <!-- client list -->
  <div class="featured_list client_list">
   <div class="features_slider_wrap">
   <h3>合作伙伴</h3>
   <ul class="features_slider">
    <li><div><div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/client_logos/client_logo_1.png" alt="" /></a></div></div></li>
    <li><div><div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/client_logos/client_logo_2.png" alt="" /></a></div></div></li>
    <li><div><div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/client_logos/client_logo_3.png" alt="" /></a></div></div></li>
    <li><div><div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/client_logos/client_logo_4.png" alt="" /></a></div></div></li>
    <li><div><div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/client_logos/client_logo_5.png" alt="" /></a></div></div></li>
    <li><div><div class="bwWrapper"><a href="#"><img src="<?php echo base_url().'style/' ?>images/client_logos/client_logo_6.png" alt="" /></a></div></div></li>
   </ul>
   </div>
  </div>
  <!-- /client list -->
  <!-- /send_quote -->
  <div class="send_quote">
   <h4>选择欧孚，勇于挑战，实现梦想</h4>
   <p>点击留言板，欢迎畅所欲言<a class="btn_col" href="<?php echo site_url().'/about/contactUs'; ?>">留言</a></p>
  </div>
  <!-- /send_quote -->
  
 </div>
</div>


	
<?php $this->load->view('public/footer'); ?>