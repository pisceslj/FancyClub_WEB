<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Fancyclub</title>
	<meta name="description" content="" />
  <meta name="keywords" content="" />
 <link href="../Public/Css/reset.css" rel="stylesheet" type="text/css" />
  <link href="../Public/Css/style.css" rel="stylesheet" type="text/css" />
<link href="../Public/Css/roll.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="../Public/Css/about.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../Public/js/jquery-min-1.7.js" charset="utf-8"></script>
  <script type="text/javascript" src="../Public/js/fancy.js" charset="utf-8"></script>
</head>
<body>
<div class="main">
    <!-- top bar -->
    <div class="topbar">
          <div class="logo"> 
        <a href="inform.html"><img src="../Public/images/logo.jpg" /><span>幻想  JUST TRY</span></a>
          </div>
          <ul id="nav">
              <li></li>
          </ul>
  </div> <!-- end .topbar -->
  <!-- top bar -->
<div class="zhuangshi"></div>	

<!-- show_bar -->
<br>
<div id="main-outer">
  <div id="main-wrap">
    <div id="main">
      <div class="content">
        <!--图片轮播-->
        <div class="hot_wrap">
          <div id="target" class="tbui_slideshow_container">
            <ul class="tbui_slideshow_list">
              <li><a href="http://" target="_blank">
              <img src="../Public/images/11.jpg" width="1000" height="440" />
              </a></li>
              <li><a href="http://" target="_blank">
              <img src="../Public/images/22.png" width="1000" height="440" />
              </a></li>
              <li><a href="http://" target="_blank">
              <img src="../Public/images/33.jpg" width="1000" height="440" />
              </a></li>
            </ul>
          </div>
          <!--导航条的结构-->
          <ul id="controller">
            <li>1</li>
            <li>2</li>
            <li>3</li>
          </ul>
          <a href="#" id="prev">上一页</a> <a href="#" id="next">下一页</a>
        </div>
        <div class="left-wrap">
        </div>
      </div>
      <div class="clear">
      </div>
    </div>
  </div>
  <!-- end of #main-wrap -->
 
    
    <!-- learn  -->
   <div id="learn">
      <div class="container">
          <div class="subheader"><h2>learn</h2></div>
      <div class="serv_icons">
        <ul class="mainmenu">
              <li><a href="news.php" ><b><img src="../Public/images/1.png" /></b><span>新闻资讯</span></a></li>
                <li><a href="/" ><b><img src="../Public/images/2.png" /></b><span>竞赛信息</span></a></li>
                <li><a href="forum/forum.php" ><b><img src="../Public/images/3.png" /></b><span>技术论坛</span></a></li>
                <li><a href="" ><b><img src="../Public/images/4.png" /></b><span>团队展示</span></a></li>
                <li><a href="../APP/Modules/Home/Tbl/Resource/index.html" ><b><img src="../Public/images/5.png" /></b><span>资源中心</span></a></li>
                <li><a href="/" ><b><img src="../Public/images/6.png" /></b><span>团队介绍</span></a></li>
                <li><a href="/" ><b><img src="../Public/images/7.png" /></b><span>队友招募</span></a></li>
                <li><a href="/" ><b><img src="../Public/images/8.png" /></b><span>联系我们</span></a></li>
                <li><a href="/" ><b><img src="../Public/images/9.png" /></b><span>Peer Teaching</span></a></li>        
              </ul>
        </div> <!-- end .serv_icons -->
      </div> <!-- end .container -->
    </div> <!-- end learn -->

    <!--  about -->
   <div id="about">
  <div class="container">
      <div class="subheader"><h2>about</h2></div>
                 
  <div class='limiter'>           
       <div class='col2'>
          <h3 class='space-bottom1'>Develop</h3>
                     <a  class='space-bottom0 col12 ' href='/maps/'>发展规划</a>
                     <a  class='space-bottom0 col12 ' href='/showcase/'>案列展示</a>
                     <a  class='space-bottom0 col12 ' href='/plans/'>行业动态</a>
                     <a  class='space-bottom0 col12 ' href='/products/'>项目设计</a>
                     <a  class='space-bottom0 col12 ' href='/blog/'>个人博客</a>
       </div>
       <div class='col2'>
          <h3 class='space-bottom1'>Help</h3>
                     <a  class='space-bottom0 col12' href='/status/'>申请处理</a> 
                     <a  class='space-bottom0 col12' href='/help/'>帮助向导</a>                   
                     <a  class='space-bottom0 col12' href='/map-feedback/'>留言回复</a>                     
                     <a  class='space-bottom0 col12' href='/education/'>教育安全</a>
                     <a  class='space-bottom0 col12' href='/contact/'>联系我们</a>
        </div>
       <div class='col2'>
           <h3 class='space-bottom1'>Team</h3>
            <a  class='space-bottom0 col12' href='/industries/realestate/'>团队管理</a>
            <a  class='space-bottom0 col12' href='/industries/transportation/'>校企交流</a>
            <a  class='space-bottom0 col12' href='/industries/agriculture/'>学校政策</a>
            <a  class='space-bottom0 col12' href='/industries/social/'>社会关注</a>
            <a  class='space-bottom0 col12' href='/industries/government/'>政府政策</a>
      </div>
</div>

<div class='email'>
  <form action="" method="post" class="elegant-aero">
    <h1>您有任何问题，随时联系我们
    <span></span>
    </h1>
    <label>
    <span>Your Name :</span>
    <input id="name" type="text" name="name" placeholder="Your Full Name" />
    </label>

    <label>
    <span>Your Email :</span>
    <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>

    <label>
    <span>Message :</span>
    <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
    </label>
    <label>
    <span>&nbsp;</span>
    <input type="button" class="button" value="Send" />
    </label>
  </form>

  </div>


</div><!-- end container --> 
</div><!-- end #about -->

    <!-- footer -->
<footer>
	<p>&copy; 2015 All rights reserved by Fancyclub</p>
</footer>
 
<script>
$(function () {
   new SlideShow({
        nav: "#controller",
        effect : "fade",
        target: "#target",
        activeClass: "active",
        next: "#next",
        prev: "#prev",
        auto: true
   })
})
  
   var url = "../APP/Modules/Admin/Login/index.html";
   $("#btn").click(function(e)){
        window.open(url);
   }
</script>
</body>

</html>