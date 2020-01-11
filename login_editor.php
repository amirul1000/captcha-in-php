<!DOCTYPE html>
<?php
	session_start();
	//$_SESSION['rand'] = rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	$randomString     = generateRandomString();
	$_SESSION['rand'] = $randomString;
    $capcha           = generateCaptchaImage($randomString);
?>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Admin</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- END THEME STYLES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="shortcut icon" href="favicon.ico"/>
<style>
 .heading_text_logo{
 color: #fff;
    float: left;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
    text-transform: uppercase;
    width: 100%;
 }
</style>
</head>


<div class="content" align="center">
   <div style="width:30%">
	<!-- BEGIN LOGIN FORM -->
    <?php
	 echo $message;
	?>
	<form class="login-form" action="" method="post">
		<h3 class="form-title">Login to your account</h3>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="<?=$_REQUEST['email']?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"  value="<?=$_REQUEST['password']?>"/>
			</div>
		</div>
        <div class="form-group">
			<label class="control-label">Enter code <img src="data:image/png;base64,<?=$capcha?>"/>  </label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Code" name="rand"/>
		</div>
		<div class="form-actions">
			<label class="checkbox">
            <input type="hidden" name="cmd" value="login"/> 
            
			<input type="checkbox" name="remember" value="1"/> Remember me </label>
			<button type="submit" class="btn green-haze pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	</div>
</div>
