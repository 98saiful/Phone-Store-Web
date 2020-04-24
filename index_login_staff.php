
 <?php

session_start();

include("database.php");


if (isset($_POST['login1']))
{
  $email=$_POST['username1'];
  $pwd=$_POST['pwd1'];
  

  $sqlStatement = "SELECT * FROM tbl_staffs_a166118_pt2 WHERE fld_staff_email='$email' and fld_staff_password='$pwd'";

  $result=mysqli_query($con,$sqlStatement);

  $count = mysqli_num_rows($result);

    if($count < 1)
    {
    $resulterror="<div class='alert alert-danger alert-dismissable'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning!</strong> Incorrect username or password </div>" ;
    echo $resulterror;
    }

else
{
  
  
  while ($row = mysqli_fetch_array($result))
  {
    $_SESSION['name'] = $row['fld_staff_email'];
    
  
  
  }
  $result1='<div class="col-xs-12 col-sm-12 col-md-12"><div class="row"><div class="col-xs-1 col-sm-1 col-md-1"> </div><div class="col-xs-10 col-sm-10 col-md-10"><div class="alert alert-success alert-dismissable" style="margin-top:10px;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Login Success</div></div></div><div class="col-xs-1 col-sm-1 col-md-1"></div></div>';
      echo $result1;
      header("Location:index_staff.php");
      }
 
        
        
   
    
  }




  
  
?>
 <!DOCTYPE html>
  <?php include_once 'nav_bar_login.php'; ?>
        <html>




        <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 
    <title>Google Store</title>


     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
              <style >
    body{background-color:   #1A5276 ; /* Brown */
      color: #B2A8A8}
      
    </style>
        </head>
        <body>


 <style type="text/css">
          
    </style>

      

             <div class="row">
             <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

  <div class="well well-lg">
  <form method="post" action="">
    <div style="text-align:center;">
     <img src="logor.png" alt="Avatar" class="avatar" >
</div>
<br>
<br>
    <center>
      <p> Staffs Login </p>
    </center> 
    <br>
    <br>
    <div class="form-group">
      <label for="us">Username:</label>
      <input type="text" class="form-control" id="us" name="username1" placeholder="Enter username" required="">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd1" placeholder="Enter Password" required="">
    </div>
    
    <center><input type="submit" class="btn btn-default" value="Login" name="login1" style="width: 500px; background-color: lightblue; ">  </center></form>
    <br>
    






 </div>
             
  
              </div>
            </div>


         </div>
         

  
           
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

        </body>
        </html>
          