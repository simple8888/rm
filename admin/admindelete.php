<?php
      //include('common.php'); 
      require('mysqli.inc.php');

      $mysqli->query("DELETE FROM admin WHERE adminid=$_GET[amid]");
	
      echo"<span>*</span>";
      echo $mysqli->affected_rows.'条记录被删除';
      echo"<span>*</span>";
      $mysqli->close();
      include('admin.php'); 
?>