<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StellarPowerSolutions::Login</title>
</head>

<body>
<?php
session_start();
include("../Assets/Connection/Connection.php");

if(isset($_POST["login"]))
{

	$Email = $_POST["login_email"];
	$Password = $_POST["login_passwords"];
	
	$selU = "select * from tbl_user where user_email='".$Email."' and user_password='".$Password."'";
	$rowU = $conn->query($selU);
	
	
	$selS = "select * from tbl_staff where staff_email='".$Email."' and staff_password='".$Password."'";
	$rowS = $conn->query($selS);
	
	
	$selAdmin = "select * from tbl_admin where admin_email='".$Email."' and admin_password='".$Password."'";
	$rowAdmin = $conn->query($selAdmin);
	
	
	if($dataU=$rowU->fetch_assoc())
	{
		$_SESSION["uid"]=$dataU["user_id"];
		$_SESSION["uname"]=$dataU["user_name"];
		header("Location:../User/UserHome.php");
	}
	
	else if($dataS=$rowS->fetch_assoc())
	{
		$_SESSION["Sid"]=$dataS["staff_id"];
		$_SESSION["Sname"]=$dataS["staff_name"];
		header("Location:../Staff/StaffHome.php");
	}
	else if($dataAdmin=$rowAdmin->fetch_assoc())
	{
		$_SESSION["lgid"]=$dataAdmin["admin_id"];
		$_SESSION["lgname"]=$dataAdmin["admin_name"];
		header("Location:../Admin/HomePage.php");
	}
	else
	{
		?>
        <script>
		alert("Invalid Credentials!!!");
		window.location="login.php";
		</script>
        <?php	
	}
}

?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Email</td>
      <td><label for="login_email"></label>
      <input type="text" name="login_email" id="login_email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="login_passwords"></label>
      <input type="text" name="login_passwords" id="login_passwords" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="login" id="login" value="Login" /></td>
      
    </tr>
  </table>
</form>
</body>
</html>
