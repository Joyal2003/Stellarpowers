
<?php
include("../Connection/Connection.php");
?>
<?php
	
	$selQry = "select * from tbl_product where producttype_id='".$_GET["pid"]."'";
	echo $selQry;
	$row = $conn->query($selQry);
	while($data=$row->fetch_assoc())
	{ 
		?>
        
  <table width="371" height="430" border="1">
    <tr>
      <td height="122" colspan ="2" align ="center"><img src="../Assets/Files/UserDocs/<?php echo $data['product_image']?>" height='200px' /></td>
    </tr>
    <tr>
      <td width="122">Name</td>
      <td width="233"><label for="product_name"><?php echo $data["product_name"]?></label></td>
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
      <td>rate</td>
      <td><label for="product_rate"><?php echo $data["product_rate"]?></label></td>
    </tr>
    <tr>
      <td height="54" align="center"><a href="Viewmore.php?pid=<?php echo $data['product_id'] ?>">Viewmore</a></td>
       <td height="54" align="center"><a href="Viewmore.php?pid=<?php echo $data['product_id'] ?>">Add Cart</a></td>
    </tr>
  </table>
    <?php
	}
	?>