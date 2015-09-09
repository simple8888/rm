<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
   //说是输入，实际上是更新，因为zhiliang表的ygongID已被提前插入。
    
    $zhiliangID=$_POST['zhiliangID'];
    $ygongID=$_POST['ygongID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']); 
    $riqi=$_POST['riqi'];        
    $zhiliangjl=$_POST['zhiliangjl'];
    $zhiliangkk=$_POST['zhiliangkk'];
    $zhilianggongzi=$zhiliangjl-$zhiliangkk;
   
        
    if(!$riqi){
     echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='zhilianggongzimodify.php?ygID=$ygongID&zlID=$zhiliangID' ></center>";
      exit;}      

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE zhiliang SET riqi=?,zhiliangjl=?,zhiliangkk=?,zhilianggongzi=? WHERE ygongID=? and zhiliangID=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("ssssii",$riqi,$zhiliangjl,$zhiliangkk,$zhilianggongzi,$ygongID,$zhiliangID); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('zhilianggongzicx.php');
?>
