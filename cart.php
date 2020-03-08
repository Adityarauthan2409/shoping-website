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
      <div class="cont">
          <div class="row">
              <div class="col-md-8" style="background:lightblue; height:10%;">
                  <center><h1 style="color:green;">My shopping hub</h1></center>
              </div>
              
              <div class="col-md-4" style="background:cyan; height:10%;">
                  <?php
                  session_start();
                  if(isset($_SESSION['loguser']))
                      echo "<h3> &nbsp;".$_SESSION['loguser']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='lout.php'>Logout</a></h3>";
                  
                  else
	                   echo "<h3><a href='main.php'></a></h3>";
                  ?>
                    <button type="button" class="btn btn-primary">
                      Cart <span class="badge badge-light">4</span>
                  </button>
              </div><br><br>
      
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
                      <img src="images/onshop.jpg" style="height:60%; width:90%;">
                  </div>
              </div>
          </div>
          </div>
      </div>
     
      <?php
      $con=mysqli_connect('localhost','root','') or die("enable to connect".mysqli_error($con));
      mysqli_select_db($con,'mywebsite') or die("enable to select database".mysqli_error());
      $id=$_REQUEST['cid'];
      $a="select * from product where pid='$id'";
      $rs=mysqli_query($con,$a);
      $r=mysqli_fetch_array($rs);
      $a=$r[1];
      $b=$r[2];
      $c=$r[3];
      $u=$_SESSION['loguser'];
      
      $q="select * from register where uname='$u'";
      $rs=mysqli_query($con,$q);
      $r=mysqli_fetch_array($rs);
      echo "<br><br>";
      $d=$r[2];
      $e=$r[3];
      $f=$r[5];
      ?>
      
      <?php
      $con=mysqli_connect('localhost','root','');
      mysqli_select_db($con,'mywebsite');
      $a="insert into cart(pname,pcate,Amount,Username,Email,Phone) values('$a','$b','$c','$d','$e','$f')";
      $x=mysqli_query($con,$a);
      echo "product added";
      ?>
      
  </body>
</html>

