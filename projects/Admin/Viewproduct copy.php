
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIEW PRODUCTS</title>
</head>

<body>
<h1 align="center">Products</h1>
<a href="HomePage.php">HomePage</a>
<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
?>
        

  <table border="1" align="center" cellpadding="10">
    <tr>

 
    <?php
    $selQry = "select * from tbl_product";
    $row = $conn->query($selQry);
    $i=0;
    while($data=$row->fetch_assoc())
    { 
      $i++;
    ?>
    <td>
      <p><img src="../Assets/Files/UserDocs/<?php echo $data['product_image']?>" height='200px' /><br>
        Name: <?php echo $data["product_name"]?><br>
       Description:<?php echo $data["product_description"]?><br>
      Rate:<?php echo $data["product_rate"]?><br>
      <?php 
      $selStock="select sum(stock_count) as total_stock from tbl_stock where product_id=".$data['product_id'];
      $stockrow = $conn->query($selStock);
     if($stockdata=$stockrow->fetch_assoc())
     {
      ?>
       Stock Available:<?php echo $stockdata["total_stock"]?>
       <?php 
     }
     else
     {
      echo "Out Of Stock";
     }
       ?><br>
       <a href='Stock.php?pid=<?php echo $data["product_id"]?>'>Update Stock</a>
      </p>
    </td>
    <?php
    if($i%4==0)
    {
      echo "</tr><tr>";
    }
    }
    ?>
  </table>
  
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>