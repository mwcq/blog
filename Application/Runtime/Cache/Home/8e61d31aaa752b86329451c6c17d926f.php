<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>添加文章 - BsAdmin后台模板 - 经典版演示</title>
		<link rel="icon" href="./static/favicon.ico">
		<link rel="stylesheet" href="/Public/Houtai/static/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Public/Houtai/static/admin/css/index.css">
		<link rel="stylesheet" href="/Public/Houtai/static/admin/css/main.css">
		<link rel="stylesheet" href="/Public/Houtai/static/admin/css/html.css">
		<script src="/Public/Houtai/static/js/vue.min.js"></script>
		<script src="/Public/Houtai/static/js/jquery-3.3.1.min.js"></script>
		<script src="/Public/Houtai/static/bootstrap/js/bootstrap.bundle.js"></script>
		<script src="/Public/Houtai/static/admin/js/script.js"></script>
		<script>
			$(function() {
				let hrefArr = window.location.href.split('/');
				let name = hrefArr[hrefArr.length - 1];
				$(".menu a[href='" + name + "']").addClass('active');
			})
		</script>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

		<script>
			$(function() {
				let hrefArr = window.location.href.split('/');
				let name = hrefArr[hrefArr.length - 1];
				$(".menu a[href='" + name + "']").addClass('active');
			})
			window.onload = function() {
				var input = document.getElementById("fielinput");
				var txshow = document.getElementById("txshow");
				if (typeof(FileReader) === 'undefined') {
					result.innerHTML = "抱歉，你的浏览器不支持 FileReader，请使用现代浏览器操作！";
					input.setAttribute('disabled', 'disabled');
				} else {
					input.addEventListener('change', readFile, false);
					txshow.onclick = function() {
						input.click();
					}
				}
			}

			function readFile() {
				var file = this.files[0];
				//判断是否是图片类型
				/*if (!/image\/\w+/.test(file.type)) {
				    alert("只能选择图片");
				    return false;
				}*/
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function(e) {
					txshow.src = this.result;
					document.getElementById("data").value = txshow.src;
				}

			}
		</script>

	</head>

	<body>

		<div id="app" class="d-flex">

			<nav>
				<div class="logo">
					<h4>BsAdmin</h4>
				</div>
				<ul class="menu">
					<li><a href="{U:(index)}"><i class="iconfont mr-1">&#xe6a2;</i>首页</a> </li>
					<li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6e0;</i>用户管理<i
								class="iconfont arrow float-right">&#xe66c;</i></a>
						<ul class="sub-menu">
							<li><a href="<?php echo U(user_index);?>">用户列表</a></li>
							<li><a href="<?php echo U(user_create);?>">添加用户</a></li>
						</ul>
					</li>
					<li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe69d;</i>文章管理<i
								class="iconfont arrow float-right">&#xe66c;</i></a>
						<ul class="sub-menu">
							<li><a href="<?php echo U(type_index);?>">栏目管理</a></li>
							<li><a href="<?php echo U(article_index);?>">文章管理</a></li>
						</ul>
					</li>
					<li>
						<a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6d4;</i>系统设置<i
								class="iconfont arrow float-right">&#xe66c;</i></a>
						<ul class="sub-menu">
							<li>
								<a href="web_index.html">网站设置</a>
							</li>
							<li>
								<a href="flink_index.html">友情连接</a>
							</li>
							<li>
								<a href="nav_index.html">导航管理</a>
							</li>
							<li>
								<a href="web_pwd.html">修改密码</a>
							</li>
							<li>
								<a href="login.html">登录页</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6ad;</i>数据库<i
								class="iconfont arrow float-right">&#xe66c;</i></a>
						<ul class="sub-menu">
							<li>
								<a href="db_backup.html">备份数据库</a>
							</li>
							<li>
								<a href="db_reduction.html">还原数据库</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="out.html"><i class="iconfont mr-1">&#xe68c;</i>退出登录</a>
					</li>
					<li>
						<a href="http://www.qadmin.net/"><i class="iconfont mr-1">&#xe690;</i>开发者官网</a>
					</li>
					<li>
						<a href="http://docs.qadmin.net/"><i class="iconfont mr-1">&#xe699;</i>开发文档</a>
					</li>
				</ul>
			</nav>

			<main>
				<header>
					<a href="http://www.qadmin.net" target="_blank">网站首页</a>

					<div class="dropdown float-right">
						<button class="btn  btn-sm  dropdown-toggle" type="button" id="dropdownMenu2"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<svg width="20" height="1em" viewBox="0 0 16 16"
								class="bi bi-emoji-smile-fill rounded-circle" fill="currentColor"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c.552 0 1-.672 1-1.5S10.552 5 10 5s-1 .672-1 1.5S9.448 8 10 8z" />
							</svg>
							<!--可以使用图片,大小20,class='rounded-circle'-->
							BsAdmin
						</button>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
							<a class="dropdown-item" href="repwd.html">修改密码</a>
							<a class="dropdown-item" href="out.html">退出登录</a>
						</div>
					</div>

				</header>

				<div class="main">

					<div class="title-box">
						<h5>新增文章</h5>
					</div>
					<div class="form-box">

						<div class="row">
							<div class="col-5">
								<form class=" " id="myform" action="" method="post">

									<div class="form-group">

									</div>

									<div class="form-group">

										<div>
											<i class="require-red">*</i>略缩图：<br />
											<input type="hidden" name="produceId" value="<?php echo ($info["produceid"]); ?>" />
											<td><input type="file" id="fielinput" name="" />
												<img class="pic_url" id="txshow" src="<?php echo ($info["producephoto"]); ?>"
													height="200px">

												<input type="hidden" name="producePhoto" id="data"
													value="<?php echo ($info["producephoto"]); ?>" />
											</td>
										</div>

										<small class="form-text text-muted"></small>
									</div>

									<div class="form-group">
										<label>标题</label>
										<input type="text" name="produceName" value="<?php echo ($info["producename"]); ?>"
											class="form-control">
										<small class="form-text text-muted"></small>
									</div>

									<div class="form-group">
										<label>分类</label>
										<select name="sKind" class="form-control">

											<option value="<?php echo ($info["skind"]); ?>"><?php echo ($info["skind"]); ?></option>

										</select>
										<small class="form-text text-muted"></small>
									</div>

									<div class="form-group">
										<label>内容</label>
										<div id="summernote" id="text">
											<?php echo ($info["produceintroduce"]); ?>
										</div>
										<input type="hidden" name="produceIntroduce" id="text-input" value="" />
									</div>

									<div class="form-group">
										<label>标签</label>
										<input type="text" name="produceLabel" value="<?php echo ($info["producelabel"]); ?>"
											class="form-control" placeholder="用英文豆号隔开">
										<small class="form-text text-muted"></small>
									</div>

									<div class="form-group hid">
										<label>附件地址</label>
										<input type="text" id="hid-link" value="<?php echo ($info["producelink"]); ?>" name="produceLink"
											class="form-control" placeholder="不上传就留空 可使用外链http://">

									</div>
									<div class="form-group hid">
										<label>资源状态</label>
										<input type="text" id="hid-state" value="<?php echo ($info["productstatus"]); ?>"
											name="Productstatus" class="form-control" placeholder="">
										<input type="hidden" name="updateTime" id="" value="" />
									</div>
									<div class="submit-box">
										<button type="submit" onclick="count()" id="ok"
											class="btn btn-primary">确定提交</button>
										<button type="button" onclick="window.history.back()"
											class="btn btn-outline-secondary">取消</button>
									</div>

								</form>
							</div>
						</div>
					</div>

					<script>
						$(document).ready(function() {
							$('#summernote').summernote();

							$("#ok").click(function() {
								var ht = $("#summernote").summernote('code');
								$("#text-input").val(ht);
							});
							$("select").change(function() {
								var i = $("select").val();
								if (i == '日常闲聊' | i == '学习交流' || i == '前端技术' || i == '后端技术') {
									$(".hid").attr("style", "visibility:hidden");
									$('#hid-link').val("无");
									$("#hid-state").val("无");
								} else {
									$(".hid").attr("style", "visibility:visible");
								}
							});
						});
					</script>

				</div>

			</main>
		</div>

	</body>

</html>