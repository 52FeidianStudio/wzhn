<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <link rel="shortcut icon" type="image/x-icon" href="__PUBLIC__/images/icon/title.png"/>
   <title>玩转华农</title>
   <meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
   <head>
       <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/admin.css"/>
       <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/left.css"/>
       <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css"/>
       <script type="text/javascript"  src="__PUBLIC__/js/jquery.min.js"></script>
	   <script type="text/javascript"  src="__PUBLIC__/js/left.js"></script>
	   <script type="text/javascript" charset="utf-8" src="__PUBLIC__/editor/ueditor.config.js"></script>
       <script type="text/javascript" charset="utf-8" src="__PUBLIC__/editor/ueditor.all.min.js"> </script>
       <script type="text/javascript" charset="utf-8" src="__PUBLIC__/editor/lang/zh-cn/zh-cn.js"></script>
       
   </head>
    <body>
      <div id="header">
          <div class="header-left">
              <p style="float:left;">玩转华农后台管理系统</p>
          </div>
          <div class="header-right">
             <a  href="#"><img src="__PUBLIC__/images/static/home.png"><font class="go-home">首页</font></a>
             <a href="#"><img src="__PUBLIC__/images/static/LoginOut.png"><font class="go-out">退出</font></a>
          </div>
      </div>
      
  </body>
  </html>

     <div id="sidebar">
            <div class="person">
          <div class="person-img"><img src="__PUBLIC__/images/static/person.png"/></div>
          <p class="welcome">某某你好</p>
       </div>
	   <div id="left">
		  <ul class="accordion">
	   <li id="zero" class="home"><a href="__APP__/Index/index">首页</a>
	   <li id="one" class="manger"> <a href="#one">管理员管理</a>
		  <ul class="sub-menu">
			<li><a href="__APP__/Manger/index">管理员列表</a></li>
			<li><a href="__APP__/Manger/add">添加管理员</a></li>
		  </ul>
	   </li>
	   <li id="two" class="info"> <a href="#two">资讯管理</a>
		  <ul class="sub-menu">
			<li class="word"><a href="__APP__/News/index">资讯列表</a></li>
			<li class="word"><a href="__APP__/News/add">资讯添加</a></li>
		  </ul>
	   </li>
	   <li id="three" class="module"> <a href="#three">模块管理</a>
		  <ul class="sub-menu">
			<li><a href="__APP__/Module/index">模块列表</a></li>
		  </ul>
	   </li>   
	  </ul>
	  <div class="desc">
	     <p>Powered by 沸点工作室</p>
	  </div>
	</div>		
     </div>
     <div id="main">
         <div class="page-title">
            	系统首页&nbsp;&nbsp; <small>欢迎使用个人博客系统 </small>
         </div>
         
         <div class="catalog">
             <a href="">首页</a> 
         </div>
         
         <ul class="img-show">
             <li style="margin-left:0px;"><img src="__PUBLIC__/images/static/communicate.png"/></li>
             <li><img src="__PUBLIC__/images/static/reback.png"/></li>
             <li><img src="__PUBLIC__/images/static/create.png"/></li>
             <li><img src="__PUBLIC__/images/static/web.png"/></li>
         </ul>
         
         <div class="parts">
            <div class="welcome-part">
            <h>欢迎</h>
               <p1>你好！欢迎使用"玩转华农后台管理系统</p1></br>
               <p1>某某是你当前登录的用户名。如果你是第一次登录你的帐号，请点击<font><a href="#">更改初始密码</a></font></p1></br>
               <p1>你在本系统的管理权限是：root管理员</p1>
            </div>
         </div>
         
         <div class="parts">
             <div class="system-desc">
                <h>系统使用说明</h>
                   <p1>本系统左侧列出了本系统所有的功能模块，各个页面都有相应的版块说明，描述了该板块的内容、功能以及使用方法。
                   本系统实行分级管理，管理员分为root管理员、超级管理员、普通管理员。不同等级的管理员可以使用的功能有所不同。
                   如果你是root管理员或者超级管理员，可以进入“管理员列表”页面，查看具体的管理员分级信息。</p1>
             </div>
         </div>
         
         <div class="parts">
         <div class="about">
            <h>关于本系统</h>
            <p1>本系统是由华中农业大学沸点工作室web团队共同开发,版权归华中农业大学理学院沸点工作室所有。</p1></br>
            <p1>如果您在使用过程中遇到什么问题，或者出现漏洞、错误，请联系我，或者沸点工作室。</p1></br>
            <p1>QQ：2632807692    E-mail：2632807692 @qq.com</p1></br>
            <p1>沸点工作室地址：逸夫楼A405</p1></br>
         </div>
         </div>
     </div>
  
     </body>
   </html>