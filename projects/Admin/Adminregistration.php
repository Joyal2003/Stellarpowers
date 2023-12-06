<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN REGISTRATION</title>
</head>

<body>
<?php
session_start();
ob_start();

include("../Assets/Connection/Connection.php");
if(isset($_POST["save"]))
{
	$name=$_POST["txtname"];
	$email=$_POST["txtemail"];
	$password=$_POST["txtpassword"];
	
	$insQry="insert into tbl_admin(admin_name,admin_email,admin_password)values('".$name."','".$email."','".$password."')";

	
	if($conn->query($insQry))
	{
		?>
<script>
		alert("Data Inserted!!");
		window.location="Adminregistration.php";
		</script>
        <?php
	}
	else
	{
		?>
<script>
		alert("Data Not Inserted!!");
		window.location="Adminregistration.php";
		</script>
        <?php
	}
}
if(isset($_GET["did"]))
	{
		$delqry="delete from tbl_admin where admin_id='".$_GET["did"]."'";
		$conn->query($delqry);
		header("location:Adminregistration.php");
	}
?>


<form id="form1" name="form1" method="post" action="">
  <table width="354" height="131" border="1" align="center">
    <tr>
      <td>Name</td>
      <td>
      
          <label for="name"></label>
          <label for="txtname"></label>
          <input required type="text" name="txtname" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$"/>    </td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="email"></label>
        <label for="txtemail"></label>
      <input type="text" required name="txtemail" id="txtemail" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="password"></label>
        <label for="txtpassword"></label>
        <input type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="txtpassword" />
      </td>
    </tr>
    <tr>
      <td colspan=2 align="center"><input type="submit" name="save" id="save" value="save" />
      <input type="submit" name="cancel" id="cancel" value="cancel" /></td>
    </tr>
  </table>
  <br />
  <br />
  <table width="200" border="1" align="center">
  <tr>
      <th><table width="200" border="1">
        <tr>
          <td>Sl no</td>
          <td>Name</td>
          <td>Email</td>
          <td>Password</td>
          <td>Action</td>
        </tr>
         <?Php
	$i=0;
	$selQry="select * from tbl_admin";
	$row = $conn->query($selQry);
	while($data=$row->fetch_assoc())
	{ 
		$i++;
		?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $data["admin_name"]?></td>
          <td><?php echo $data["admin_email"]?></td>
          <td><?php echo $data["admin_password"]?></td>
          <td><a href="Adminregistration.php?did=<?php echo $data["admin_id"]?>">Delete</a></td>
        </tr>
        <?php
	}
	?>
      </table>
      
</form>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>