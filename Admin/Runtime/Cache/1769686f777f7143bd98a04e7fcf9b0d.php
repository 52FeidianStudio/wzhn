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
            <h>模块说明</h>
            <p1>本模块只能由超级管理员才能更改，在该模块中，你可以浏览各个模块，还可以对模块进行添加</p1>
           </div>
         </div>
         
         <div class="parts" style="width:540px;">
           <div class="module-list">
              <h style="width:520px">模块列表</h>
              <table style="width:540px">
                 <tr>
                    <th class="first">编号</th>
                    <th class="first">模块名</th>
                    <th class="first">模块创立时间</th>
                    <th class="first">操作</th>
                 </tr>
               <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<th><?php echo ($vo["mid"]); ?></th><th><?php echo ($vo["mname"]); ?></th><th><?php echo ($vo["mtime"]); ?></th><th><a href="__APP__/Module/ndelete/id/<?php echo ($vo["mid"]); ?>" onclick="return confirm('确定要删除这个模块吗?');">删除</a></th>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </table>
			  <br>
                 <p align="center"><?php echo ($show); ?></p>
              </div>
           </div>
           
           <div class="parts" style="width:492px;margin-left:10px">
              <div class="module-add">
                 <h style="width:472px;">模块添加</h>
                 <form action="__APP__/Module/add" method="post" name="mform" onsubmit="return check();">
                      <label for="name">*模块名</label>
                      <input type="text" name="nickname" id="nickname" class="box-control" placeholder="填写模块名称" autocomplete="off"/>
					   <!--<label for="name">*模块使用者</label>
                      <input type="text" name="ofuser" id="ofuser" class="box-control" placeholder="填写名称" autocomplete="off"/> -->
                      <label for="manger">*模块管理员</label>
                      <select class="box-control" name="muser">
                         <option value="0" selected>root管理员</option>
                         <option value="1">普通管理员</option>
                      </select>
                      <input type="submit" id="btn" value="添加"/>
                 </form>
              </div>
           </div>
     </div>
  
  </body>
  </html>
  <script type="text/javascript">
function check()
{
  if(document.mform.nickname.value=="")
  {
  alert("请填写模块名称!");
  document.mform.nickname.focus();
  return false;
  }
}
</script>