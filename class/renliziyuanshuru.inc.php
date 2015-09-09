<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page_title; ?></title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h2>请输入员工基本信息:(带<span>*</span>的为必填项)</h2><br />
   
    <form action="modules/renliziyuancharu.inc.php" method="POST">
    工号:<input name="gonghao" type="text" size=40 /><span>*</span> <br />    
    姓名:<input name="xingming" type="text" size=40 /><span>*</span> <br />
    性别:<input name="xingbie" type="radio" value="男" checked/>男 <input name="xingbie" type="radio" value="女" />女 <span>*</span><br />  
    出生日期:<input name="chushengriqi" type="text" size=34 /><span>*</span>例如:2015-01-12 <br />  
    <!--age -->
    身份证号:<input name="shenfenzhenghao" type="text" size=34 /><span>*</span> <br />
    手机:<input name="shouji" type="text" size=40 /><span>*</span> <br />
    固话:<input name="guhua" type="text" size=40 /> <br />    
    Email:<input name="email" type="text" size=39 /> <br />
    婚否:<input name="hunfou" type="radio" value="是" checked/>是 <input name="hunfou" type="radio" value="否" />否 <input name="hunfou" type="radio" value="未提供" />未提供<br /> 
    籍贯:<input name="jiguan" type="text" size=120 /> <br />
    现居住地:<input name="xianjuzhudi" type="text" size=114 /> <br />
    特长:<input name="techang" type="text" size=120 /> <br />
    备注:<textarea style="vertical-align:middle;" name="beizhu" cols="88" rows=3 /></textarea><br />
    <center> <input class="button" type="submit" name="submit" value="提交" />
    <input class="button" type="reset" name="reset" value="重置" /> </center>

    </form> 

</body>
</html>