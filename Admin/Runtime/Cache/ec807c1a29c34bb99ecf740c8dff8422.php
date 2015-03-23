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
            	添加资讯&nbsp;&nbsp; 
      </div>
         
         <div class="catalog">
             <a href="">首页</a>&nbsp;>&nbsp;<a href="">添加资讯</a>
         </div>
         
         <div class="parts">
            <div class="part-desc">
               <h>板块说明</h>
               <p1>你可以在本版块编辑并发布新的文章</p1>
               <p1>添加时，必须指明该文章所属模块</p1>
            </div>
         </div>
    
         
         <div class="parts"">
         <div class="news-add">
            <h>填写信息</h>
            <form name="nform"action="__URL__/upload" method="post" onsubmit="return check();">
			 <script type="text/plain" id="editor" name="content">
  				</script>
  				<div class="text-part">
               <label for="title">*新闻标题</label>
               <input type="text" name="title" id="title" class="box-control" placeholder="填写文章标题" autocomplete="off"/>
               <label for="author">*新闻作者/来源</label>
                    <input type="text" name="author" id="author" class="box-control" placeholder="填写文章作者/来源" autocomplete="off"/>
               <label for="belong">新闻所属模块</label>
               <select  class="box-control" name="module">
                   <option value="0" selected>请选择资讯所属模块</option>
                   <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="{vo['mid']}"><?php echo ($vo['mname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
               </select>
              </br>
               <input type="submit" id="btn" value="发表"/>
               </div>
            </form>
         </div>
         
   </div>
 </div>
 </body>
 </html>
 <script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('editor');
</script>
<script type="text/javascript">
function check()
{
  if(document.nform.title.value=="")
  {
  alert("请填写文章标题!");
  document.nform.title.focus();
  return false;
  }
  if(document.nform.author.value=="")
  {
  alert("请填写文章作者/来源!");
  document.nform.author.focus();
  return false;
  }
}
</script>