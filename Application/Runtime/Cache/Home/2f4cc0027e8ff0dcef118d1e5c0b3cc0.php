<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后页首页 - BsAdmin后台模板 - 经典版演示</title>
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
            
<style>

    .main {
        overflow-y: auto;
    }

    .info .card{
        min-height: 330px;
    }
    .user .card{
        min-height: 500px;
    }

    .card h5{
        margin-bottom: 20px;
    }
    .main ul li{
        margin-bottom: 3px;
    }
</style>
<main>
    <div class="main pt-5 pb-5">

        <div class="jumbotron bg-white pt-1 pb-1 mb-0">
            <h1 class="display-4">BsAdmin</h1>
            <p class="lead">基于Bootstrap4构建的BsAdmin后台模板</p>
        </div>

        <hr class="my-4">
        <div class="info">
            <div class="row">


                <div class="col-4">


                    <div class="card">
                        <div class="card-body">
                            <h5>支持我们</h5>
                            <ul>
                                <li>如果您认为BsAdmin对你有所帮助,你可以扫描以上二维码支持我们</li>
                                <li><img height="180" src="http://www.webqdkf.com/skin/default/images/wxgzh.jpg"></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-4">

                    <div class="card">
                        <div class="card-body">
                            <h5>BsAdmin 介绍</h5>
                            <ul>
                                <li>BsAdmin 是一个轻量级的后台模板,基于Bootstrap4构建</li>
                                <li>风格简洁简单,中小型项目首选</li>
                                <li>不管你是初级还是高级工程师,都有可以快速上手</li>
                                <li>BsAdmin是由Bootstrap4开发,可以在模板任意使用jq或vue</li>
                                <li>当前版本: v1.0</li>
                                <li><b>关注官网或github随时下载最新版</b></li>
                                <li>
                                    <a href="http://bsadmin.qdmin.net/" target="_blank" class="btn btn-primary">进入官网</a>
                                    <a href="https://github.com/aa24615/bsadmin" target="_blank" class="btn btn-danger">github</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4">

                    <div class="card">
                        <div class="card-body">
                            <h5> BsAdmin 特点</h5>
                            <ul>
                                <li>轻量级</li>
                                <li>简洁直爽</li>
                                <li>基于Bootstrap4,上手快</li>
                                <li>支持jq/vue</li>
                                <li>...</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <hr class="my-4">

        <div class="user">
            <div class="row">
                <div class="col-8">

                    <div class="card">
                        <div class="card-body ">
                            <h5>最新会员</h5>
                            <table class="table">

                                <thead>
                                <tr>
                                    <th><a href="?/admin/user/index/order/uid.html">UID</a></th>
                                    <th>用户名</th>
                                    <th>邮箱</th>
                                    <th><a href="?/admin/user/index/order/reg_time.html">注册时间</a></th>
                                    <th><a href="?/admin/user/index/order/login_time.html">登录时间</a></th>
                                    <th><a href="?/admin/user/index/order/login.html">登录次数</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="id36567">
                                    <td>36567</td>
                                    <td>YY187919</td>
                                    <td>YY187919@qadmin.net</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>7</td>
                                </tr>
                                <tr class="id36567">
                                    <td>36567</td>
                                    <td>YY187919</td>
                                    <td>YY187919@qadmin.net</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>7</td>
                                </tr>
                                <tr class="id36567">
                                    <td>36567</td>
                                    <td>YY187919</td>
                                    <td>YY187919@qadmin.net</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>7</td>
                                </tr>
                                <tr class="id36567">
                                    <td>36567</td>
                                    <td>YY187919</td>
                                    <td>YY187919@qadmin.net</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>7</td>
                                </tr>
                                <tr class="id36567">
                                    <td>36567</td>
                                    <td>YY187919</td>
                                    <td>YY187919@qadmin.net</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>7</td>
                                </tr>
                                <tr class="id36567">
                                    <td>36567</td>
                                    <td>YY187919</td>
                                    <td>YY187919@qadmin.net</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>2019-04-01 11:44:20</td>
                                    <td>7</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>


                </div>

                <div class="col-4">

                    <div class="card">

                        <div class="card-body ">

                            <h5>
                                会员统计
                            </h5>
                            <table class="table">
                                <tbody><tr>
                                    <th>今天登录</th>
                                    <td>555</td>
                                </tr>
                                <tr>
                                    <th>昨天登录</th>
                                    <td>5552</td>
                                </tr>
                                <tr>
                                    <th>会员总数</th>
                                    <td>224555</td>
                                </tr>
                                <tr>
                                    <th>月活跃数</th>
                                    <td>55885</td>
                                </tr>
                                <tr>
                                    <th>季活跃数</th>
                                    <td>5485885</td>
                                </tr>
                                <tr>
                                    <th>vip用户</th>
                                    <td>65885</td>
                                </tr>
                                <tr>
                                    <th>过期vip</th>
                                    <td>525885</td>
                                </tr>

                            </tbody></table>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</main>


        </div>

    </main>
</div>

</body>
</html>