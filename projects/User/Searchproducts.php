<?php
session_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEARCH PRODUCTS</title>
</head>
<body>
<div id="msg" style="position: fixed;top: 90%;left: 80%;"></div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Menu</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Search Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form id="searchForm" name="searchForm" class="form-inline ml-auto" method="post" action="">
                <div class="form-group">
                    <label for="productType" class="mr-2">Product Type</label>
                    <select class="form-control" id="productType" name="ddlproduct" onchange="getProduct(this.value)">
                        <option value="">Select</option>
                        <?php
                        $selQry = "SELECT * FROM tbl_producttype";
                        $row = $conn->query($selQry);
                        while ($data = $row->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $data["producttype_id"] ?>"><?php echo $data["producttype_name"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ml-2">Search</button>
            </form>
        </div>
    </nav>

    <!-- Add Bootstrap JavaScript links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<div id="search">
<?php

	$selQry = "select * from tbl_product";
	$row = $conn->query($selQry);
	while($data=$row->fetch_assoc())
	{ 
		?>
        
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="../Assets/Files/UserDocs/<?php echo $data['product_image'] ?>" alt="Product Image" class="img-fluid" style="max-height: 200px;">
            </div>
            <div class="col-md-8">
                <h2><?php echo $data["product_name"] ?></h2>
                <p><strong>Product ID:</strong> <?php echo $data["product_id"] ?></p>
                <p><strong>Description:</strong> <?php echo $data["product_description"] ?></p>
                <p><strong>Rate:</strong> <?php echo $data["product_rate"] ?></p>
                <a href="Viewmore.php?pid=<?php echo $data['product_id'] ?>" class="btn btn-primary">View More</a>
                <button onclick="addCart(<?php echo $data['product_id'] ?>)" class="btn btn-success">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JavaScript links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

    <?php
	}
	?>
</div>
<script src="../Assets/JQuery/jQuery.js"></script>
                        <script>
                            function getProduct(pid)
                            {
                                $.ajax({url:"../Assets/AjaxPages/Ajaxproduct.php?pid=" + pid,
                                success: function(result){
                                    $("#search").html(result);
                                }
                            })
                            }
                           function addCart(cid)
                            {
                                $.ajax({url:"../Assets/AjaxPages/AjaxAddCart.php?pid=" + cid,
                                success: function(result){
                                    $("#msg").html(result);
                                }
                            })
                            }
                           
                        </script>
</body>
</html>
