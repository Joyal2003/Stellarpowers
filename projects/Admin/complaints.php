<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaints</title>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        #form1 {
            background-color: #fff;
            margin: 20px auto;
            padding: 20px;
            width: 90%;
            max-width: 1000px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #form1 a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            margin-bottom: 20px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .reply-link {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .complaint-reply {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form id="form1" name="form1" method="post" action="">
        
        <?php
        $selQry = "select * from tbl_complaint c inner join tbl_product p on p.product_id=c.product_id inner join tbl_user u on u.user_id=c.user_id";
        $row = $conn->query($selQry); 	
        ?>
        <table>
            <tr>
                <th>Sl No</th>
                <th>User Name</th>
                <th>Product Name</th>
                <th>Complaint Title</th>
                <th>Complaint Content</th>
                <th>Reply</th>
            </tr>
            <?php
            while($data = $row->fetch_assoc()) {
            ?>
            <tr>
                <td>&nbsp;</td>
                <td><?php echo $data["user_name"]?></td>
                <td><?php echo $data["product_name"]?></td>
                <td><?php echo $data["complaint_title"]?></td>
                <td><?php echo $data["complaint_content"]?></td>
                <td>
                    <?php
                    if($data['complaint_status'] == 0) {
                    ?>
                    <a href="ComplaintReply.php?cid=<?php echo $data['complaint_id'] ?>" class="reply-link">Give Reply</a>
                    <?php
                    } else {
                    ?>
                    <span class="complaint-reply"><?php echo $data["complaint_replay"]?></span>
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
</body>
</html>

</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>