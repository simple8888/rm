<?php
      //include('common.php'); 
      require('mysqli.inc.php');
      
      //$arr=array();      
      $result=$mysqli->query("select count(ygongID) as YGID from chanliang where ygongID=$_GET[ygID]");
      $arr=$result->fetch_assoc();
    if(($arr["YGID"])>1){            //等于1时不删除，即剩最后一个
        $mysqli->query("delete FROM chanliang WHERE  chanliangID=$_GET[clID]");
        echo"<span>*</span>";
        echo $mysqli->affected_rows.'条记录被删除';
        echo"<span>*</span>";
        $result->close();
        $mysqli->close();
        include('chanlianggongzicx.php'); 
           }
    else{  
        echo"<span>*</span>";
        echo"0条记录被删除";
        echo"<span>*</span>";
        include('chanlianggongzicx.php'); 
             } 
?>

