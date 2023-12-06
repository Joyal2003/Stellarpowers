<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKINGS</title>
</head>
<body>

    

<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if(isset($_GET["aid"]))
{
  
	
	
	$upQry= "update tbl_cart set cart_status=2 where cart_id='".$_GET["aid"]."'";
	if($conn->query($upQry))
	{
		?>
        <script>
		alert("Approved");
		window.location="Bookings.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Not Approved");
		window.location="Bookings.php";
		</script>
        <?php
	}
}
if(isset($_GET["did"]))
{
  
	
	
	$upQry= "update tbl_cart set cart_status=3 where cart_id='".$_GET["did"]."'";
	if($conn->query($upQry))
	{
		?>
        <script>
		alert("Declined");
		window.location="Bookings.php";
		</script>
        <?php
     }
     else
	 {
		 ?>
         <script>
		 alert("Not Declined");
		 window.location="Bookings.php";
		 </script>
         <?php
	 }
}
if(isset($_GET["pid"]))
{
  
	$upQry= "update tbl_cart set cart_status=4 where cart_id='".$_GET["pid"]."'";
	if($conn->query($upQry))
	{
		?>
        <script>
		alert("Packed");
		window.location="Bookings.php";
		</script>
        <?php
     }
     else
	 {
		 ?>
         <script>
		 alert("Not Packed");
		 window.location="Bookings.php";
		 </script>
         <?php
	 }
}
if(isset($_GET["sid"]))
{
  
	$upQry= "update tbl_cart set cart_status=5 where cart_id='".$_GET["sid"]."'";
	if($conn->query($upQry))
	{
		?>
        <script>
		alert("Shipped");
		window.location="Bookings.php";
		</script>
        <?php
     }
     else
	 {
		 ?>
         <script>
		 alert("Not Shipped");
		 window.location="Bookings.php";
		 </script>
         <?php
	 }
}
if(isset($_GET["dlid"]))
{
  
	$upQry= "update tbl_cart set cart_status=6 where cart_id='".$_GET["dlid"]."'";
	if($conn->query($upQry))
	{
		?>
        <script>
		alert("Deliver");
		window.location="Bookings.php";
		</script>
        <?php
     }
     else
	 {
		 ?>
         <script>
		 alert("Not Deliver");
		 window.location="Bookings.php";
		 </script>
         <?php
	 }
}
?>
<form>

<?php

	$selQry = "select * from tbl_cart c inner join tbl_booking b on c.booking_id=b.booking_id inner join tbl_product p on p.product_id=c.product_id inner join tbl_user u on u.user_id=b.user_id where booking_status>=1 and payment_status=1";
	$row = $conn->query($selQry); 	
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-height: 200px;
        }

        .status {
            font-weight: bold;
        }

        .action-links {
            text-align: center;
        }

        .action-links a {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Sl no</th>
            <th>Product image</th>
            <th>Product Name</th>
            <th>User Name</th>
            <th>Address</th>
            <th>Location</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        // Place your PHP code here
        $selQry = "select * from tbl_cart c inner join tbl_booking b on c.booking_id=b.booking_id inner join tbl_product p on p.product_id=c.product_id inner join tbl_user u on u.user_id=b.user_id where booking_status>=1 and payment_status=1";
        $row = $conn->query($selQry);
        while ($data = $row->fetch_assoc()) {
        ?>
            <tr>
                <td>&nbsp;</td>
                <td><img src="../Assets/Files/UserDocs/<?php echo $data['product_image'] ?>" /></td>
                <td><label for="product_name"><?php echo $data["product_name"] ?></label></td>
                <td><label for="user_name"><?php echo $data["user_name"] ?></label></td>
                <td></td>
                <td>&nbsp;</td>
                <td class="status">
                    <?php
                    if ($data['booking_status'] == 1) {
                        echo "Payment Completed";
                    }
                    ?>
                </td>
                <td class="action-links">
                    <?php
                    if ($data['cart_status'] == 1) {
                    ?>
                        <a href="Bookings.php?aid=<?php echo $data['cart_id'] ?>">Approve</a>
                        <a href="Bookings.php?did=<?php echo $data['cart_id'] ?>">Decline</a>
                    <?php
                    } else if ($data['cart_status'] == 2) {
                    ?>
                        <a href="Bookings.php?pid=<?php echo $data['cart_id'] ?>">Packed</a>
                    <?php
                    } else if ($data['cart_status'] == 4) {
                    ?>
                        <a href="Bookings.php?sid=<?php echo $data['cart_id'] ?>">Shipped</a>
                    <?php
                    } else if ($data['cart_status'] == 5) {
                    ?>
                        <a href="Bookings.php?dlid=<?php echo $data['cart_id'] ?>">Deliver</a>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>

</form>
</body>

<?php
include('Foot.php');
ob_flush();
?>
</html>

