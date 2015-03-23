<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
   <link rel="shortcut icon" type="image/x-icon" href="__PUBLIC__/images/icon/title.png"/>
   <title>玩转华农</title>
   <meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
   <head>
     <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css"/>
   </head>
 

<body>
      <div id="header">
         <div class="logo">
             <img src="__PUBLIC__/images/icon/logo.jpg"/>
         </div>
         <div class="search">
              <form id="form">
                  <input type="text" name="key" id="search_box" placeholder="请输入关键字进行搜索" autocomplete="off"/>
                  <input type="submit" id="btn" value="咨讯搜索"/>
              </form>
         </div>
      </div>
      
      <div id="container">
         <div class="main_left">
            <ul class="module_ul">
                <li class="hot"><a href="#">热门</a></li>
                <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($vo["mname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                
            </ul>
         </div>
         
         <div class="main_right">
               <ul class="article">
                 <li class="parts">
                  <div class="parts-left">
                  <p class="article-title"> <a href="">为什么你要建技术博客？</a></p>
                  <div class="article-details"><font class="date">发布于:</font>&nbsp;&nbsp;<font class="skan">浏览次数:</font>&nbsp;&nbsp;<font class="type">分类</font></div></br>
                  <p1 class="article-content">柴静发布这个视频之日起就在刻意把自己的影响力带入到视频中，其实单纯讨论雾霾来讲，无可厚非，但是保护环境这个话题不会因为你柴静不提大家就不关注，说白了就是想借雾霾这个话题把自己炒作起来。当一个人刻意要把自己塑造成神的时候，公众就要想尽办法把她打下神坛，不关乎到道德，也不关乎你是不是中国人！...</p1>
                  <div class="see-more"><a href="">查看全文</a></div>
                  
                  </div>
                  
                  <div class="parts-right">
                     <img src="__PUBLIC__/images/static/create.png"/>
                  </div>
                </li>
                 
                  <li class="parts">
                   <div class="parts-left">
                  <p class="article-title"> <a href="">为什么你要建技术博客？</a></p>
                  <div class="article-details"><font class="date">发布于:</font>&nbsp;&nbsp;<font class="skan">浏览次数:</font>&nbsp;&nbsp;<font class="type">分类</font></div></br>
                  <p1 class="article-content">柴静发布这个视频之日起就在刻意把自己的影响力带入到视频中，其实单纯讨论雾霾来讲，无可厚非，但是保护环境这个话题不会因为你柴静不提大家就不关注，说白了就是想借雾霾这个话题把自己炒作起来。当一个人刻意要把自己塑造成神的时候，公众就要想尽办法把她打下神坛，不关乎到道德，也不关乎你是不是中国人！...</p1>
                  <div class="see-more"><a href="">查看全文</a></div>
                  
                  </div>
                  
                  <div class="parts-right">
                     <img src="__PUBLIC__/images/static/create.png"/>
                  </div>
                </li>
                
                </ul>
                  
                
              
              </div>
      
        
      </div>
   
   <div id="footer">
      <p>中国.湖北.武汉 南湖狮子山街一号 430070</p>
      <p>CopyRight©2015 版权所有：华中农业沸点工作室</p>
      <p>设计：沸点工作室  &nbsp; &nbsp; &nbsp;技术支持：沸点工作室</p>
   </div>
   
   </body>
   </html>