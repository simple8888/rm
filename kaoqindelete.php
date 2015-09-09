<?php
      //include('common.php'); 
      require('mysqli.inc.php');
      
      //$arr=array();      
      $result=$mysqli->query("select count(ygongID) as YGID from kaoqin where ygongID=$_GET[ygID]");
      $arr=$result->fetch_assoc();
    if(($arr["YGID"])>1){
        $mysqli->query("delete FROM kaoqin WHERE  kaoqinID=$_GET[kqID]");
        echo"<span>*</span>";
        echo $mysqli->affected_rows.'条记录被删除';
        echo"<span>*</span>";
        $result->close();
        $mysqli->close();
        include('kaoqincx.php'); 
           }
    else{  
        echo"<span>*</span>";
        echo"0条记录被删除";
        echo"<span>*</span>";
        include('kaoqincx.php'); 
             } 
?>

