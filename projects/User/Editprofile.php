<html>
  <head>
    <title>EDIT PROFILE</title>
  </head>  
  <body>
<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");

if(isset($_POST["update"]))
{
    $name=$_POST["txtname"];
	$contact=$_POST["txtcontact"];
	$address=$_POST["txtaddress"];
	$email=$_POST["txtemail"];
	
	$upQry= "update tbl_user set user_name='".$name."',user_contact='".$contact."',user_address='".$address."',user_email='".$email."' where user_id='".$_SESSION["uid"]."'";
	if($conn->query($upQry))
	{
		header("Location:Editprofile.php");
	}
			
}


$selQry = "select * from tbl_user where user_id='".$_SESSION["uid"]."'";
$row = $conn->query($selQry);
if($data=$row->fetch_assoc())
{	
    
?>

<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td width="89">Name</td>
      <td width="95"><input type="text" name="txtname" value="<?php echo $data["user_name"]?>"</td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><input type="text" name="txtcontact" value="<?php echo $data["user_contact"]?>"</td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="txtaddress" value="<?php echo $data["user_address"]?><"</td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="txtemail" value="<?php echo $data["user_email"]?>"</td>
    </tr>
    <tr>
      <td colspan="2"  align="center"><input type="submit" name="update" id="update" value="Update" />
      <input type="submit" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
<?php
}
?>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>