<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
   //说是输入，实际上是更新，因为kaoqin表的yuangongID已被提前插入。
    //$riqi=($_GET['riqi']==null?'0000-00-00':$_GET['riqi']);

    $riqi=$_GET['riqi'];        
    $fadingcq=$_GET['fadingcq'];
    $fadingjb=$_GET['fadingjb'];
    $zhoumojb=$_GET['zhoumojb'];
    $guodingdx=$_GET['guodingdx'];
    $hunjia=$_GET['hunjia'];
    $chanjia=$_GET['chanjia'];
    $sangjia=$_GET['sangjia'];
    $bingjia=$_GET['bingjia'];
    $pingshiqj=$_GET['pingshiqj'];
    $zhoumoqj=$_GET['zhoumoqj'];
    $quanqin=$_GET['quanqin'];
    $dizeng=$_GET['dizeng'];
    $peixun=$_GET['peixun'];
    $jintie=$_GET['jintie'];
    $hongbao=$_GET['hongbao'];
    $fazhan=$_GET['fazhan'];
    $gaowen=$_GET['gaowen'];
    $gongshang=$_GET['gongshang'];
    $shuidian=$_GET['shuidian'];
    $yuangongID=$_GET['yuangongID'];    
    if(!$riqi){
     echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinmodify.php?ygID=$yuangongID' ></center>";
      exit;}


      

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE kaoqin SET riqi=?,fadingcq=?,fadingjb=?,zhoumojb=?,guodingdx=?,hunjia=?,chanjia=?,sangjia=?,bingjia=?,pingshiqj=?,zhoumoqj=?,quanqin=?,dizeng=?,peixun=?,jintie=?,hongbao=?,fazhan=?,gaowen=?,gongshang=?,shuidian=? WHERE yuangongID=? ";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("ssssssssssssssssssssi",$riqi,$fadingcq,$fadingjb,$zhoumojb,$guodingdx,$hunjia,$chanjia,$sangjia,$bingjia,$pingshiqj,$zhoumoqj,$quanqin,$dizeng,$peixun,$jintie,$hongbao,$fazhan,$gaowen,$gongshang,$shuidian,$yuangongID); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('kaoqin.php');
?>
