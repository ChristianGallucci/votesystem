<html>
<head>
<style type="text/css">
	.login-page {
		background: #7cd87e !important;}
	.botlink{
	text-decoration: none;
	color: #FFFFFF;
	padding-bottom: 4%;
	font-size: large;
	}
	.botlink:hover{
		color:green;
	}
</style>
</head>
<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: homepage.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Student Voting System</b>
		
  	</div>

  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Ram ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
				<div class="col-xs-4">
        		</div>
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-success btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
		<center><a href="register.php" class="text-center">Register Here</a></center>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p>
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>

<?php include 'includes/scripts.php' ?>
</body>

<footer>
<a class="botLink" href="faculty/index.php"><center>Faculty Login Portal</a></center>
<a class="botlink" href="admin/index.php"><center>Admin Login Portal</a></center>
</div>
</html>
