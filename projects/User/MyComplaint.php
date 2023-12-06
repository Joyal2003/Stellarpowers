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
<title>My Complaint</title>
</head>

<body>
<div class="container">
    <h1>MY COMPLAINT</h1>
    <?php
$selQry = "select * from tbl_complaint c inner join tbl_product p on p.product_id=c.product_id";
	$row = $conn->query($selQry); 	
?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Product Name</th>
                <th>Complaint Title</th>
                <th>Complaint Content</th>
                <th>Replay</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($data = $row->fetch_assoc()) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $data["product_name"] ?></td>
                    <td><?php echo $data["complaint_title"] ?></td>
                    <td><?php echo $data["complaint_content"] ?></td>
                    <td>
                        <?php
                        if ($data['complaint_status'] == 0) {
                            echo "Not Viewed";
                        } else {
                            echo $data["complaint_replay"];
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($_GET["cid"])) {
                            $delqry = "delete from tbl_complaint where complaint_id ='" . $_GET["cid"] . "'";
                            $conn->query($delqry);
                            header("location: MyComplaint.php");
                        }
                        ?>
                        <a class="btn btn-danger" href="MyComplaint.php?cid=<?php echo $data["complaint_id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>