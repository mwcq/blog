<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登录 - BsAdmin后台模板</title>
    <link rel="icon" href="/Public/Houtai/static/favicon.ico">
    <link rel="stylesheet" href="/Public/Houtai/static/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/Public/Houtai/static/admin/css/login.css" >
    <script src="/Public/Houtai/static/js/vue.min.js"></script>
    <script src="/Public/Houtai/static/js/jquery-3.3.1.min.js" ></script>
    <script src="/Public/Houtai/static/bootstrap/js/bootstrap.bundle.js" ></script>
</head>
<body>
    <div class="login">
        <form>
            <h2>后台登录</h2>
            <div class="form-group">
                <label>用户名</label>
                <input type="text" v-model="username" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label>密码</label>
                <input type="password" v-model="password"  class="form-control form-control-lg" id="pwd">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">记住密码</label>
            </div>

            <button type="button" :disabled="loading" @click="login" class="btn btn-primary btn-lg  btn-block" >
                <span v-show="loading" class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                立即登录
            </button>
        </form>
    </div>

    <p style="position: fixed;bottom: 0;text-align: center; width: 100%;">
        <a href="../Qiantai/index.html">网站首页</a>
    </p>

    <script>

        const vue = new Vue({
            el:'.login',
            data:{
                loading:false,//锁
                username:'',
                password:''
            },
            methods:{
                login:function () {
                    this.loading = true;
                    
                    // $.post('/admin/login',{
                    //     username:this.username,
                    //     pwd:this.pwd,
                    //     _token:'{{csrf_token()}}'
                    // },res=>{
                    //     this.loading = false;
                    //
                    //     if(res.code==1){
                    //         window.location.href = '/admin';
                    //     }else{
                    //        //不成功
                    //     }
                    // })

                    setTimeout(()=>{
                        window.location.href = 'index.html';
                    },3000)
                }
            }
        })

    </script>

</body>
</html>