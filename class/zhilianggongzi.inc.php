<?php
require('./includes/salary.inc.header.html');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page_title; ?></title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="/example/html/form_action.asp" method="get">
  <p>First name: <input type="text" name="fname" /></p>
  <p>Last name: <input type="text" name="lname" /></p>
  <input type="submit" value="Submit" />
</form>

</body>
</html>

