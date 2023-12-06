<?php
include("../Connection/Connection.php");
?>
<option >Select</option>
<?php
					$selQry = "select * from tbl_Place where district_id='".$_GET["did"]."'";
					$row = $conn->query($selQry);
					while($data=$row->fetch_assoc())
					{ 
		  ?>
          <option value="<?php echo $data["place_id"]?>"><?php echo $data["place_name"]?></option>
          <?php
					}
		  ?>