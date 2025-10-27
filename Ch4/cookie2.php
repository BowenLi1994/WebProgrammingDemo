<!DOCTYPE html PUBLIC "=//W3C//DTD XHMTL 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
  <html xmlns="http://www.w3.org/1999/xhmtl" xml:lang="en">
<head>
	<title>PHP Script using Cookies</title>
	<meta http-equiv="Content-Type" content="text/html; chatset=ISO-8859-1" />
</head> 
 
<body>
	<?php
		$strValue = "This is my first cookie";
		setcookie ("mycookie", $strValue);
		echo "Cookie set<br>";
	?>
</body>  
</html>
