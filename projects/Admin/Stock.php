
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STOCK</title>
</head>

<body>
<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsave"]))
{
	$stock_quantity=$_POST["stock_quantity"];
	$product_id=$_GET["pid"];
	 $insQry="insert into tbl_stock(stock_count,product_id)values('".$stock_quantity."','".$product_id."')";

	
	if($conn->query($insQry))
	{
		?>
<script>
		alert("Data Inserted!!");
		window.location="Stock.php?pid=<?php echo $product ?>";
		</script>
        <?php
	}
	else
	{
		?>
<script>
		alert("Data Not Inserted!!");
		window.location="Stock.php";
		</script>
        <?php
	}
}
?>
 <form id="form1" name="form1" method="post" action="">
  <table width="418" height="94" border="1">
    <tr>
      <td width="154">Stock Quantity</td>
      <td width="173"><label for="stock_quantity"></label>
      <input type="number" name="stock_quantity" id="stock_quantity" /></td>
    </tr>
    <tr>
       <td colspan ="2" align ="center"><input type="submit" name="btnsave" id="btnsave" value="SAVE" />
      <input type="submit" name="CANCEL" id="CANCEL" value="CANCEL" /></td>
    </tr>
  </table>
</form>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>