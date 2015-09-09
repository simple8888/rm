<style>
span{color:red;}
.button {width:100px;color:#CC6714;}
a:link{text-decoration: none;}
</style>
<?php
    
    SESSION_START();
    //echo"$_SESSION[factory]";
    if(@$_SESSION[factory]=="bohan"){ $gzdd="gongzuodidian='博涵'";}
    if(@$_SESSION[factory]=="luomai"){ $gzdd="gongzuodidian='罗麦'";}
    if(@$_SESSION[factory]=="all"){  $gzdd="gongzuodidian='罗麦' or gongzuodidian='博涵'";}
    if(@$_SESSION[factory]==""){ $gzdd="gongzuodidian='罗麦' or gongzuodidian='博涵'";}

    if(@$_SESSION[xianzhong]=="三险"){ $xz="xianzhong='三险'";}//xz=xianzhong
    if(@$_SESSION[xianzhong]=="五险"){ $xz="xianzhong='五险'";}
    if(@$_SESSION[xianzhong]=="全部"){ $xz="xianzhong='三险' or xianzhong='五险'";}
    if(@$_SESSION[xianzhong]==""){ $xz="xianzhong='三险' or xianzhong='五险'";}

    $ygongID=$_POST['ygongID'];//这一行和下一行，是为了日期为空时原路返回用的。
    $shebaoID=$_POST['shebaoID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
    $bili=$_POST['bili'];
     
   
    if(!$bili){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='kaoqinshebaomodify.php?ygID=$ygongID&sbID=$shebaoID' ></center>";
      exit;}

      require('mysqli.inc.php ');//数据库连接       
      
      //向shebao表批量更新缴纳比例 
      $result=$mysqli->query("select ygongID,jishu from yuangong left join shebao on yuangongID=ygongID  where ($gzdd) and ($xz) and shifouzaizhi='是'  group by ygongID");
      while($row=$result->fetch_row()){
      $query="update shebao set bili=?,shebao=? where ygongID=?";
      $stmt=$mysqli->prepare($query);
      $sheb=round($bili*$row[1]*0.01,2);
      $stmt->bind_param('ssi',$bili,$sheb,$row[0]); 
      $stmt->execute();}

      echo"<span>*</span>";
      echo $result->num_rows.'条记录被修改';
      echo"<span>*</span>";
      $stmt->close();
      $mysqli->close(); 
    
include('kaoqinshebaocx.php');

?>
 

