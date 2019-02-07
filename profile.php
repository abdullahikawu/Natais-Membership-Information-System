<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
  <style type="text/css">
  .headerinfomr{
    float:left;
  }
  .informheader{
   
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 16PX;
  margin-bottom: 20px;
  color: red;
	text-align: center;
  border-bottom: 3px solid black;

  }
.user-infom{
padding-left:1px;
  align:center;
  height:140px;
  width:150px;
  border-color: green;

}
.infom{

padding-top:10px;
float:left;

}
.para{
  padding-bottom: 4px;
  font-size: 1em;
  font-weight: bold;
}
.red{
  color:red;
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Membership Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile Page</li>
      </ol>
    </section>
	<?php
	      		$parse = parse_ini_file('admin/config.ini', FALSE, INI_SCANNER_RAW);
    			$title = $parse['system_title'];
	      	?>
	<h1 class="page-header text-center title"><b><?php echo strtoupper($title); ?></b></h1>
  <div class="row">
	        	<div class="col-sm-10 col-sm-offset-1">
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
												<div class="col-xs-12">
													<div class="box box-solid" id="'.$row['id'].'">
														<div class="box-header with-border">
															<h3 class="box-title"><b>Membership information</b></h3>
														</div>
														<div class="box-body">
                          
																
															</p>
															<div>
														
                                
													
                                
                                <h3 class=" text-center text-bold text-red">MEMBERSHIP INFORMATION SYSTEM<h3>
                                <h3 class=" text-center text-bold text-red">CAPTURED MEMBERSHIP INFORMATION</h3>
                                <img src="<?php echo(!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>"class="profile-user-img img-responsive img-box" alt="User Image"/>
                               
                                <br>
                                <div class="infom">
                                <p class="text-left text-bold text-green">Membership Form was recieved and process by NATAIS national secretariate, your registration takes effect since  <?php echo ucfirst($voter['year_entry']);?>.</p>
                                
                                <p class="text-left text-bold"><span class="red">Reg. Number:</span> <span><?php echo ucfirst($voter['membership_id']);?></span></p>
		  
         <p class="text-left text-bold"><span class="red">Name:</span> <?php echo $voter['title'].' '.$voter['firstname'].' '.$voter['othername'].' '.$voter['lastname']; ?></p>
        
         <p class="text-left text-bold"><span class="red">Wing:</span> <span><?php echo ucfirst($voter['wing']);?></span></p>

         <p class="text-left text-bold"><span class="red">State/Chapter:</span> <span><?php echo ucfirst($voter['state']);?></span></p>
        
         <p  class="text-left text-bold"><span class="red">Status:</span> <span><?php echo ucfirst($voter['status']);?></span></p>

	    	 <p class="text-left text-bold"><span class="red">Institution:</span> <span><?php echo ucfirst($voter['institution']);?></span></p>
        
         <p class="text-left text-bold"><span class="red">Portfolio/Position:</span> <span><?php echo ucfirst($voter['position']);?></span></p>

         <p class="text-left text-bold"><span class="red">Year of Registration:</span> <span><?php echo ucfirst($voter['year_entry']);?></span></p>
		
		     <p class="text-left text-bold"><span class="red">Phone Number:</span> <span><?php echo ucfirst($voter['phone_no']);?></span></p>
		     <p class="text-left text-bold"><span class="red">Email Address:</span> <span><a href=""><?php echo ucfirst($voter['email']);?></a></span></p>
		      <p class="text-left text-bold"><span class="red">Home Address:</span> <span><?php echo ucfirst($voter['address']);?></span></p>
          </div>
         
          <span class="pull-right">
                                <a href="print.php" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Print/Downlaod</a>
																</span>
                                <span class="pull-left">
                                <a href="#edit" data-toggle="modal" class="btn btn-success btn-sm btn-flat" id="admin_profile">Edit Infomation</a>
                               
																</span>              
															</div>
														</div>
													</div>
												</div>
											</div>

          </div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  <?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/members_model.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'members_rows.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_password').val(response.password);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>
</div>
<!-- ./wrapper -->

</body>
</html>