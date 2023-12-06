<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRODUCT</title>
</head>

<body>
<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsave"]))
{
	$Name=$_POST["product_name"];
	$productType=$_POST['ddlproduct'];
	$Image=$_FILES["photo"]["name"];
	$temp=$_FILES["photo"]["tmp_name"];
	move_uploaded_file($temp,"../Assets/Files/UserDocs/".$Image);
	$Rate=$_POST["product_rate"];
	$Description=$_POST["product_description"];
	$insQry="insert into tbl_product(product_name,product_image,product_rate,product_description,producttype_id)values('".$Name."','".$Image."','".$Rate."','".$Description."','".$productType."')";
	if($conn->query($insQry))
	{
		?>
        <script>
		alert("Data Inserted!!");
		window.location="Product.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Data Not Inserted!!");
		window.location="Product.php";
		</script>
        <?php
	}
}
   if(isset($_GET["did"]))
   {
	   $delqry="delete from tbl_product where product_id='".$_GET["did"]."'";
	   $conn->query($delqry);
	   header("location:Product.php");
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        input[type="text"]:focus,
        select:focus,
        textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="file"] {
            margin-bottom: 12px;
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
        <form id="form2" name="form2" method="post" action="" enctype="multipart/form-data">
            <table width="415" border="1">
                <tr>
                    <td width="145"><label for="ddlproduct">Product Type</label></td>
                    <td width="165">
                        <select name="ddlproduct" id="product" onchange="getPlace(this.value)">
                            <option>Select</option>
                            <?php
                            $selQry = "select * from tbl_producttype";
                            $row = $conn->query($selQry);
                            while($data = $row->fetch_assoc()) { 
                            ?>
                            <option value="<?php echo $data["producttype_id"] ?>"><?php echo $data["producttype_name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="product_name" id="txt_product" /></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="photo" id="photo" /></td>
                </tr>
                <tr>
                    <td>Rate</td>
                    <td><input type="text" name="product_rate" id="product_rate" /></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea name="product_description" id="product_description" cols="45" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnsave" id="btnsave" value="SAVE" />
                        <input type="submit" name="CANCEL" id="CANCEL" value="CANCEL" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>
