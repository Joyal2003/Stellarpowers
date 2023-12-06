<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaint Replay</title>
</head>

<body>
<a href="HomePage.php">back</a>
<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");

if(isset($_POST["submit"]))
{
	$complaint_replay=$_POST["complaint_replay"];
	
    
	$upQry= "update tbl_complaint set complaint_status=1,complaint_replay='".$complaint_replay."' where complaint_id='".$_GET["cid"]."'";
	if($conn->query($upQry))
	{
		?>
        <script>
		alert("Updated");
		window.location="complaints.php?cid=<?php echo $_GET['cid'] ?>";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Not Updated");
		window.location="complaint.php";
		</script>
        <?php
	}
}
  ?>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Replay</td>
      <td><label for="complaint_replay"></label>
      <textarea name="complaint_replay" id="complaint_replay" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>