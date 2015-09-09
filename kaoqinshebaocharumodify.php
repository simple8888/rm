<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
   //说是输入，实际上是更新，因为shebao表的ygongID已被提前插入。
    
    $ygongID=$_POST['ygongID'];
    $shebaoID=$_POST['shebaoID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
    $jishu=$_POST['jishu'];        
    $bili=$_POST['bili'];
    $xianzhong=$_POST['xianzhong'];
    $shebao=round(($jishu*$bili*0.01),2);
    $beizhu=$_POST['beizhu'];
   
    if((!$jishu)or(!$xianzhong)){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinshebaomodify.php?ygID=$ygongID&sbID=$shebaoID' ></center>";
      exit;}             

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE shebao SET jishu=?,bili=?,xianzhong=?,shebao=?,beizhu=? WHERE ygongID=? and shebaoID=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("sssssii",$jishu,$bili,$xianzhong,$shebao,$beizhu,$ygongID,$shebaoID); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('kaoqinshebaocx.php');
?>
