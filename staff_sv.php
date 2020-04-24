 <?php
  include_once 'staffs_crud.php';
  // include_once 'session.php';
  // include_once 'session_sv.php';
?>


 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Google Store : Staffs</title>
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php include_once 'nav_bar_sv.php'; ?>
 
<div class="container-fluid">
   <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Update Staffs</h2>
      </div>
		<form action="staffs.php" method="post" class="form-horizontal">
     <div class="form-group">
          <label for="productid" class="col-sm-3 control-label"> Staff ID</label>
          <div class="col-sm-9">
      <input name="sid" type="text" class="form-control" placeholder="Staff ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_num']; ?>" required> 
    </div>
  </div>
     <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">First Name</label>
          <div class="col-sm-9">
      <input name="fname" type="text" class="form-control" placeholder="First Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_fname']; ?>"required>
      </div>
      </div> 
     <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">Last Name</label>
          <div class="col-sm-9">
      <input name="lname" class="form-control" placeholder="Last Name" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_lname']; ?>"required> 
    </div>
  </div>
      <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">Phone Number</label>
          <div class="col-sm-9">
      <input name="phone" class="form-control" placeholder="Phone Number" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_phone']; ?>" required>
    </div>
  
  </div>
      <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">Email Address</label>
          <div class="col-sm-9">
      <input name="email" type="text" class="form-control" placeholder="Email Address" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_email']; ?>" required> 
      </div>
      
  </div>
      <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">Gender</label>
          <div class="col-sm-9">
            <div class="radio">
            <label>
      <input name="gender" type="radio" value="Male" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Male") echo "checked"; ?>reuired> Male
    </label>
  </div>
       <div class="radio">
            <label>
      <input name="gender" type="radio" value="Female" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Female") echo "checked"; ?>> Female 
    </label>
  </div>
</div>
</div>
      <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldsid" value="<?php echo $editrow['fld_staff_num']; ?>">
      <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Update</button>
      <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span>Clear</button>
      <?php }?>
     
   </div>
 </div>
    </form>
  </div>
</div>
    <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Staff List</h2>
      </div>
      <table class="table table-striped table-bordered">
      <tr>
        <th>Staff ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Phone Number</th>
        <th>Email Address</th>
        <th></th>
      </tr>
      <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_staffs_a166118_pt2");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['fld_staff_num']; ?></td>
        <td><?php echo $readrow['fld_staff_fname']; ?></td>
        <td><?php echo $readrow['fld_staff_lname']; ?></td>
        <td><?php echo $readrow['fld_staff_gender']; ?></td>
        <td><?php echo $readrow['fld_staff_phone']; ?></td>
        <td><?php echo $readrow['fld_staff_email']; ?></td>
        <td class="text-nowrap">
          <a href="staff_sv.php?edit=<?php echo $readrow['fld_staff_num']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
    </table>
  </div>
</div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

