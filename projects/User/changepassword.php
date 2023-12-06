	`1<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHANGE PASSWORD</title>
</head>

<body>
<a href="UserHome.php">back</a>
<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");

if(isset($_POST["Change"]))
{
	$current_password = $_POST["txtcurrent_password"];
    $new_password = $_POST["txtnew_password"];
    $confirm_password = $_POST["txtconfirm_password"];
	
	$selQry = "select * from tbl_user where user_id='".$_SESSION["uid"]."' and user_password='".$current_password."'";
	$row=$conn->query($selQry);
	if($data=$row->fetch_assoc())
	{
		if($new_password==$confirm_password)
		{
			$upQry = "update tbl_user set user_password='".$new_password."' where user_id='".$_SESSION["uid"]."'";	
			if($conn->query($upQry))
			{
				?>
					<script>
                    alert("Password Changed!!");
                    window.location="../Guest/login.php";
                    </script>
                <?php	
			}	
		}
		else
		{
			?>
				<script>
                alert("Password Mismatch!!");
                window.location="changepassword.php";
                </script>
             <?php	
		}
	}
	else
	{
		?>
			<script>
            alert("Password Incorrect!!");
            window.location="changepassword.php";
            </script>
        <?php	
	}
			
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Current Password</td>
      <td><input type="text" name="txtcurrent_password"  /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><input type="text" name="txtnew_password"/></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="text" name="txtconfirm_password" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="Change" id="Change" value="change" />
      <input type="submit" name="Cancel" id="Cancel" value="cancel" /></td>
      </tr>
  </table>
</form>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>