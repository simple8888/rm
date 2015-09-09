<?php
      //include('common.php'); 
      require('mysqli.inc.php');

      $mysqli->query("DELETE FROM role WHERE roleid=$_GET[rlid]");
	
      echo"<span>*</span>";
      echo $mysqli->affected_rows.'条记录被删除';
      echo"<span>*</span>";
      $mysqli->close();
      include('role.php'); 
?>