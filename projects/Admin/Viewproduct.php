<?php
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIEW PRODUCTS</title>
</head>

<body>  

  <div class="container">
    <div class="row">
    <?php
    $selQry = "select * from tbl_product";
    $row = $conn->query($selQry);
    $i=0;
    while($data=$row->fetch_assoc())
    { 
    ?>

    <div class="col-md-4">
      <div class="card">
        <img src="../Assets/Files/UserDocs/<?php echo $data['product_image']?>" height="150px" style="object-fit: contain;" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $data["product_name"]?></h5>
          <p class="card-text"><?php echo $data["product_description"]?></p>
          <p class="card-text">₹ <?php echo $data["product_rate"]?></p>
          <a href="Stock.php?pid=<?php echo $data["product_id"]?>" class="btn btn-primary">Update Stock</a>
        </div>
      </div>
    </div>

<?php
 }
 ?>

    </div>
  </div>
  
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>