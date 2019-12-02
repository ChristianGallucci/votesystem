<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $voter['firstname'].' '.$voter['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li class=""><a href="homepage.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">VIEW</li>
      <li class=""><a href="home.php"><i class="fa fa-edit"></i> <span>Polls</span></a></li>
      <li class=""><a href="candidates.php"><i class="fa fa-users"></i> <span>Candidates</span></a></li>
	  <li class=""><a href="results.php"><i class="fa fa-tasks"></i> <span>Results</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>