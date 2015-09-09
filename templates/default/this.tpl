{include file="default/header.inc.tpl"}
<table border="1" width="80%" align="center">
<caption><h1>联系人信息</h1></caption>
<tr>
<th>姓名</th><th>传真</th><th>电邮</th><th>电话</th>
</tr>
{foreach from=$contact item=row}
       <tr>
        {foreach from=$row item=col}
               <td>{$col}</td>
        {/foreach}
        </tr>
{/foreach}
</table>   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>关于本站|联系我们</title>
    <style type="text/css">
       ul { margin-left: 0;	
padding-left: 0;			
list-style-type: none;						
float: left;			
width:140px;}	
    
        .mu .aSelected{ background-color:a9f9f4;color:red;text-decoration: none; }         
        .mu a{ background-color:#fff;color:#CC6714;text-decoration: none; }
        .mu a:hover{ color:green;text-decoration: none; }
    </style>
</head>
<body>
<div class="wrap">
    <div class="main">
        <div class="logo aLogo"><a class="logo_a" title="设为首页"></a></div>
        <div class="bdn">当前位置：
            <a href="./">首页</a> >> 关于本站
        </div>
        <div class="lmu">
            <div class="idt">关于本站</div>
            <div class="mu" id="mu">
                <ul>
                    <li><a href="#">系统首页</a></li>
                    <li><a href="#">诚聘英才</a></li>
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">使用声明</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var mu = document.getElementById("mu");
        var a = mu.getElementsByTagName("a");
        mu.onclick = function(e){
            e = e || window.event;
            var target = e.srcElement || e.target;
            for(var i=0,len=a.length;i<len;i++){
                a[i].className = target == a[i] ? "aSelected":"";
            }
        };
    </script>
</div>
</body>
</html>

{include file="default/footer.inc.tpl"} 

