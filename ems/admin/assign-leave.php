<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>
<html>

<head>
<title>Assign Employee Leave</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!------including header here --------->
<?php include "header.php";?>
<!------end header here --------->

<div class="container">
<div class="col-xs-10 col-xs-push-1 well">
<?php 
	if(isset($_SESSION['success']))
	{
		echo $_SESSION['success'];
		unset($_SESSION['success']);
	}
	?>
<!------ register form start from here ---------------------->
<form class="form-horizontal" method="post" action="insert-leave.php" >
  <fieldset>
    <legend>Assign leave  <a href="all-leave.php" class="btn btn-primary" style="margin:5px;">All Leave</a>  <a href="all-applied-leave.php" class="btn btn-primary" style="margin:5px;">All Applied Leave</a></legend>
	
	<!----left box----------->
	<div class="col-xs-3" style="background-color:#d9d9d9;padding:15px;">
	<div class="form-group">
      <label class="col-lg-12"><b>Employee Lists</b></label>
	  <input type="hidden" name="assign_by" value="<?php echo $_SESSION['user_id']; ?>">
      <div class="col-lg-12">
	  <?php
  $query="Select * from users where `role`='employee' order by user_id DESC";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($res);
	while($row=mysqli_fetch_array($res))
	{
  
  ?>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="emp[]" value="<?php echo $row['user_id'];?>" >
           <?php echo $row['name'];?>
          </label>
        </div>
		
	<?php  } ?>
		
        
      </div>
    </div>
    
	</div>
		<!----right box----------->
	<div class="col-xs-9">
	<div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Valid From:</b></label>
      <div class="col-lg-9">
        <input type="date" name="validfrm" placeholder="dd/mm/yyyy" class="form-control">
      </div>
    </div>
   <div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Valid To:</b></label>
      <div class="col-lg-9">
        <input type="date" name="validto" placeholder="dd/mm/yyyy" class="form-control">
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Earning Leave:</b></label>
      <div class="col-lg-9">
        <input type="text" name="eleave" placeholder="No. of leave" class="form-control">
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Medical Leave:</b></label>
      <div class="col-lg-9">
        <input type="text" name="mleave" placeholder="No. of leave" class="form-control">
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-3"><b>Casual Leave:</b></label>
      <div class="col-lg-9">
          <input type="text" name="cleave" placeholder="No. of leave" class="form-control">
      </div>
    </div>
	</div>
	
    
    <div class="form-group">
      <div class="col-lg-12 col-lg-offset-3">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<!------------------------register form end here----------------->
</div>
</div>
</body>
</html>