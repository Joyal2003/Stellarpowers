<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USER HOME</title>
</head>

<body>
<?php
session_start();

?>

<table width="200" border="1">
<center><b><h2>WELCOME <?php echo $_SESSION["uname"]?></h2></b></center>
<tr>    
     <td><a href="MyProfile.php">MyProfile</a></td>
</tr>
<tr>
    <td><a href="changepassword.php">changepassword</a></td>
</tr>
<tr>       
    <td><a href="Searchproducts.php">Searchproducts</a></td>
</tr>
<tr>      
    <td><a href="complaint.php">complaint</a></td>
</tr>
<tr>       
    <td><a href="feedback.php">feedback</a></td>
</tr>
<tr>       
    <td><a href="MyCart.php">Cart</a></td>
</tr>
<tr>       
    <td><a href="review.php">review</a></td>
</tr>
<tr>       
    <td><a href="Mybooking.php">Mybooking</a></td>
</tr>
<tr>       
    <td><a href="complaint.php">complaint</a></td>
</tr>
<tr>       
    <td><a href="MyComplaint.php">MyComplaint</a></td>
</tr>
</table>
</body>
</html>