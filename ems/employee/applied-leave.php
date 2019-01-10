<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>
<html>

<head>
<title>Applied Leave</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!------including header here --------->
<?php include "header.php";?>
<!------end header here --------->
<div class="container">
<h3>All Applied Leave Status</h3>
<table class="table table-striped table-hover ">
  <thead>
    <tr>	<th>Sr.no</th>
	        <th>Earning Leave</th>
	   <th>Medical Leave</th>
	     <th>Casual Leave</th>
		   <th>Leave From</th>
		    <th>Leave To</th>
			<th>Status</th>
			<th>Comment</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;
  $user_id=$_SESSION['user_id'];
  $query="Select * from `applied_leave` where `apply_by`=$user_id";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	while($row=mysqli_fetch_array($res))
	{
  
  ?>
    <tr>
	<td ><?php echo $i;?></td>
       <td class="mleave"><?php echo $row['e_leave'];?></td>
	  <td class="mleave"><?php echo $row['m_leave'];?></td>
	    <td class="cleave"><?php echo $row['c_leave'];?> </td>
		<td ><?php echo $row['l_from'];?></td>
      <td class="eleave"><?php echo $row['l_to'];?></td>
		  <td class="v_from" style="color:green;"><?php echo $row['status'];?></td>
		  <td class="" style="color:green;"><?php echo $row['comment'];?></td>
		   
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 

</div>


</body>
</html>