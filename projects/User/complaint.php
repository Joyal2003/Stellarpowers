<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COMPLAINT</title>
</head>

<body>
<a href="UserHome.php">back</a>
<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
if(isset($_POST["submit_complaint"]))
{
	$Title=$_POST["complaint"];
	$Content=$_POST['complaint_content'];
    
	$insQry="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,product_id,user_id) values('".$Title."','".$Content."',curdate(),'".$_GET['cid']."','".$_SESSION['uid']."')";
	if($conn->query($insQry))
	{
		?>
        <script>
		alert("Data Inserted!!");
		window.location="complaint.php?cid=<?php echo $_GET['cid'] ?>";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Data Not Inserted!!");
		window.location="complaint.php";
		</script>
        <?php
	}
}
   if(isset($_GET["did"]))
   {
	   $delqry="delete from complaint where complaint='".$_GET["cid"]."'";
	   $conn->query($delqry);
	   header("location:complaint.php");
   }

?>
<form id="form1" name="form1" method="post" action="">
  <table width="410" height="291" border="1">
    <tr>
      <td>Title</td>
      <td><label for="complaint"></label>
      <input type="text" name="complaint" id="complaint_title" /></td>
    </tr>
    <tr>
      <td>Content</td>
      <td><label for="complaint_content"></label>
      <textarea name="complaint_content" id="complaint_content" cols="45" rows="5"></textarea></td>
    </tr>
    <tr >
      <td colspan="2" align="center"><input type="submit" name="submit_complaint" id="submit_complaint" value="Submit" /></td>
    </tr>
  </table>
  </form>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>
