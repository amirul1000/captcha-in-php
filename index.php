<?php
  session_start();
  include("capcha.php");
  $cmd  = $_REQUEST['cmd'];
  switch($cmd)
  {
	  case "login":    
			  if($_SESSION['rand'] == $_REQUEST['rand'])
				{
					print_r($_REQUEST);
					exit;
				}
				else
				{
					$message="Login fail,Code mismatch";
					include("login_editor.php");
				}	
	   break;
	   default:
	      include("login_editor.php");
		  
  }   				
?>