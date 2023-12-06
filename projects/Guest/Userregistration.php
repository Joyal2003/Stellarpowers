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
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <link rel="shortcut icon" type="image/png" href="../Assets/Templates/Main/img/steller.png" />
  <link rel="stylesheet" href="../Assets/Templates/Admin/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../Assets/Templates/Main/img/steller.png" width="180" alt="">
                </a>
                <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input required type="text" name="txtname" class="form-control" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$"/>
        </div>
        <div class="mb-3">
          <label for="contact" class="form-label">Contact</label>
          <input type="text" required name="txtcontact" class="form-control" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9"/>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input required type="text" name="txtemail" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="txt_address" class="form-label">Address</label>
          <input required type="text" name="txtaddress" class="form-control" id="txt_address">
        </div>
        <div class="mb-3">
          <label for="district" class="form-label">District</label>
          <select name="ddldistrict" required class="form-select" id="district" onchange="getPlace(this.value)">
            <option>Select</option>
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
        </div>
        <div class="mb-3">
          <label for="ddlplace" class="form-label">Place</label>
          <select required name="ddlplace" class="form-select" id="ddlplace">
            <option>Select</option>
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
          </select>
        </div>
        <div class="mb-3">
          <label for="photo" class="form-label">Photo</label>
          <input type="file" name="photo" class="form-control" id="photo">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="txtpassword" />       
        </div>
        <div class="mb-4">
          <div class="text-center">
            <input type="submit" name="save" class="btn btn-primary" id="save" value="Save">
            <input type="submit" name="cancel" class="btn btn-secondary" id="cancel" value="Cancel">
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../Assets/Templates/Admin/libs/jquery/dist/jquery.min.js"></script>
  <script src="../Assets/Templates/Admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
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
</html>