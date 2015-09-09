<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php

     include('mysqli.inc.php ');//数据库连接
   //还输入原来的yuangongID
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
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='chanlianggongzishuru.php?ygID=$ygongID&clID=$chanliangID' ></center>";
      exit;}

      //require('mysqli.inc.php ');//数据库连接

      $query="insert into chanliang (ygongID,gongxu,riqi,chanliang,channengbt,zuidibt,zhuanghuo,xiehuo,zahuo,yichang,chanlianggongzi) values(?,?,?,?,?,?,?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('issssssssss',$ygongID,$gongxu,$riqi,$chanliang,$channengbt,$zuidibt,$zhuanghuo,$xiehuo,$zahuo,$yichang,$chanlianggongzi); 
      $stmt->execute();
      
      $mysqli->query("DELETE FROM chanliang WHERE riqi is NULL and ygongID=$ygongID ");//删除第一次从renliziyuancharu.php插入的只有一个yuangongID字段的需要更新才能输入的记录 

      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      
include('chanlianggongzicx.php');

?>
 

