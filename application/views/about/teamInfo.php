<?php $this->load->view('public/header'); ?>

<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.blackandwhite.min.js"></script>
<script>
$(function(){
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
   <h2>团队成员<span>一个伟大的团队最重要的作用是让其平凡的队员创造出不平凡的业绩！</span></h2>
   <ul>
    <li><a href="<?php echo base_url() ?>">首页</a></li>
    <li><a href="#">关于我们</a></li>
    <li>团队成员</li>
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  
  
  <!-- team_option3 -->
  <div class="team_option team_option3">
   <h4>团队成员</h4>
   <ul>
    <li>
     <div class="img bwWrapper"><img src="<?php echo base_url().'style/' ?>images/meet_the_team/meet_team_1.png" width="278" height="141" alt="" /></div>
     <div class="desc">
      <ul class="social">
       <li><a class="qq" href="#">Facebook</a></li>
       <li><a class="weibo" href="#">Twitter</a></li>
       <li><a class="weixin" href="#">LinkedIn</a></li>
      </ul>
	  <p><strong>lolita</strong><br />Master &amp; phd</p>
      <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens tum aecenas faucib sadips amets itecto beatae vitae dicta sunt expllicitis dolores ipsums.</p>
     </div>
    </li>
    <li>
     <div class="img bwWrapper"><img src="<?php echo base_url().'style/' ?>images/meet_the_team/meet_team_2.png" width="278" height="141" alt="" /></div>
     <div class="desc">
      <ul class="social">
       <li><a class="facebook" href="#">Facebook</a></li>
       <li><a class="twitter" href="#">Twitter</a></li>
       <li><a class="linkedin" href="#">LinkedIn</a></li>
      </ul>
	  <p><strong>lolita</strong><br />Master &amp; phd</p>
      <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens tum aecenas faucib sadips amets itecto beatae vitae dicta sunt expllicitis dolores ipsums.</p>
     </div>
    </li>
    <li>
     <div class="img bwWrapper"><img src="<?php echo base_url().'style/' ?>images/meet_the_team/meet_team_3.png" width="278" height="141" alt="" /></div>
     <div class="desc">
      <ul class="social">
       <li><a class="facebook" href="#">Facebook</a></li>
       <li><a class="twitter" href="#">Twitter</a></li>
       <li><a class="linkedin" href="#">LinkedIn</a></li>
      </ul>
	  <p><strong>lolita</strong><br />Master &amp; phd</p>
      <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens tum aecenas faucib sadips amets itecto beatae vitae dicta sunt expllicitis dolores ipsums.</p>
     </div>
    </li>
    <li>
     <div class="img bwWrapper"><img src="<?php echo base_url().'style/' ?>images/meet_the_team/meet_team_4.png" width="278" height="141" alt="" /></div>
     <div class="desc">
      <ul class="social">
       <li><a class="facebook" href="#">Facebook</a></li>
       <li><a class="twitter" href="#">Twitter</a></li>
       <li><a class="linkedin" href="#">LinkedIn</a></li>
      </ul>
	  <p><strong>lolita</strong><br />Master &amp; phd</p>
      <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens tum aecenas faucib sadips amets itecto beatae vitae dicta sunt expllicitis dolores ipsums.</p>
     </div>
    </li>
    <li>
     <div class="img bwWrapper"><img src="<?php echo base_url().'style/' ?>images/meet_the_team/meet_team_5.png" width="278" height="141" alt="" /></div>
     <div class="desc">
      <ul class="social">
       <li><a class="facebook" href="#">Facebook</a></li>
       <li><a class="twitter" href="#">Twitter</a></li>
       <li><a class="linkedin" href="#">LinkedIn</a></li>
      </ul>
	  <p><strong>lolita</strong><br />Master &amp; phd</p>
      <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens tum aecenas faucib sadips amets itecto beatae vitae dicta sunt expllicitis dolores ipsums.</p>
     </div>
    </li>
    <li>
     <div class="img bwWrapper"><img src="<?php echo base_url().'style/' ?>images/meet_the_team/meet_team_6.png" width="278" height="141" alt="" /></div>
     <div class="desc">
      <ul class="social">
       <li><a class="facebook" href="#">Facebook</a></li>
       <li><a class="twitter" href="#">Twitter</a></li>
       <li><a class="linkedin" href="#">LinkedIn</a></li>
      </ul>
	  <p><strong>lolita</strong><br />Master &amp; phd</p>
      <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens tum aecenas faucib sadips amets itecto beatae vitae dicta sunt expllicitis dolores ipsums.</p>
     </div>
    </li>
   </ul>
  </div>
  <!-- /team_option3 -->
 
 </div>
</div>

	
<?php $this->load->view('public/footer'); ?>