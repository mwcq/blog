<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎来到音乐播放器</title>

<script src="/Public/Qiantai/音乐播放器/js/jquery-1.7.2.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/Public/Qiantai/lib-bs4/css/bootstrap.min.css">
<!--	<script src="../lib-bs4/js/jquery-3.3.1.min.js"></script>-->
	<script src="/Public/Qiantai/lib-bs4/js/popper.min.js"></script>
	<script src="/Public/Qiantai/lib-bs4/js/bootstrap.min.js"></script>
	<link href="/Public/Qiantai/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/Qiantai/音乐播放器/css/stylesheets/style.css">
	




<!--	<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>-->
<!--	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css"/>-->
<!--	<script src="https://cdn.jsdelivr.net/gh/stevenjoezhang/live2d-widget/autoload.js"></script>-->



</head>
<body class="keBody">




<div class="kePublic" >
<!--效果html开始-->


	<div class=" bg-dark head">

		<nav class="container navbar navbar-expand-sm ">
			<ul class="navbar-nav container bg-dark hidden-xs-nav">
				
				<li class="active"><a href="<?php echo U(blog);?>"><span class="glyphicon glyphicon-home"></span>博客首页&nbsp;</a></li>
				<li><a href=""><span class="glyphicon glyphicon-erase"></span>网站前端&nbsp;</a></li>
				<li><a href=""><span class="glyphicon glyphicon-inbox"></span>后端技术&nbsp;</a></li>
				
				<li><a href="about.html"><span class="glyphicon glyphicon-user"></span>关于我们&nbsp;</a></li>
				<li><a href="friendly.html"><span class="glyphicon glyphicon-tags"></span>友情链接&nbsp;</a></li>
			</ul>
		</nav>

	</div>



<div id="background"></div>
	<br><br><br><br>
	
<div id="player">
	<div class="cover"></div>
	<div class="ctrl">
		<div class="tag" style="color: white">
			<span><strong>111</strong></span>
			<span class="artist">Artist</span>
			<span class="album">Album</span>
		</div>
		<div class="control">
			<div class="left">
				<div class="rewind icon"></div>
				<div class="playback icon"></div>
				<div class="fastforward icon"></div>
			</div>
			<div class="volume right">
				<div class="mute icon left"></div>
				<div class="slider left">
					<div class="pace"></div>
				</div>
			</div>
		</div>
		<div class="progress1">
			<div class="slider">
				<div class="loaded"></div>
				<div class="pace"></div>
			</div>
			<div class="timer left">0:00</div>
			<div class="right">
				<div class="repeat icon"></div>
				<div class="shuffle icon"></div>
			</div>
		</div>
	</div>
</div>
<ul id="playlist"></ul>

	<div class="cl"></div>
<script src="/Public/Qiantai/音乐播放器/js/jquery-ui-1.8.17.custom.min.js"></script>
<script src="/Public/Qiantai/音乐播放器/js/script.js"></script>


</div>
</body>
</html>