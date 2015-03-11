<?php $this->load->view('public/header'); ?>

<link rel="stylesheet" href="<?php echo base_url().'style/' ?>stylesheets/fonts/font-awesome/css/font-awesome.css"> 

<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.bxSlider.min.js"></script>
<script
	src="<?php echo base_url().'style/' ?>scripts/jquery.blackandwhite.min.js"></script>
	
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

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
   <h2>联系我们<span>三人行，必有我师焉；择其善者而从之，其不善者而改之！</span></h2>
   <ul>
    <li><a href="<?php echo base_url() ?>">首页</a></li>
    <li><a href="#">关于我们</a></li>
    <li>联系我们</li>
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <!-- contact_us -->
  <div class="contact_us">
   <h4>公司位置</h4>
<!--   <div class="bwWrapper"><img src="<?php echo base_url().'style/' ?>images/contact_us/contact_us.png" width="640" height="265" alt="" /></div>-->
   <div class="map_wrap">
   <!--地图生成器-->
  <!--百度地图容器-->
  <div style="width:640px;height:310px;border:#ccc solid 1px;" id="dituContent"></div>
   </div>
   <br/>
   <br/>
   <h4>欢迎留言</h4>
   <form action="#" method="post" />
    <p><label for="namet">姓名</label>(required)<br /><input id="namet" type="text" /></p>
    <p><label for="mailt">E-mail</label>(required)<br /><input id="mailt" type="text" /></p>
    <p><label for="website">主题</label><br /><input id="website" type="text" /></p>
    <p><label for="message">留言栏</label>(required)<br /><textarea id="message"></textarea></p>
    <p><input class="btn_m" type="submit" value="提交" /></p>
   </form>
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
	    <p>"让每个学生接受最好的教育"是欧孚人的服务宗旨，"送每个学生去背景条件下最好大学"是欧孚人的信念。</p>
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

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(126.625475,45.739633);//定义一个中心点坐标
        map.centerAndZoom(point,16);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"欧孚留学",content:"香港欧孚国际文化有限公司",point:"126.623175|45.739337",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
	
<?php $this->load->view('public/footer'); ?>