<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>
<html>

<head>
<title>Task</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!------including header here --------->
<?php include "header.php";?>
<!------end header here --------->
<div class="container">
<h3>All Task Lists</h3>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Task</th>
	        <th>Date</th>
	   <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from task where `user_id`='".$_SESSION['user_id']."'";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	while($row=mysqli_fetch_array($res))
	{
  
  ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><a href="view-message.php?id=<?php echo $row['t_id'];?>"><?php echo substr($row['task'],0,50);?></a></td>
      <td><?php echo $row['date_time'];?></td>
      
	  <td><a href="view-message.php?id=<?php echo $row['t_id'];?>">view</a> </td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 
</div>
</body>
</html>