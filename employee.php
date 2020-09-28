	<?php
$conn=mysqli_connect("localhost","root","","crms");
$query="select * from employee";
$res=mysqli_query($conn,$query);

if(isset($_POST['sub']))
{
	$id=$_POST['search'];
	if ($id=="all") {
	$query="select * from employee";	

	}
	else
	{
	$query="select * from employee where E_id='$id'";
	}
	$res=mysqli_query($conn,$query);
	// $row=mysqli_fetch_assoc($res);
}

?>



<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



        <header>
            <a href ="#" class = "logo">Logo</a>
            <div class = "menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="homepage.php" class="active">Home</a></li>
                    <li><a href="Employee.php">Employees</a></li>
                    <li><a href="criminal.php">FIR</a></li>
                    <li><a href="criminaltable.php">Criminals</a></li>
                    <li><a href="navbarmenu\diagonalnav.php">IPC</a></li>
                    <li><a href="index.php">Log out</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
<title></title>
<div class="head">
	<form action="criminaltable.php" method="post">
<input type="text" name="search" placeholder="Enter C no " id="search">
<button name="sub" id="sub">submit</button>
</form>
</div>
</head>
<body>
<table >
<tr>
	<th>Photo</th>
	<th>P id</th>
	<th>Name</th>
	<th>DOB</th>
	<th>Age</th>
	<th>Designation</th>
	<th>Contact</th>
	
	
</tr>
<?php 
while ($row=mysqli_fetch_assoc($res)) {
		$img= "<dt><strong></strong></dt><dd>" . 
     	'<img src="data:image/jpeg;base64,'.
      		base64_encode($row['photo']).
      		'" width="150" height="150" style="border-radius:50%;" ">' . "</dd>";
 
	?>

	<tr>
		<td><?php echo $img?></td>
		<td><?php echo $row['P_id']?></td>
		<td><?php echo $row['E_name']?></td>
		<td><?php echo $row['Dob']?></td>
		<td><?php echo $row['E_age']?></td>
		<td><?php echo $row['E_desig']?></td>
		<td><?php echo $row['Contact']?></td>

		


	</tr>

<?php
}

 ?>


</table>
<style type="text/css">
#sub
{
	margin-left: 13px;
	/*background: #010133;*/
}
.head{

margin-top: 20px;
/*margin-bottom: 30px;*/
	margin-left:40%;
	position: relative;
}

input{
	width: 250px;
	height: 35px;
	border-radius: 10px;
	font-size: 23px;
	padding-left: 10px;
	margin-top: 3px;
	position: absolute;

}
#search:focus{
	border: 2px solid #0852c9;

}

button{
	width: 100px;
	height: 35px;
	border-radius: 10px;
	border:none;
	background-color:#010133;
	color: white;
	font-weight: bold;
	position: absolute;
	margin-top:5px;
	left: 32%;

}


table{
	position: absolute;
	top: 20%;
	left: 10%;
	width: 80%;
	border-collapse: collapse;
	margin-top: 30px;
}
	td
	{
		align-items: center;
		width: 40px;
		text-align: center;
	border-bottom:3px solid black;
	padding:6px;	
	font-size: 20px;
	color:#0852c9;
	font-weight: bold;
	}
	th{
		height: 20px;
		font-weight: bold;
		font-size: 25px;
	border-bottom:3px solid black;
	padding: 6px;
	}


</style>
</body>


</html>