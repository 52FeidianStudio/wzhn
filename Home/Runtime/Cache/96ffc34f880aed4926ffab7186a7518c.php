<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
   <link rel="shortcut icon" type="image/x-icon" href="__PUBLIC__/images/icon/title.png"/>
   <title>玩转华农</title>
   <meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
     <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/detail.css"/>
   </head>
   
   <body>
      <div id="article-content">
      <div class="center">
         <div class="article-title"><?php echo ($New[0]['ntitle']); ?></div>
        <hr>
         <div class="article-detail">
           <font class="date">发布于:<?php echo ($New[0]['nfrom']); ?></font>&nbsp;&nbsp;<font class="skan">浏览次数:<?php echo ($New[0]['ntime']); ?></font>&nbsp;&nbsp;<font class="type">分类:<?php echo ($New[0]['mname']); ?></font>
         </div>
         
         <div class="content">
             <p1><?php echo ($New[0]['ncontent']); ?></p1>
         </div>
      </div>
   </div>
   </body>

</html>