



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRODUCT TYPE</title>
</head>

<body>
<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsave"]))
{
	$product=$_POST["producttype_name"];
	
	$insQry="insert into tbl_producttype(producttype_name)values('".$product."')";
	if($conn->query($insQry))
	{
		?>
        <script>
		alert("Data Inserted!!");
		window.location="ProductType.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Data Not Inserted!!");
		window.location="ProductType.php";
		</script>
        <?php
	}
}
   if(isset($_GET["did"]))
   {
	   $delqry="delete from tbl_producttype where producttype_id ='".$_GET["did"]."'";
	   $conn->query($delqry);
	   header("location:ProductType.php");
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Type Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
            background-color: #5D87FF;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5D87FF;
        }

        /* Style the form header */
        td[colspan="2"] {
            color: white;
            font-weight: bold;
            padding: 15px;
        }

        /* Style the form labels */
        label {
            font-weight: bold;
            color: #555;
        }

        /* Style the form container */
        #form-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="container">
        <form id="form1" name="form1" method="post" action="">
            <table width="347" height="101" border="1" align="center">
                <tr>
                    <td><label for="producttype_name">Product Type</label></td>
                    <td><input type="text" name="producttype_name" id="producttype_id" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnsave" id="btnsave" value="SAVE" />
                        <input type="submit" name="CANCEL" id="CANCEL" value="CANCEL" />
                    </td>
                </tr>
            </table>
            <br />
            <br />
            <table width="200" border="1" align="center">
                <tr>
                    <th>SI NO.</th>
                    <td>Product Type</td>
                    <td>Action</td>
                </tr>
                <?php
                $i = 0;
                $selQry = "select * from tbl_producttype";
                $row = $conn->query($selQry);
                while($data = $row->fetch_assoc()) { 
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $data["producttype_name"]?></td>
                    <td><a href="ProductType.php?did=<?php echo $data["producttype_id"]?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</body>
</html>


<p>&nbsp;</p>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>