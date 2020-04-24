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
      <a class="navbar-brand" href="#">Google Store</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
    </ul>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php if (isset($_SESSION['name']))  echo $_SESSION['name']; else echo "Login As";?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="index_login.php">Admin</a></li>
                    <li><a href="index_login_sv.php">Supervisor</a></li>
                    <li><a href="index_login_staff.php"> Normal Staff</a></li>
                    
                  </ul>
                </li>
              </ul>
            </div><!-- /.n





</body>
</html>








    


      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>