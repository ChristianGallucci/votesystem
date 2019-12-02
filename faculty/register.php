<?php include('server.php') ?>
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
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Faculty Voting System</b>
		
  	</div>

  	<div class="login-box-body">
    	<p class="login-box-msg">Register Here</p>

    	<form action="register.php" method="POST">
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="firstname" placeholder="Firstname" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voters_id" placeholder="Ram ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-success btn-block btn-flat" name="reg_user"><i class="fa fa-sign-in"></i> Register</button>
        		</div>
      		</div>
    	</form>
		<center><a href="index.php" class="text-center">Sign In Here</a></center>
  	</div>
  	<?php  if (count($errors) > 0) : ?>
  		
  				<div class='callout callout-danger text-center mt20'>
			  	     	<?php foreach ($errors as $error) : ?>
  	 						 <p><?php echo $error ?></p>
  						<?php endforeach ?>
				  </div>
			  	</div>
  		<?php  endif ?>

<?php include 'includes/scripts.php' ?>
</body>

<footer>
<a class="botLink" href="../index.php"><center>Student Login Portal</a></center>
<a class="botlink" href="admin/index.php"><center>Admin Login Portal</a></center>
</div>
</html>