<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>备份数据库 - BsAdmin后台模板 - 经典版演示</title>
    <link rel="icon" href="./static/favicon.ico">
    <link rel="stylesheet" href="/Public/Houtai/static/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/Public/Houtai/static/admin/css/index.css" >
    <link rel="stylesheet" href="/Public/Houtai/static/admin/css/main.css" >
    <link rel="stylesheet" href="/Public/Houtai/static/admin/css/html.css" >
    <script src="/Public/Houtai/static/js/vue.min.js"></script>
    <script src="/Public/Houtai/static/js/jquery-3.3.1.min.js" ></script>
    <script src="/Public/Houtai/static/bootstrap/js/bootstrap.bundle.js" ></script>
    <script src="/Public/Houtai/static/admin/js/script.js" ></script>
    <script>
        $(function () {
            let hrefArr = window.location.href.split('/');
            let name = hrefArr[hrefArr.length-1];
            $(".menu a[href='"+name+"']").addClass('active');
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
             <li><a href="main.html"><i class="iconfont mr-1">&#xe6a2;</i>首页</a> </li> <li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6e0;</i>用户管理<i class="iconfont arrow float-right">&#xe66c;</i></a><ul class="sub-menu"><li><a href="user_index.html" >用户列表</a></li><li><a href="user_create.html" >添加用户</a></li></ul> </li> <li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe69d;</i>文章管理<i class="iconfont arrow float-right">&#xe66c;</i></a><ul class="sub-menu"><li><a href="type_index.html" >栏目管理</a></li><li><a href="article_index.html" >文章管理</a></li></ul> </li> <li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6d4;</i>系统设置<i class="iconfont arrow float-right">&#xe66c;</i></a><ul class="sub-menu"><li><a href="web_index.html" >网站设置</a></li><li><a href="flink_index.html" >友情连接</a></li><li><a href="nav_index.html" >导航管理</a></li><li><a href="web_pwd.html" >修改密码</a></li><li><a href="login.html" >登录页</a></li></ul> </li> <li><a class="top-menu" href="javascript:;"><i class="iconfont mr-1">&#xe6ad;</i>数据库<i class="iconfont arrow float-right">&#xe66c;</i></a><ul class="sub-menu"><li><a href="db_backup.html" >备份数据库</a></li><li><a href="db_reduction.html" >还原数据库</a></li></ul> </li> <li><a href="out.html"><i class="iconfont mr-1">&#xe68c;</i>退出登录</a> </li> <li><a href="http://www.qadmin.net/"><i class="iconfont mr-1">&#xe690;</i>开发者官网</a> </li> <li><a href="http://docs.qadmin.net/"><i class="iconfont mr-1">&#xe699;</i>开发文档</a> </li>
        </ul>
    </nav>

    <main>
        <header>
            <a href="http://www.qadmin.net" target="_blank">网站首页</a>

            <div class="dropdown float-right">
                <button class="btn  btn-sm  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg width="20" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile-fill rounded-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c.552 0 1-.672 1-1.5S10.552 5 10 5s-1 .672-1 1.5S9.448 8 10 8z"/>
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
        <div class="table-box">
            <table class="table">
                <colgroup>
                    <col width="50">
                    <col width="300">
                    <col width="300">
                    <col width="200">
                    <col width="200">
                    <col width="200">
                    <col width="100">
                    <col width="300">
                    <col width="150">
                    <col width="100">
                </colgroup>
                <thead>
                <tr>
                    <th><input lay-filter="all" type="checkbox" lay-skin="primary">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </th>
                    <th>表名</th>
                    <th>表说明</th>
                    <th>引擎</th>
                    <th>编码</th>
                    <th>数据量</th>
                    <th>数据大小</th>
                    <th>创建时间</th>
                    <th>备份状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="0" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_admin</td>
                    <td>管理员表</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>0</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:08:49</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_admin&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="1" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_article</td>
                    <td>文章表</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>9</td>
                    <td>80KB</td>
                    <td>2018-04-23 00:08:49</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_article&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="2" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_category</td>
                    <td>文章栏目</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>15</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:08:49</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_category&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="3" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_flink</td>
                    <td>友情链接</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>5</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:08:50</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_flink&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="4" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_info</td>
                    <td>个人资料</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>19</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:08:51</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_info&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="5" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_keys</td>
                    <td>TAG表</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>26</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:08:52</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_keys&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="6" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_leave</td>
                    <td>留言表</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>60</td>
                    <td>16KB</td>
                    <td>2018-04-28 12:42:22</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_leave&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="7" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_menu</td>
                    <td>后台菜单</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>51</td>
                    <td>48KB</td>
                    <td>2018-04-23 00:08:52</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_menu&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="8" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_nav</td>
                    <td>前台导航</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>5</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:08:54</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_nav&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="9" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_region</td>
                    <td>城市地区</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>3461</td>
                    <td>336KB</td>
                    <td>2018-04-23 00:08:54</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_region&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="10" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_skills</td>
                    <td>专业技能</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>66</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:09:50</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_skills&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="11" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_user</td>
                    <td>用户表</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>11</td>
                    <td>16KB</td>
                    <td>2018-04-28 12:44:59</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_user&amp;dir=20190401_2718">备份</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" lay-filter="vo" data-id="12" lay-skin="primary" value="false">
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon layui-icon-ok"></i></div>
                    </td>
                    <td>qadmin_work</td>
                    <td>工作经历</td>
                    <td>InnoDB</td>
                    <td>utf8_general_ci</td>
                    <td>3</td>
                    <td>16KB</td>
                    <td>2018-04-23 00:09:51</td>
                    <td>未备份</td>
                    <td><a href="/admin/mysql/backup.html?table=qadmin_work&amp;dir=20190401_2718">备份</a></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="99">
                        <input type="checkbox" lay-filter="single" lay-skin="primary">
                        &nbsp;所有表合并成一个文件
                        <a href="javascript:;" class="btn btn-primary" style="float: right;">自动备份</a>
                        <a href="javascript:;" class="btn btn-warning" style="float: right; margin-right: 20px;">一键备份</a>
                    </td>
                </tr>
                </tfoot>
            </table>


        </div>
    </div>
</main>




        </div>

    </main>
</div>

</body>
</html>