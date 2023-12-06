<?php
include("../Connection/Connection.php");
session_start();
$selQry = "select * from tbl_booking where user_id='".$_SESSION['uid']."' and booking_status='0'";

$row = $conn->query($selQry);

if($data=$row->fetch_assoc())
{
	
	$bookingid=$data['booking_id'];
	$cartQry = "select * from tbl_cart where product_id='".$_GET["pid"]."' and booking_id='".$bookingid."'";
	$row = $conn->query($cartQry);
	if($cartdata=$row->fetch_assoc())
	{
		echo "product already exists 1";
	}
	else
	{
		$insQry="insert into tbl_cart(booking_id,product_id)values('".$bookingid."','".$_GET["pid"]."')";
		if($conn->query($insQry))
		{
			echo "Added to cart";
		}
		else{
			echo "Failed";
		}
	}
}

else
{
	echo 'hi';
	$cartinsQry="insert into tbl_booking(user_id,booking_date)values('".$_SESSION["uid"]."',curdate())";
	$conn->query($cartinsQry);	
	$cartmaxQry = "select max(booking_id) as bookingid from tbl_booking where user_id='".$_SESSION["uid"]."'";
	$rowcart=$conn->query($cartmaxQry);
	$cartmaxdata=$rowcart->fetch_assoc();
	$latestbookingid=$cartmaxdata["bookingid"];
	$inscartmaxQry="insert into tbl_cart(booking_id,product_id)values('".$latestbookingid."','".$_GET["pid"]."')";
	if($conn->query($inscartmaxQry))
	{
		echo "Added to cart";
	}
	else
	{
		echo "Failed";
	}
}

?>