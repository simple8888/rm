﻿<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php


   //还输入原来的yuangongID
    $ygongID=$_POST['ygongID'];
    $shebaoID=$_POST['shebaoID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
    $jishu=$_POST['jishu'];        
    $bili=$_POST['bili'];
    $xianzhong=$_POST['xianzhong'];
    $shebao=$jishu*$bili;
    $beizhu=$_POST['beizhu'];
        
    if((!$jishu)or(!$bili)or(!$xianzhong)){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinshebaoshuru.php?ygID=$ygongID&sbID=$shebaoID' ></center>";
      exit;}

      require('mysqli.inc.php ');//数据库连接

      $query="insert into shebao (ygongID,riqi,zhiliangjl,zhiliangkk,zhilianggongzi) values(?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('issss',$ygongID,$riqi,$zhiliangjl,$zhiliangkk,$zhilianggongzi); 
      $stmt->execute();
      
      $mysqli->query("DELETE FROM zhiliang WHERE riqi is NULL and ygongID=$ygongID ");//删除第一次从renliziyuancharu.php插入的只有一个yuangongID字段的需要更新才能输入的记录 

      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      
include('zhilianggongzicx.php');

?>
 

