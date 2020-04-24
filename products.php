<?php
  include_once 'products_crud.php';
  include_once 'db.php';
  // include_once 'session.php';
?>
 
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Google Store : Products</title>
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- <title>Google Store : Products</title> -->
<script type="text/javascript">

           function openModal(cpid){
             $('.modal-body').load('modal.php?pid='+cpid,function(){
                  $('#myModal').modal({show:true});
              });
           }

          </script>

</head>
<body>

    <?php include_once 'nav_bar.php'; ?>

    <div class="container-fluid">

  
    <!-- <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a> -->
    <div class="row">
     <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Create New Product</h2>
      </div>

    
    <form action="products.php" method="post" class="form-horizontal">
      <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
      <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>" required> 
      </div>
        </div>
      <div class="form-group">
          <label for="productname" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
      <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>" required>
       </div>
        </div>
        <div class="form-group">
          <label for="productprice" class="col-sm-3 control-label">Price</label>
          <div class="col-sm-9">
      <input name="price" type="number" class="form-control" id="productprice" placeholder="Product Price" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>" min="0.0" step="0.01" required>
      </div>
        </div>
      <div class="form-group">
          <label for="productbrand" class="col-sm-3 control-label">Brand</label>
          <div class="col-sm-9">
      <select name="brand" class="form-control" id="productbrand" required>
            <option value="">Please select</option>
        <option value="Google" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Google") echo "selected"; ?>>Google</option>
        <option value="Apple" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Apple") echo "selected"; ?>>Apple</option>
        <option value="Samsung" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Samsung") echo "selected"; ?>>Samsung</option>
        <option value="Xiaomi" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Xiaomi") echo "selected"; ?>>Xiaomi</option>
        <option value="Huawei" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Huawei") echo "selected"; ?>>Huawei</option>
      </select>
       </div>
        </div>    
        <div class="form-group">
          <label for="productcond" class="col-sm-3 control-label">Condition</label>
          <div class="col-sm-9">
          <div class="radio">
            <label>
      <input name="cond" type="radio" id="productcond" value="New" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="New") echo "checked"; ?> required> New
      </label>
          </div>
          <div class="radio">
            <label>
      <input name="cond" type="radio" id="productcond" value="Used" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Used") echo "checked"; ?>> Used
      </label>
            </div>
          </div>
      </div>
        <div class="form-group">
          <label for="productyear" class="col-sm-3 control-label">Manufacturing Year</label>
          <div class="col-sm-9">
      <select name="year" class="form-control" id="productyear" required>
            <option value="">Please select</option>
        <option value="2012" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2012") echo "selected"; ?>>2012</option>
        <option value="2013" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2013") echo "selected"; ?>>2013</option>
        <option value="2014" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2014") echo "selected"; ?>>2014</option>
        <option value="2015" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2015") echo "selected"; ?>>2015</option>
        <option value="2016" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2016") echo "selected"; ?>>2016</option>
        <option value="2017" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2017") echo "selected"; ?>>2017</option>
        <option value="2018" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2018") echo "selected"; ?>>2018</option>
        <option value="2019" <?php if(isset($_GET['edit'])) if($editrow['fld_product_year']=="2019") echo "selected"; ?>>2019</option>
      </select>
       </div>
        </div>  
      <div class="form-group">
          <label for="productq" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
      <input name="quantity" type="number" class="form-control" id="productq" placeholder="Product Quantity" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_quantity']; ?>"  min="0" required>
      </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
      <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
      <?php } else { ?>
      <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
      <?php } ?>
      <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
      </div>
      </div>
    </form>
     </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Products List</h2>
      </div>
      <table class="table table-striped table-bordered">
    
      <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Year</th>
        <th>Condition</th>
        <th>Action</th>
      </tr>
      <?php
      // Read
      $per_page = 5;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("select * from tbl_products_a166118_pt2 LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
        <td><?php echo $readrow['fld_product_num']; ?></td>
        <td><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_year']; ?></td>
        <td><?php echo $readrow['fld_product_condition']; ?></td>
        <td>
          <a data-href="modal.php?pid=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-warning btn-xs" role="button" data-toggle="modal" id="btnModal"> Details</a>
<a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
          <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Product Details</h4>
              </div>
              <div class="modal-body">

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div></td>

      </tr>
      <div id="tmpModal"></div>
        
      <?php
      }
    
      ?>
 
    </table>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a166118_pt2");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"products.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </center>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
$('[id*="btnModal"]').on('click',function(){
   var dataURL = $(this).attr('data-href');
    $('.modal-body').load(dataURL,function(){
        $('#myModal').modal({show:true});
    });
});
});
</script>
 
</body>
</html>