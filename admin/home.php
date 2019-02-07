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
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Refresh</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
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
        <div class="col-lg-3 col-xs-6">
         
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             344
          
              <p>unknon</p>
            </div>
            <div class="icon">
              <i class="fa fa-black-tie"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM members";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
             
              <p>Total Registered Members</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="members.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             346

              <p>Unkown</p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="votes.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
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
       National Congress Set to hold on 20,nover,2019.
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
