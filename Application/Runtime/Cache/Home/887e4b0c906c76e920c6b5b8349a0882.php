<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>栏目管理 - BsAdmin后台模板 - 经典版演示</title>
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
					<li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6d4;</i>系统设置<i
								class="iconfont arrow float-right">&#xe66c;</i></a>
						<ul class="sub-menu">
							<li><a href="web_index.html">网站设置</a></li>
							<li><a href="flink_index.html">友情连接</a></li>
							<li><a href="nav_index.html">导航管理</a></li>
							<li><a href="web_pwd.html">修改密码</a></li>
							<li><a href="login.html">登录页</a></li>
						</ul>
					</li>
					<li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6ad;</i>数据库<i
								class="iconfont arrow float-right">&#xe66c;</i></a>
						<ul class="sub-menu">
							<li><a href="db_backup.html">备份数据库</a></li>
							<li><a href="db_reduction.html">还原数据库</a></li>
						</ul>
					</li>
					<li><a href="out.html"><i class="iconfont mr-1">&#xe68c;</i>退出登录</a> </li>
					<li><a href="http://www.qadmin.net/"><i class="iconfont mr-1">&#xe690;</i>开发者官网</a> </li>
					<li><a href="http://docs.qadmin.net/"><i class="iconfont mr-1">&#xe699;</i>开发文档</a> </li>
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

				<div id="body">


					<main>
						<div class="main">
							<div class="search">
								<form class="form-inline float-left" action="" method="get">
									<div class="form-group">
										<input type="text" name="key" value="" class="form-control" placeholder="文章标题">
									</div>
									<button type="submit" class="btn btn-primary"><i class="iconfont"></i>搜索</button>
								</form>


								<a class="btn btn-primary float-right" href="<?php echo U(type_create);?>"><i
										class="iconfont"></i>新增</a>
							</div>

							<div class="table-box">

								<table class="table">
									<colgroup>
										<col width="80">
										<col width="80">
										<col width="150">
										<col width="80">
										<col width="80">
										<col width="80">
										<col>
										<col width="150">
									</colgroup>
									<thead>
										<tr>
											<th>分类ID</th>

											<th>名称</th>



											<th>操作</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="id9">
												<td><?php echo ($v["partitionid"]); ?></td>
												<td><?php echo ($v["partitionidname"]); ?></td>
												<td><a
														href="<?php echo U('type_edit',array('partitionid' => $v['partitionid']));?>">修改</a>
													|
													<a class="del" data-id=".id9"
														href="<?php echo U('type_del',array('partitionid' => $v['partitionid']));?>">删除</a>
												</td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
									</tbody>
								</table>
							</div>


						</div>
					</main>



				</div>

			</main>
		</div>

	</body>
</html>