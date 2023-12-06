<?php
session_start();
include("../Assets/Connection/Connection.php");

if(isset($_POST["login"]))
{

	$Email = $_POST["login_email"];
	$Password = $_POST["login_passwords"];
	
	$selU = "select * from tbl_user where user_email='".$Email."' and user_password='".$Password."'";
	$rowU = $conn->query($selU);
	
	$selAdmin = "select * from tbl_admin where admin_email='".$Email."' and admin_password='".$Password."'";
	$rowAdmin = $conn->query($selAdmin);
	
	
	if($dataU=$rowU->fetch_assoc())
	{
		$_SESSION["uid"]=$dataU["user_id"];
		$_SESSION["uname"]=$dataU["user_name"];
		header("Location:../User/UserHome.php");
	}
	else if($dataAdmin=$rowAdmin->fetch_assoc())
	{
		$_SESSION["lgid"]=$dataAdmin["admin_id"];
		$_SESSION["lgname"]=$dataAdmin["admin_name"];
		header("Location:../Admin/HomePage.php");
	}
	else
	{
		?>
        <script>
		alert("Invalid Credentials!!!");
		window.location="login.php";
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
  <title>Login Page</title>
  <link rel="shortcut icon" type="image/png" href="../Assets/Templates/Admin/images/logos/favicon.png" />
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
                <!-- <p class="text-center">Your Social Campaigns</p> -->
                <form action="" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" name="login_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="login_passwords" class="form-control" id="exampleInputPassword1">
                  </div>
                  <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div> -->
                    <!-- <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a> -->
                  <!-- </div> -->
                  <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="login" value="Sign In" />
                  
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

</html>