<html>
  <head> 
    <link href="bt3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bt3/dist/js/bootstrap.min.js"></script>
      
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      
  </head>
    
  <body>
      <div class="cont" style="background:lightblue;">
          <div class="row">
              <div class="col-md-2">
                  <img src="images/Rauthan's%20Logo.png" style="height:63px; width:200px;">
              </div>
              <div class="col-md-6" style="background:lightblue; height:10%;">
                  <center><h1 style="color:green; margin-top:10px; font-size:36";>My shopping hub</h1></center>
              </div>
              
              <?php
              session_start();
              if(isset($_SESSION['loguser']))
              {
              ?>
              <div class="col-md-1"></div>
              <div class="col-md-2" style="background:pink; height:10%;">
                <?php echo $_SESSION['loguser'];?>
              <h4>
                  <a href="lout.php">Logout</a>
              </h4>
              </div>
              
              <div class="col-md-1" style="height:10%;">
                  <a href="#" class="btn btn-info btn-lg">
                      <span class="badge badge-light">4</span>
                      <span class="glyphicon glyphicon-shopping-cart"></span>Cart
                  </a>
                  
          <?php
              }
              else
              {
              ?>
              <div class="col-md-1"></div>
              <div class="col-md-3" style="height:10%;">
                  <form>
                  <a href="" data-toggle="modal" data-target="#myModal"><h2>Register/Sign up</h2></a>
                  <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Register here</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                  <input type="text" class="form-control" name="n" placeholder="Enter name"><br>
                                  <input type="text" class="form-control" name="un" placeholder="Enter username"><br>
                                  <input type="text" class="form-control" name="e" placeholder="Enter email"><br>
                                  <input type="text" class="form-control" name="pas" placeholder="Enter password"><br>
                                  <input type="text" class="form-control" name="ph" placeholder="Enter phone">
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <input type="submit" name="reg" value="Register">
                              </div>
                          </div>
                              </div>

                      </div>
                  </div>
                  </form>
                  
                          <?php
                    $con=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($con));
                    mysqli_select_db($con,'mywebsite') or die("enable to select database".mysqli_error());
                    if(isset($_REQUEST['reg']))
                    {
	
	                   $n=$_REQUEST['n'];
	                   $un=$_REQUEST['un'];
                       $e=$_REQUEST['e'];
                       $pas=$_REQUEST['pas'];
                       $ph=$_REQUEST['ph'];
	                   $q="insert into register(Name,Uname,Email,Pass,Phone) values('$n','$un','$e','$pas','$ph')";
	                   $rs=mysqli_query($con,$q);
	                   if($rs>0)
	                   {
                           echo "register successful";
	                   }	else
                           echo "<h2>register failed</h2>";
                    }
                  ?>
                  
                  
                  <form>
                     <a href="" data-toggle="modal" data-target="#myModallogin"><h2>Login</h2></a>
                  <div id="myModallogin" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Login Here</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                  <input type="text" class="form-control" name="em" placeholder="Enter email"><br>
                                  <input type="text" class="form-control" name="p" placeholder="Enter password"><br>
                                  </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <input type="submit" name="log" value="Login">
                              </div>
                          </div>
                              </div>
                      </div>
                  </div>
              </form>
                  
                  <?php
              }
                    $con=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($con));
                    mysqli_select_db($con,'mywebsite') or die("enable to select database".mysqli_error());
                    if(isset($_REQUEST['log']))
                    {
	
	                   $n=$_REQUEST['em'];
	                   $p=$_REQUEST['p'];
	                   $q="select * from register where Email='$n' and Pass='$p'";
	                   $rs=mysqli_query($con,$q) or die("enable to execute query".mysqli_error($con));
	                   $x=mysqli_num_rows($rs);
	                   if($x>0)
	                   {
                           $_SESSION['loguser']=$n;
                           header('location:home.php');
	                   }	else
                           echo "<h2>Invlaid user name or password</h2>";
                    }
                  ?>
                  
                  
                  </div> 
          </div>
          </div>
      </div><br><br>
          
          <div class="cont">
              <div class="row">
                  <div class="col-md-12">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="contact.php">Contact</a></li>
                              <li class="breadcrumb-item"><a href="about.php">About</a></li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      
      <div class="cont" style="background:lightgreen;">
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <div class="dropdown">
                      <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Laptop
                          <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dLabel">
                          <li><a href="pdetail.php?Pcate=laptop accer">Accer</a></li>
                          <li><a href="pdetail.php?Pcate=laptop sony">Sony</a></li>
                          <li><a href="pdetail.php?Pcate=laptop dell">Dell</a></li>
                          <li><a href="pdetail.php?Pcate=laptop hcl">HCL</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <div class="dropdown">
                      <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Computer
                          <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dLabel">
                          <li><a href="pdetail.php?Pcate=computer samsung">Samsung</a></li>
                          <li><a href="pdetail.php?Pcate=computer sony">Sony</a></li>
                          <li><a href="pdetail.php?Pcate=computer microsoft">Microsoft</a></li>
                          <li><a href="pdetail.php?Pcate=computer hcl">HCL</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <div class="dropdown">
                      <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Mobile
                          <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dLabel">
                          <li><a href="pdetail.php?Pcate=mobile nokia">Nokia</a></li>
                          <li><a href="pdetail.php?Pcate=mobile redmi">Redmi</a></li>
                          <li><a href="pdetail.php?Pcate=mobile apple">Apple</a></li>
                          <li><a href="pdetail.php?Pcate=mobile samsung">Samsung</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
          
      
          <div class="cont">
              <div class="row">
                  <div class="col-md-12">
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cr2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/cr1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/cr3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                  </div>
                  </div>
              </div>
          
  </body>
</html>
