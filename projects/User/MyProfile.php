
<html>
  <head>
    <title>MY PROFILE</title>
  </head>  
  <body>
<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");

$selQry = "select * from tbl_user where user_id='".$_SESSION["uid"]."'";
$row = $conn->query($selQry);
if($data=$row->fetch_assoc())
{	
    
?>
  
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>
<body>
<div class="container">
  <h1>MY PROFILE</h1>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="../Assets/Files/UserDocs/<?php echo $data["user_image"] ?>" alt="User Image" class="img-fluid rounded-circle" style="max-width: 200px; max-height: 200px;">
                    </div>
                    <div class="col-md-8">
                        <h4 class="card-title">User Information</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <td><?php echo $data["user_name"] ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo $data["user_address"] ?></td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td><?php echo $data["user_contact"] ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $data["user_email"] ?></td>
                            </tr>
                        </table>
                        <div class="text-center">
                            <a href="Editprofile.php" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</DIV>

    <!-- Add Bootstrap JavaScript links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php
}
?>

</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>