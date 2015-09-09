<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
     
   //说是输入，实际上是更新
    
    $xiaoshiID=$_POST['xiaoshiID'];
    $niandu=$_POST['niandu'];
    $gongchang=$_POST['gongchang'];
    $xiaoshizd=$_POST['xiaoshizd'];
    $rizuidi=$_POST['rizuidi'];
    $yuezuidi=$_POST['yuezuidi'];        
    $beizhu=$_POST['beizhu'];
    
        
    if(!$niandu||!$gongchang||!$xiaoshizd||!$rizuidi||!$yuezuidi){
     echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinxiaoshimodify.php?xsID=$xiaoshiID' ></center>";
      exit;}      

      require('mysqli.inc.php ');//数据库连接
      $query="UPDATE xiaoshi SET niandu=?,gongchang=?,xiaoshizd=?,rizuidi=?,yuezuidi=?,beizhu=? WHERE xiaoshiID=?";
      $stmt=$mysqli->prepare($query);
      $stmt->bind_param("ssssssi",$niandu,$gongchang,$xiaoshizd,$rizuidi,$yuezuidi,$beizhu,$xiaoshiID); 
      $stmt->execute();
      echo"<span>*</span>";
      echo $stmt->affected_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 

include('kaoqinxiaoshi.php');
?>
