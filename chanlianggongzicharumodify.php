<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
     include('mysqli.inc.php ');//数据库连接
   //说是输入，实际上是更新，因为chanliang表的ygongID已被提前插入。    
    $ygongID=$_POST['ygongID'];
    $chanliangID=$_POST['chanliangID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
    $gongxu=$_POST['gongxu']; 
    $riqi=$_POST['riqi'];

    $result=$mysqli->query("select gongjia from gongxu where gongxu='$gongxu'");//通过工序求得工价
    $arr=$result->fetch_assoc();
    $result->close();
    //@$arr[gongjia];工价
 
    $chanliang=$_POST['chanliang'];
    $channengbt=$_POST['channengbt'];
    $zuidibt=$_POST['zuidibt'];
    $zhuanghuo=$_POST['zhuanghuo'];
    $xiehuo=$_POST['xiehuo'];
    $zahuo=$_POST['zahuo'];
    $yichang=$_POST['yichang'];
    $chanlianggongzi=@$arr[gongjia]*$chanliang; 
   
        
    if(!$riqi){
     echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='chanlianggongzimodify.php?ygID=$ygongID&clID=$chanliangID' ></center>";
      exit;}      

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE chanliang SET gongxu=?,riqi=?,chanliang=?,channengbt=?,zuidibt=?,zhuanghuo=?,xiehuo=?,zahuo=?,yichang=?,chanlianggongzi=? WHERE ygongID=? and chanliangID=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("ssssssssssii",$gongxu,$riqi,$chanliang,$channengbt,$zuidibt,$zhuanghuo,$xiehuo,$zahuo,$yichang,$chanlianggongzi,$ygongID,$chanliangID); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('chanlianggongzicx.php');
?>
