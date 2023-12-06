<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN HOME PAGE</title>
</head>

<body>

<?php

session_start();
?>
<table width="200" border="1">
  <tr>
    <td>Welcome :: <?php echo $_SESSION["lgname"]?> </td>
  </tr>
  <tr>
    <td><a href="Adminregistration.php">Adminregistration</a></td>
  </tr>
  <tr>
    <td><a href="District.php">District</a></td>
  </tr>
  <tr>
   <td><a href="PlaceDetails.php">Place</a></td>
  </tr>
  <tr>
   <td><a href="ProductType.php">ProductType</a></td>
  </tr>
  <tr>
   <td><a href="Staffregistration.php">Staffregistration</a></td>
  </tr>
  <tr>
    <td><a href="Product.php">Product</a></td>
  </tr>
  <tr>
    <td><a href="Stock.php">Stock</a></td>
  </tr>
  <tr>
    <td><a href="Viewproduct.php">Viewproduct</a></td>
  </tr>
  <tr>
    <td><a href="Bookings.php">Bookings</a></td>
  </tr>
  <tr>
    <td><a href="complaints.php">complaints</a></td>
  </tr>
  <tr>
    <td><a href="ComplaintReply.php">complaintreplay</a></td>
  </tr>
</table>
</table>
</body>
</html>