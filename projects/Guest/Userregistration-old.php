<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USER REGISTRATION</title>
</head>

<body>
<?php
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
	$password=$_POST["txtpassword"];
	$insQry="insert into tbl_user(user_name,user_contact,user_email,user_address, place_id,user_image,user_password)values('".$name."','".$contact."','".$email."','".$address."','".$place."','".$photo."','".$password."')";

	
	if($conn->query($insQry))
	{
		?>
<script>
		alert("Data Inserted!!");
		window.location="Userregistration.php";
		</script>
        <?php
	}
	else
	{
		?>
<script>
		alert("Data Not Inserted!!");
		window.location="Userregistration.php";
		</script>
        <?php
	}
}
?>
<a href="UserHome.php">HomePage</a>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="389" border="1" align="center">
  <tr >
    <td height="110" colspan="2"><table width="389" border="1" align="center">
      <tr>
        <td width="92">Name</td>
        <td width="281"><label for="name"></label>
          <input type="text" name="txtname" id="name" /></td>
      </tr>
      <tr>
        <td>Contact</td>
        <td><label for="contact"></label>
          <input type="text" name="txtcontact" id="contact" /></td>
      </tr>
      <tr>
        <td><p>Email</p></td>
        <td><label for="email"></label>
          <input type="text" name="txtemail" id="email" /></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><label for="address"></label>
          <label for="txt_address"></label>
          <input type="text" name="txtaddress" id="txt_address" /></td>
      </tr>
      <tr>
        <td>District</td>
        <td><label for="district"></label>
          <label for="bf"></label>
          <label for="district"></label>
          <select name="ddldistrict" id="district" onchange="getPlace(this.value)">
          <option >Select</option>
           <?php
					$selQry = "select * from tbl_district";
					$row = $conn->query($selQry);
					while($data=$row->fetch_assoc())
					{ 
		  ?>
          <option value="<?php echo $data["district_id"]?>"><?php echo $data["district_name"]?></option>
          <?php
					}
		  ?>
          </select>
          <label for="district"></label></td>
         
      </tr>
      <tr>
        <td><p>Place</p></td>
        <td><select name="ddlplace" id="ddlplace">
         <option >Select</option>
         <?php
					$selQry = "select * from tbl_Place";
					$row = $conn->query($selQry);
					while($data=$row->fetch_assoc())
					{ 
		  ?>
          <option value="<?php echo $data["place_id"]?>"><?php echo $data["place_name"]?></option>
          <?php
					}
		  ?>
        </select></td>
      </tr>
      <tr>
        <td>Photo</td>
        <td><label for="photo"></label>
          <input type="file" name="photo" id="photo" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label for="password"></label>
          <input type="txt" name="txtpassword" id="password" /></td>
      </tr>
      <tr >
        <td height="46" colspan="2" align="center"><input type="submit" name="save" id="save" value="Save" />
          <input type="submit" name="cancel" id="cancel" value="Cancel" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
</form>
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