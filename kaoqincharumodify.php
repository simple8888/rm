<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
   //说是输入，实际上是更新，因为kaoqin表的yuangongID已被提前插入。
    
    $kaoqinID=$_POST['kaoqinID'];
    $ygongID=$_POST['ygongID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']); 
    $riqi=$_POST['riqi'];        
    $fadingcq=$_POST['fadingcq'];
    $fadingjb=$_POST['fadingjb'];
    $zhoumojb=$_POST['zhoumojb'];
    $guodingdx=$_POST['guodingdx'];
    $hunjia=$_POST['hunjia'];
    $chanjia=$_POST['chanjia'];
    $sangjia=$_POST['sangjia'];
    $bingjia=$_POST['bingjia'];
    $pingshiqj=$_POST['pingshiqj'];
    $zhoumoqj=$_POST['zhoumoqj'];
    $quanqin=$_POST['quanqin'];
    $dizeng=$_POST['dizeng'];
    $peixun=$_POST['peixun'];
    $jintie=$_POST['jintie'];
    $hongbao=$_POST['hongbao'];
    $fazhan=$_POST['fazhan'];
    $gaowen=$_POST['gaowen'];
    $gongshang=$_POST['gongshang'];
    $shuidian=$_POST['shuidian'];
        
    if(!$riqi){
     echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinmodify.php?ygID=$ygongID&kqID=$kaoqinID' ></center>";
      exit;}      

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE kaoqin SET riqi=?,fadingcq=?,fadingjb=?,zhoumojb=?,guodingdx=?,hunjia=?,chanjia=?,sangjia=?,bingjia=?,pingshiqj=?,zhoumoqj=?,quanqin=?,dizeng=?,peixun=?,jintie=?,hongbao=?,fazhan=?,gaowen=?,gongshang=?,shuidian=? WHERE ygongID=? and kaoqinID=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("ssssssssssssssssssssii",$riqi,$fadingcq,$fadingjb,$zhoumojb,$guodingdx,$hunjia,$chanjia,$sangjia,$bingjia,$pingshiqj,$zhoumoqj,$quanqin,$dizeng,$peixun,$jintie,$hongbao,$fazhan,$gaowen,$gongshang,$shuidian,$ygongID,$kaoqinID); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('kaoqincx.php');
?>
