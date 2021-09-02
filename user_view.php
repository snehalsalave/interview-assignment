<?php include("header.php"); ?>

<?php
$sql="select * from user";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0)
{
    ?>
    <hr>

<table class="table table-hover">
	<tr>
		<th>#</th>
		<th>User Id</th>
		<th>User Name</th>
		<th>User Email</th>
		<th>User Mobile</th>
	<tr>
	<tbody>
		<?php
		$counter = 1;
		while($row=mysqli_fetch_assoc($res))
		{
		?>
		<tr>
			<td> <?php echo $counter++; ?> </td>
			<td> <?php echo $row['id']; ?> </td>
			<td> <?php echo $row['UserName']; ?> </td>
			<td> <?php echo $row['UserEmail']; ?> </td>
			<td> <?php echo $row['UserMobile']; ?> </td>
			<td>
				<a class="btn btn-success"  href="user_edit.php?id=<?php echo $row['id'];?>">Edit</a>
			<td>
		</tr>
<?php } ?>
	</tbody>
</table>

<?php
	}else
	{
		echo "Record Not Found";   
 } 
 ?> 

<?php include("footer.php"); ?>