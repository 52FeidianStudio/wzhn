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
            	资讯列表&nbsp;&nbsp;
      </div>
         
         <div class="catalog">
             <a href="">首页</a>&nbsp;>&nbsp;<a href="">资讯列表</a>
         </div>
         
         <div class="parts" style="width:452px;">
            <div class="part-desc">
               <h style="width:430px;">板块说明</h>
               <p1>本版块用于查看已经发表的文章。还有文章搜索功能，你还可以点击按钮<font><a href="">写新文章</a></font></p1>
            </div>
          
         </div>
         <div class="parts" style="width:574px;margin-left:20px;height:156px;">
             <h style="width:553px">搜索</h>
             <form id="search-news" action="__APP__/News/index" method="get">
                   &nbsp;&nbsp;<span>搜索选项</span>&nbsp;&nbsp;:
                   <select id="option" name="option-key" class="select-control">
                        <option selected value="0">按标题</option>
                        <option value="1">按上传者</option>
                        <option value="2">阅读量</option>
                    </select>
                    
                    <input type="text" name="key" class="select-control" style="width:230px;"/>
                    <input type="submit" id="sea-btn" value="搜索" name="submit"/>
                    
                    &nbsp;&nbsp;<span>选择模块</span>&nbsp;&nbsp;: 
                    <select id="option" name="module" class="select-control" style="margin-top:-12px">
                       <option value="0" selected>看电影</option>
                       <option value="1">校园活动</option>
                    </select>
                    </br>  </br>
                     &nbsp;&nbsp;<span>对当前结果</span>&nbsp;&nbsp;: 
                     <font><a href="">按发布时间排序</a></font>  &nbsp;&nbsp;<font><a href="">按阅读量排序</a></font>&nbsp;&nbsp;<font><a href="">按最近修改排序</a></font>
             
             </form>
         </div>
         <div class="parts">
            <div class="news-list">
                <h>资讯列表</h>
                <table>
                    <tr>
                       <th class="first">编号</th>
                       <th class="first">标题</th>
                       <th class="first">作者</th>
                       <th class="first">内容</th>
                       <th class="first">所属模块</th>
                       <th class="first">图片</th>
                       <th class="first">发布/更新日期</th>
                       <th class="first">阅读次数</th>
                       <th class="first">操作</th>
                    
                    </tr>
                
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<th><?php echo ($vo["nid"]); ?></th><th><?php echo ($vo["ntitle"]); ?></th><th><?php echo ($vo["nfrom"]); ?></th><th></th><th><?php if($vo["mid"] == 0): ?>看电影<?php else: ?>校园活动<?php endif; ?></th><th><?php echo ($vo["nimage"]); ?></th><th><?php echo ($vo["nupdate"]); ?></th><th><?php echo ($vo["time"]); ?></th><th><a href="__APP__/News/ndelete/id/<?php echo ($vo["nid"]); ?>" onclick="return confirm('确定要删除这条信息吗?');">删除</a></th>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
				<br>
                 <p align="center"><?php echo ($show); ?></p>
            </div>
          
         </div>
    
   
  </div>
    
  </body>
  </html>