<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php

    $username=$_POST['username']; 
    $password=$_POST['password'];   
    $gongchang=$_POST['gongchang'];
    $bumen=$_POST['bumen'];
    $name=$_POST['name'];
    @$ro=$_POST['rolecode'];//$ro是数组,把数组转成字符串才能存入数据库
    @$rolecode=implode(',',$ro); //implode()函数,把数组元素组合为字符串。explode()函数,把字符串打散为数组。 
        
    if(!$username||!$password||!$name){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='usershuru.php' ></center>";
      exit;}
    

      require('mysqli.inc.php ');//数据库连接
      $query="insert into user (username,password,gongchang,bumen,name,rolecode) values(?,?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('ssssss',$username,$password,$gongchang,$bumen,$name,$rolecode); 
      $stmt->execute();  
       
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      
include('user.php');

?>
 

