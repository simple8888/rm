<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
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
    $yuangongID=$_POST['yuangongID'];
      
    if(!$gonghao||!$xingming||!$xingbie||!$chushengriqi||!$sfzh||!$shouji){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交修改!</center>";echo"<br />";
      echo"<center><button class='button'> <a href='renlimodify.php?ygID=$yuangongID'>返回重新修改</a></button></center>";
      exit;}


      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE yuangong SET  number=?,name=?,sex=?,birthday=?,idno=?,cell=?,tel=?,email=?,marriage=?,hometown=?,livesite=?,zhiwu=?,ruzhiriqi=?,hetongqixian=?,gongzuodidian=?,shifouzhuchang=?,shifouzaizhi=?,lizhiriqi=?,feature=?,memo=?  WHERE yuangongID=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('ssssssssssssssssssssi',$gonghao,$xingming,$xingbie,$chushengriqi,$sfzh,$shouji,$guhua,$email,$hunfou,$jiguan,$xianjuzhudi,$zhiwu,$ruzhiriqi,$hetongqixian,$gongzuodidian,$shifouzhuchang,$shifouzaizhi,$lizhiriqi,$techang,$beizhu,$yuangongID); 
      $stmt->execute();
      

      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('renliziyuan.php');
?>
