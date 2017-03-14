<?php
     session_start();
     unset($_SESSION["is_login"]);
     unset($_SESSION["usename"]);
     echo "<script>location.href='login.php'</script>";
	
	
?>