<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php

    $niandu=$_POST['niandu'];   
    $gongchang=$_POST['gongchang'];
    $xiaoshizd=$_POST['xiaoshizd'];
    $rizuidi=$_POST['rizuidi'];
    $yuezuidi=$_POST['yuezuidi'];
    $beizhu=$_POST['beizhu'];
        
    if(!$niandu||!$gongchang||!$xiaoshizd||!$rizuidi||!$yuezuidi){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinxiaoshishuru.php' ></center>";
      exit;}
    

      require('mysqli.inc.php ');//数据库连接

      $query="insert into xiaoshi (niandu,gongchang,xiaoshizd,rizuidi,yuezuidi,beizhu) values(?,?,?,?,?,?)";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param('ssssss',$niandu,$gongchang,$xiaoshizd,$rizuidi,$yuezuidi,$beizhu); 
      $stmt->execute();
       
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被输入';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
      
include('kaoqinxiaoshi.php');

?>
 

