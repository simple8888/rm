<?php
      //include('common.php'); 
      require('mysqli.inc.php');
      
      //$arr=array();      
      $result=$mysqli->query("select count(ygongID) as YGID from zhiliang where ygongID=$_GET[ygID]");
      $arr=$result->fetch_assoc();
    if(($arr["YGID"])>1){
        $mysqli->query("delete FROM zhiliang WHERE  zhiliangID=$_GET[zlID]");
        echo"<span>*</span>";
        echo $mysqli->affected_rows.'条记录被删除';
        echo"<span>*</span>";
        $result->close();
        $mysqli->close();
        include('zhilianggongzicx.php'); 
           }
    else{  
        echo"<span>*</span>";
        echo"0条记录被删除";
        echo"<span>*</span>";
        include('zhilianggongzicx.php'); 
             } 
?>

