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

    $ygongID=$_POST['ygongID'];//这一行和下一行，是为了日期为空时原路返回用的。
    $zhiliangID=$_POST['zhiliangID'];
    //$riqi=($_POST['riqi']==null?'0000-00-00':$_POST['riqi']);
     $riqi=$_POST['riqi'];       

        
    if(!$riqi){
      echo"<center><span><p style='margin-top:360px;'>*温馨提示*</p></span></center>";
      echo"<center>有必填项未输入完整，全部必填项输入完后再提交!</center>";echo"<br />";
      echo"<center><input class='button'type='button' value='返回重新输入' onClick=window.location.href='zhilianggongzishuru.php?ygID=$ygongID&zlID=$zhiliangID' ></center>";
      exit;}

      require('mysqli.inc.php ');//数据库连接
      $result=$mysqli->query("select riqi,ygongID,zhiliangID from yuangong left join zhiliang on yuangongID=ygongID where ($gzdd) and shifouzaizhi='是' ");
      @$i=0;
      while($row=$result->fetch_row()){
      $res=$mysqli->query("select count(ygongID) as YGID from zhiliang where ygongID=$row[1]");
      $arr=$res->fetch_assoc(); 
      if((($arr["YGID"])>1) and ($riqi==$row[0])){ //删除ygongID数大于1的当日的数据，留最后一个 
      $query="delete from zhiliang where riqi='$riqi' and zhiliangID=$row[2]";
      $mysqli->query($query);}

      if((($arr["YGID"])==1) and ($riqi==$row[0])){//把留一下的最后一条记录，除了ygongID外全部清空，相当于删除该条记录，留下ygongID用来下次批量插入日期
      $mysqli->query("UPDATE zhiliang SET riqi=null,zhiliangjl='',zhiliangkk='',zhilianggongzi='' WHERE ygongID=$row[1]");
                              }
      if($riqi==$row[0]){$i=$i+1;}
        }

      echo"<span>*</span>";
      echo $i.'条记录被删除';
      echo"<span>*</span>";
      $result->close();
      $res->close();
      $mysqli->close();
      
include('zhilianggongzicx.php');

?>
 

