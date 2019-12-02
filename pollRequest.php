<?php include 'includes/session.php'?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green sidebar-mini">
	<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/menubar.php'; ?>
		 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Poll Request</li>
      </ol>
    </section>
			 <?php
			       if(isset($_SESSION['success'])){
				          	echo "
				            	<div class='alert alert-success alert-dismissible'>
				              		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				              		<h4><i class='icon fa fa-check'></i> Success!</h4>
				              	".$_SESSION['success']."
				            	</div>
				          	";
				          	unset($_SESSION['success']);
				        }

				    ?>
<div class="login-box">
  	<div class="login-logo">
  		<b>Request a Poll</b>
		
  	</div>

  	<div class="login-box-body">

    	<form action="pollUpload.php" method="POST">
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="ramID" placeholder="Ram ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="poll_title" placeholder="Poll Title" required>

      		</div>
				<div class="form-group has-feedback">
				<label for="semester">Semester</label>
        		<select name="semester" class="form-control">
 					 <option value="spring">Spring</option>
 					 <option value="summer">Summer</option>
 					 <option value="fall">Fall</option>
  					 <option value="winter">Winter</option>
				</select>
      		</div>
			<div class="form-group has-feedback">
				<label for="year">Year</label>
        		<select name="year" class="form-control">
 					 <option value="2019">2019</option>
 					 <option value="2020">2020</option>
				</select>
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can1" placeholder="Option #1" >
        		
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can2" placeholder="Option #2" >
        		
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can3" placeholder="Option #3" >
        	
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can4" placeholder="Option #4" >
       
      		</div>
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can5" placeholder="Option #5" >
       
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can6" placeholder="Option #6" >
       
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can7" placeholder="Option #7" >
       
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can8" placeholder="Option #8" >
       
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can9" placeholder="Option #9" >
       
      		</div>
			<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="can10" placeholder="Option #10" >
       
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-success btn-block btn-flat" name="poll_up"><i class="fa fa-sign-in"></i> Send</button>
        		</div>
      		</div>
    	</form>
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
</div>

</div>

<?php include 'includes/scripts.php' ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>