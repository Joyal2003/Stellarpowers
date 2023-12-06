<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DISTRICT</title>
</head>

<body>
<?php
// session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsave"]))
{
	$district=$_POST["txt_district"];
	
	$insQry="insert into tbl_district(district_name)values('".$district."')";
	if($conn->query($insQry))
	{
		?>
        <script>
		alert("Data Inserted!!");
		window.location="District.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Data Not Inserted!!");
		window.location="District.php";
		</script>
        <?php
	}
}
   if(isset($_GET["did"]))
   {
	   $delqry="delete from tbl_district where district_id='".$_GET["did"]."'";
	   $conn->query($delqry);
	   header("location:district.php");
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        #container {
            width: 70%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #e0e0e0;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        input[type="text"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style the form header */
        th {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            padding: 15px;
        }

        /* Style the Delete links */
        td a {
            color: #FF5733; /* Red color for delete links */
            text-decoration: none;
        }

        td a:hover {
            color: #FF0000; /* Darker red on hover */
        }

        /* Style the Save and Cancel buttons */
        .button-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
        <form id="form1" name="form1" method="post" action="">
            <table>
                <tr>
                    <td><label for="txt_district">District</label></td>
                    <td><input type="text" name="txt_district" id="txt_district" /></td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <input type="submit" name="btnsave" id="btnsave" value="SAVE" />
                        <input type="submit" name="CANCEL" id="CANCEL" value="CANCEL" />
                    </td>
                </tr>
            </table>
            <br />
            <br />
            <table>
                <tr>
                    <th>SI NO.</th>
                    <th>District</th>
                    <th>Action</th>
                </tr>
                <?php
                $i = 0;
                $selQry = "select * from tbl_district";
                $row = $conn->query($selQry);
                while ($data = $row->fetch_assoc()) {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $data["district_name"] ?></td>
                        <td><a href="District.php?did=<?php echo $data["district_id"] ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</body>
</html>

<?php
include('Foot.php');
ob_flush();
?>
</html>