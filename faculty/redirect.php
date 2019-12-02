<?php 
  session_start(); 

  if (!isset($_SESSION['voters_id'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['voters_id']);
  	header("location: index.php");
  }
?>
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
  		<b>Student Voting System</b>
		
  	</div>

  	<div class="login-box-body">
    	<p class="login-box-msg"></p>
		<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['voters_id'])) : ?>
    	<center><strong><?php echo $_SESSION['voters_id']; ?></strong></p></center>
    	<center><a href="logout.php">Click here to log in</a></center>
    <?php endif ?>
</div>
    	
		
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
</div>
</html>