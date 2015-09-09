
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page_title; ?></title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<style>
span{color:red;}
</style>
</head>
<body>
    <h2>请输入员工基本信息:(带<span>*</span>的为必填项)</h2><br />
   
<?php
         
   //    
    $gonghao=$_POST['gonghao'];
    $xingming=$_POST['xingming'];
    $xingbie=$_POST['xingbie'];
    $chushengriqi=$_POST['chushengriqi'];
    //$nianling=22;
    $sfzh=$_POST['shenfenzhenghao'];
    $shouji=$_POST['shouji'];
    $guhua=$_POST['guhua'];
    $email=$_POST['email'];
    $hunfou=$_POST['hunfou'];
    $jiguan=$_POST['jiguan'];
    $xianjuzhudi=$_POST['xianjuzhudi'];
    $techang=$_POST['techang'];
    $beizhu=$_POST['beizhu'];
    
    if(!$gonghao||!$xingming||!$xingbie||!$chushengriqi||!$sfzh||!$shouji){
      echo"<span>*</span>";
      echo"有必填项未输入完整，全部必填项输入完后再提交!";
      exit;}


    if(!get_magic_quotes_gpc()){  //addslashes() 函数在指定的预定义字符前添加反斜杠。如果 magic_quotes_gpc 为关闭时返回 0，否则返回 1。在 PHP 5.4.O 起将始终返回 FALSE
     
      $gonghao=addslashes($gonghao);
      $xingming=addslashes($xingming);
      $xingbie=addslashes($xingbie);
      $chushengriqi=addslashes($chushengriqi);
      //$nianling=addslashes($nianling);
      $sfzh=addslashes($sfzh);
      $shouji=addslashes($shouji);
      $guhua=addslashes($guhua);
      $email=addslashes($email);
      $hunfou=addslashes($hunfou);
      $jiguan=addslashes($jiguan);
      $xianjuzhudi=addslashes($xianjuzhudi);
      $techang=addslashes($techang);
      $beizhu=addslashes($beizhu);
           
      }
      //数据库已连接

      require('mysqli.inc.php ');
       //$mysqli=new mysqli('localhost','root','20541297','roman'); D:\Apache24\htdocs\rm\includes\mysqli.inc.php 
      $query="insert into yuangong (number,name,sex,birthday,idno,cell,tel,email,marriage,hometown,livesite,feature,memo) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('sssssssssssss',$gonghao,$xingming,$xingbie,$chushengriqi,$sfzh,$shouji,$guhua,$email,$hunfou,$jiguan,$xianjuzhudi,$techang,$beizhu); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入.';
      $stmt->close();
      $mysqli->close(); 


?>
</body>
</html>