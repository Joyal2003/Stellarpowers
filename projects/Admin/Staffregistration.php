<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STAFF REGISTRATION</title>
</head>

<body>
<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if(isset($_POST["save"]))
{
	$name=$_POST["txtname"];
	$contact=$_POST["txtcontact"];
	$email=$_POST["txtemail"];
	$address=$_POST["txtaddress"];
	$district=$_POST["ddldistrict"];
	$place=$_POST["ddlplace"];
	$photo=$_FILES["photo"]["name"];
	$temp=$_FILES["photo"]["tmp_name"];
	move_uploaded_file($temp,"../Assets/Files/UserDocs/".$photo);
	$temp=$_FILES["photo"]["tmp_name"];
	$password=$_POST["txtpassword"];
	 $insQry="insert into tbl_staff(staff_name,staff_contact,staff_email,staff_address,place_id,staff_image,staff_password)values('".$name."','".$contact."','".$email."','".$address."','".$place."','".$photo."','".$password."')";

	
	if($conn->query($insQry))
	{
		?>
<script>
		alert("Data Inserted!!");
		window.location="Staffregistration.php";
		</script>
        <?php
	}
	else
	{
		?>
<script>
		alert("Data Not Inserted!!");
		window.location="Staffregistration.php";
		</script>
        <?php
	}
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
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        input[type="text"]:focus,
        input[type="file"]:focus,
        select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Style the form header */
        td[colspan="2"] {
            background-color: #4CAF50;
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
        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table>
                <tr>
                    <td height="110" colspan="2">
                        <table>
                            <tr>
                                <td><label for="name">Name</label></td>
                                <td><input type="text" name="txtname" id="name" /></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email</label></td>
                                <td><input type="text" name="txtemail" id="email" /></td>
                            </tr>
                            <tr>
                                <td><label for="contact">Address</label></td>
                                <td><input type="text" name="txtcontact" id="contact" /></td>
                            </tr>
                            <tr>
                                <td><label for="address">Contact</label></td>
                                <td><input type="text" name="txtaddress" id="address" /></td>
                            </tr>
                            <tr>
                                <td><label for="district">District</label></td>
                                <td>
                                    <select name="ddldistrict" id="district" onchange="getPlace(this.value)">
                                        <option>Select</option>
                                        <?php
                                        $selQry = "select * from tbl_district";
                                        $row = $conn->query($selQry);
                                        while ($data = $row->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $data["district_id"] ?>"><?php echo $data["district_name"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="ddlplace">Place</label></td>
                                <td>
                                    <select name="ddlplace" id="ddlplace">
                                        <option>Select</option>
                                        <?php
                                        $selQry = "select * from tbl_Place";
                                        $row = $conn->query($selQry);
                                        while ($data = $row->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $data["place_id"] ?>"><?php echo $data["place_name"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="photo">Photo</label></td>
                                <td><input type="file" name="photo" id="photo" /></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td><input type="text" name="txtpassword" id="password" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="save" id="save" value="Save" />
                                    <input type="submit" name="cancel" id="cancel" value="Cancel" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

</body>
</html>
   <script src="../Assets/JQuery/jQuery.js"></script>
                        <script>
                            function getPlace(did)
                            {
                                $.ajax({url:"../Assets/AjaxPages/Ajaxplace.php?did=" + did,
                                success: function(result){
                                    $("#ddlplace").html(result);
                                }
                            })
                            }
                           
                        </script>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>