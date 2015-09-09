
<?php
     //require"common.php";   
       
    $gonghao=$_POST['gonghao'];
    $xingming=$_POST['xingming'];
    $xingbie=$_POST['xingbie'];
    $chushengriqi=($_POST['chushengriqi']==null?'0000-00-00':$_POST['chushengriqi']);
    //$nianling=22;
    $sfzh=$_POST['shenfenzhenghao'];
    $shouji=$_POST['shouji'];
    $guhua=$_POST['guhua'];
    $email=$_POST['email'];
    $hunfou=$_POST['hunfou'];
    $jiguan=$_POST['jiguan'];
    $xianjuzhudi=$_POST['xianjuzhudi'];

    $zhiwu=$_POST['zhiwu'];
    $ruzhiriqi=($_POST['ruzhiriqi']==null?'0000-00-00':$_POST['ruzhiriqi']); 
    $hetongqixian=$_POST['hetongqixian'];
    $gongzuodidian=$_POST['gongzuodidian'];
    $shifouzhuchang=$_POST['shifouzhuchang'];
    $shifouzaizhi=$_POST['shifouzaizhi'];
    $lizhiriqi=($_POST['lizhiriqi']==null?'0000-00-00':$_POST['lizhiriqi']);  

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

      $zhiwu=addslashes($zhiwu);
      $ruzhiriqi=addslashes($ruzhiriqi);
      $hetongqixian=addslashes($hetongqixian);
      $gongzuodidian=addslashes($gongzuodidian);
      $shifouzhuchang=addslashes($shifouzhuchang);
      $shifouzaizhi=addslashes($shifouzaizhi);
      $lizhiriqi=addslashes($lizhiriqi);

      $techang=addslashes($techang);
      $beizhu=addslashes($beizhu);
           
      }
      

      require('mysqli.inc.php');//数据库连接
      $query="insert into yuangong (number,name,sex,birthday,idno,cell,tel,email,marriage,hometown,livesite,zhiwu,ruzhiriqi,hetongqixian,gongzuodidian,shifouzhuchang,shifouzaizhi,lizhiriqi,feature,memo) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('ssssssssssssssssssss',$gonghao,$xingming,$xingbie,$chushengriqi,$sfzh,$shouji,$guhua,$email,$hunfou,$jiguan,$xianjuzhudi,$zhiwu,$ruzhiriqi,$hetongqixian,$gongzuodidian,$shifouzhuchang,$shifouzaizhi,$lizhiriqi,$techang,$beizhu); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入.';
      echo"<span>*</span>";     
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('renliziyuan.php');
?>
