<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIEWMORE</title>
</head>

<body>
 <?php

	$selQry = "select * from tbl_product where  product_id='".$_GET["pid"]."'";
	$row = $conn->query($selQry);
	while($data=$row->fetch_assoc())
	{ 
		?>
        
  <table width="435" height="532" border="1">
    <tr>
      <td height="122" colspan ="2" align ="center"><img src="../Assets/Files/UserDocs/<?php echo $data['product_image']?>" height='200px' /></td>
    </tr>
    <tr>
      <td width="127">Name</td>
      <td width="290"><label for="product_name"><?php echo $data["product_name"]?></label></td>
    </tr>
    <tr>
      <td>Product</td>
      <td><label for="product_id"><?php echo $data["product_id"]?></label></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label for="product_description"><?php echo $data["product_description"]?></label></td>
    </tr>
    <tr>
      <td height="54">rate</td>
      <td><label for="product_rate"><?php echo $data["product_rate"]?></label></td>
    </tr>
    <tr>
      <td </td>
    </tr>
  </table>
    <?php
	}
	?>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>