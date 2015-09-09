<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
       
    $gongchang=$_POST['gongchang'];
    $pandianyuefen=$_POST['pandianyuefen'];
    $qishiriqi=$_POST['qishiriqi'];
    $zhongzhiriqi=$_POST['zhongzhiriqi'];
    $beizhu=$_POST['beizhu'];
        
    if(!$gongchang||!$pandianyuefen||!$qishiriqi||!$zhongzhiriqi){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='chanliangzhouqishuru.php' ></center>";
      exit;}
    

      require('mysqli.inc.php ');//数据库连接

      $query="insert into zhouqi (gongchang,pandianyuefen,qishiriqi,zhongzhiriqi,beizhu) values(?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('sssss',$gongchang,$pandianyuefen,$qishiriqi,$zhongzhiriqi,$beizhu); 
      $stmt->execute();
       
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      
include('chanliangzhouqi.php');

?>
 

