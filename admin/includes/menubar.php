<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="#"><span class="glyphicon glyphicon-lock"></span> <span>Executives</span></a></li>
	  <li class=""><a href="#"><i class="fa fa-tasks"></i> <span>Downloads</span></a></li>
      <li class="header">MANAGE</li>
      <li class=""><a href="members.php"><i class="fa fa-users"></i> <span>Registered Members</span></a></li>
      <li class=""><a href="#"><i class="fa fa-tasks"></i> <span>Events</span></a></li>
      <li class="header">SETTINGS</li>
      <li class=""><a href="#"><i class="fa fa-file-text"></i> <span>Updates</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cog"></i> <span>Title</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>