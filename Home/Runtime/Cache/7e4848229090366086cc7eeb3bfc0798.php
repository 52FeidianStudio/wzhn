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
                <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/Index/getType/t/<?php echo ($vo["mid"]); ?>"><?php echo ($vo["mname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
         </div>
         
         <div class="main_right">
               <ul class="article">
                  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="parts">
               	      <div class="parts-left">
                      <p class="article-title"> <a href="__APP__/Index/content/e/<?php echo ($vo["nid"]); ?>"><?php echo ($vo['ntitle']); ?></a></p>
                      <div class="article-details"><font class="date">发布于:<?php echo ($vo['nbuild']); ?></font>&nbsp;&nbsp;<font class="skan">浏览次数:<?php echo ($vo['ntime']); ?></font>&nbsp;&nbsp;<font class="type">分类:<?php echo ($vo['mname']); ?></font></div></br>
                      <p class="article-content"><?php echo (subtext(strip_tags($vo['ncontent']),100)); ?></p>
                      <!-- htmlspecialchars_decode 是把实体字符转化成字符，比如 &lt; 变成 '<'  -->
                      <div class="see-more"><a href="__APP__/Index/content/e/<?php echo ($vo["nid"]); ?>">查看全文</a></div>
                      </div>
          
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
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