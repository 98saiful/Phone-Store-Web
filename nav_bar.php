<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('location: index_login.php');
 
}
?>
<nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Google Store</a>
               <div class="navbar-form navbar-left" >
                
          
      
        </form>
            </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php if (isset($_SESSION['name']))  echo $_SESSION['name']; else echo "Menu";?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="products.php">Products</a></li>
                    <li><a href="catalogue.php">Catalog</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="customers.php">Customers</a></li>
                    <li><a href="staffs.php">Staffs</a></li>
                    <li><a href="orders.php">Orders</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        