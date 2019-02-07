<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
         <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $voter['firstname'].' '.$voter['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MANAGE</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
	  <li class=""><a href="#"><i class="fa fa-tasks"></i> <span>Upcoming Events</span></a></li>
      <li class="header">PROFILE</li>
      <li class=""><a href="profile.php"><i class="fa fa-black-tie"></i> <span>View Profile</span></a></li>
      <li class=""><a href="#"><i class="fa fa-tasks"></i> <span>Update Information</span></a></li>
      <li class=""><a href="print.php"><span class="glyphicon glyphicon-lock"></span> <span>Download</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>