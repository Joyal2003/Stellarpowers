<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PLACE DETAILS</title>
</head>

<body>
<?php
//session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if(isset($_POST["save"]))
{
	$district=$_POST["ddlDistrict"];
	$place=$_POST["txtplace"];
	
	$insQry="insert into tbl_place(place_name,district_id)values('".$place."','".$district."')";

	
	if($conn->query($insQry))
	{
		?>
<script>
		alert("Data Inserted!!");
		window.location="PlaceDetails.php";
		</script>
        <?php
	}
	else
	{
		?>
<script>
		alert("Data Not Inserted!!");
		window.location="PlaceDetails.php";
		</script>
        <?php
	}
}


if(isset($_GET["did"]))
	{
		$delqry="delete from tbl_place where place_id='".$_GET["did"]."'";
		$conn->query($delqry);
		header("location:PlaceDetails.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Details</title>
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
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        input[type="text"]:focus,
        select:focus {
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
            <table width="415" border="1" align="center">
                <tr>
                    <td width="115"><label for="ddlDistrict">District Name</label></td>
                    <td width="242">
                        <select name="ddlDistrict" id="ddlDistrict">
                            <?php
                            $selQry = "select * from tbl_district";
                            $row = $conn->query($selQry);
                            while($data = $row->fetch_assoc()) { 
                            ?>
                            <option value="<?php echo $data["district_id"] ?>"><?php echo $data["district_name"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td><input type="text" name="txtplace" id="txtplace" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="save" id="save" value="Save" />
                        <input type="submit" name="cancel" id="cancel" value="Cancel" />
                    </td>
                </tr>
            </table>
            <br />
            <br />
            <table width="200" border="1" align="center">
                <tr>
                    <th>
                        <table width="421" height="89" border="1">
                            <tr>
                                <td>Sl no</td>
                                <td>District</td>
                                <td>Place</td>
                                <td>Action</td>
                            </tr>
                            <?Php
                            $i = 0;
                            $selQry = "select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
                            $row = $conn->query($selQry);
                            while($data = $row->fetch_assoc()) { 
                                $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data["district_name"] ?></td>
                                <td><?php echo $data["place_name"] ?></td>
                                <td><a href="PlaceDetails.php?did=<?php echo $data["place_id"] ?>">Delete</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </th>
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