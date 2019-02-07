<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	<?php
	      		$parse = parse_ini_file('admin/config.ini', FALSE, INI_SCANNER_RAW);
    			$title = $parse['system_title'];
	      	?>
	<h1 class="page-header text-center title"><b><?php echo strtoupper($title); ?></b></h1>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
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
      <!-- Small boxes (Stat box) -->
			<div class="row">
        <section class="col-lg-4">
<div class="box box-primary">
            <div class="box-body box-profile">
		
						<img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>"  class="profile-user-img img-responsive img-circle" alt="User Image">
              <h3 class="profile-username text-center"><?php echo $voter['firstname'].' '.$voter['firstname'].' '.$voter['lastname']; ?></h3>

              <p class="text-muted text-center"><?php echo ucfirst($voter['membership_id']);?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>State/Chapter:</b> <a class="pull-right"><?php echo ucfirst($voter['state']);?></a>
                </li>
                
                <li class="list-group-item">
                  <b>Wing:</b> <a class="pull-right"><?php echo ucfirst($voter['wing']);?></a>
                </li>
							
								<li class="list-group-item">
                  <b>Resgitered Member Since</b> <a class="pull-right"><?php echo ucfirst($voter['year_entry']);?></a>
                </li>
              </ul>
          
			<span class="pull-center">
                                <a href="printmini.php" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Print/Downlaod</a>
																</span>
															</p>
															<div>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
				<section class="col-lg-7">

          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-graduation-cap"></i>

              <h3 class="box-title">Information</h3>
			  <p>dghjdjhjknk</p>
			 </div>
          </div>

		  <div class="box box-primary">
            <div class="box-header" style="cursor: move;">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Notices</h3>
            </div>
            <div class="box-body">
              
                <div class="callout callout-info">
        <h4>Meeting Notification</h4>
       National Congress Set to hold on 20,November,2019.
      </div>
                  
             
            </div></div>
         </section>
		
		<section class="col-lg-5">
				
         
        <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>

            </div>
            <div class="box-body no-padding">
              <div id="calendar" style="width: 100%"></div>
            </div>

          </div>

        </section>
        <!-- ./col -->
				</section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>

</body>
</html>
