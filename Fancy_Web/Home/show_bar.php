<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=gbk">
<link rel="stylesheet" href="css/roll.css" type="text/css" media="screen" />
<title>FancyClub </title>
</head>

<body>

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
							<img src="images/11.jpg" width="1000" height="440" />
							</a></li>
							<li><a href="http://" target="_blank">
							<img src="images/22.png" width="1000" height="440" />
							</a></li>
							<li><a href="http://" target="_blank">
							<img src="images/33.jpg" width="1000" height="440" />
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
	<script type="text/javascript" src="js/jquery-min-1.7.js" charset="utf-8"></script>
	<script src="js/fancy.js"></script>
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
</script>
</div>
</body>
</html>