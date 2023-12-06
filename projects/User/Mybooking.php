<html>
  <head>
    <title>MYBOOKING</title>
  </head>  
<body>
<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
?>
<form>

<?php

	$selQry = "select * from tbl_cart c inner join tbl_booking b on c.booking_id=b.booking_id inner join tbl_product p on p.product_id=c.product_id where b.user_id='".$_SESSION["uid"]."' and booking_status>=1";
	$row = $conn->query($selQry); 	
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <h1>MY BOOKING</h1>
        <form id="bookingForm" name="bookingForm" method="post" action="process_booking.php">
            <table class="table table-bordered">
                <tr>
                    <th>Sl no</th>
                    <th>Product image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                $i=0;
                while ($data = $row->fetch_assoc()) {
                  $i++;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><img src="../Assets/Files/UserDocs/<?php echo $data['product_image'] ?>" height='200px' /></td>
                        <td><label for="product_name"><?php echo $data["product_name"] ?></label></td>
                        <td><label for="product_qty"><?php echo $data["cart_qty"] ?></label></td>
                        <td><label for="product_rate"><?php echo $data["product_rate"] ?></label></td>
                        <td><label for="product_total"><?php echo $data["product_rate"] * $data["cart_qty"] ?></label></td>
                        <td>
                            <?php
                            if ($data['payment_status'] == 0) {
                                echo "Payment Failed";
                            } else if ($data['booking_status'] == 1) {
                                echo "Payment Completed<br>";
                            }
                            if ($data['cart_status'] == 1 && $data['payment_status'] == 1) {
                                echo "Waiting for product approval";
                            } else if ($data['cart_status'] == 2 && $data['payment_status'] == 1) {
                                echo "Approved";
                            } else if ($data['cart_status'] == 3 && $data['payment_status'] == 1) {
                                echo "Declined";
                            } else if ($data['cart_status'] == 4 && $data['payment_status'] == 1) {
                                echo "Packed";
                            } else if ($data['cart_status'] == 5 && $data['payment_status'] == 1) {
                                echo "Shipped";
                            } else if ($data['cart_status'] == 6 && $data['payment_status'] == 1) {
                                echo "Deliver";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($data['cart_status'] > 6) {
                            ?>
                                <a href="MyBookings.php?cid=<?php echo $data["cart_id"] ?>">Cancel</a>
                            <?php
                            } else if ($data['cart_status'] == 6) {
                            ?>
                                <a href="review.php?cid=<?php echo $data["product_id"] ?>">Review</a><br />
                                <a href="complaint.php?cid=<?php echo $data["product_id"] ?>">Complaint</a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <!-- Add your booking form elements here -->
            
        </form>
    </div>

    <!-- Add Bootstrap JavaScript links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>