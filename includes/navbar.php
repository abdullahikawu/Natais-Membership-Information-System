<style type="text/css">
.spec{
float:left;
padding-left:10px;

font-weight:bold;
color:#FFFFFF;
size:10px;

}
.pics{
float:left;
padding-top:4px;

}
</style>
<header  class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">Menu</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"> <b>Menu</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
	<a href="">
<span><img src="images/navtitle.png" class="pics" alt="User Image"/>
</a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
	  
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		   <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>" class="user-image" alt="User Image">
             <span class="hidden-xs"><?php echo $voter['firstname'].' '.$voter['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg'; ?>" class="img-circle" alt="User Image">
              <p>
                <?php echo $voter['firstname'].' '.$voter['lastname']; ?>
                <small>Member since <?php echo date('M. Y'); ?></small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update Profile</a>
              </div>
              <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>