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
              <div class="col-md-12" style="background:lightblue;">
                  <center><h1 style="color:green;">My shopping hub</h1></center>
              </div>
          </div>
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
                      <button id="dLabel" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      
              <?php
              if(isset($_SESSION['loguser']))
              {
              ?>
              <div class="col-md-2" style="background:pink; height:40px;">
                  <h4>
                  <?php
                  echo $_SESSION['loguser'];
                  ?>
                  <a href="lout.php">Logout</a>
                      <button type="button" class="btn btn-primary">
                      Cart <span class="badge badge-light">4</span>
                      </button>
              </h4>
          </div>
          <?php
              }
      else
      {
          ?>
      
    <?php
      }
    ?>
          
      <div class="cont">
          <div class="row">
          <div class="col-md-12">
              <?php
              $con=mysqli_connect('localhost','root','');
              mysqli_select_db($con,'mywebsite');
              $cat=$_REQUEST['Pcate'];
              $q="select * from product where Pcate='$cat'";
	          $rs=mysqli_query($con,$q);
              while($x=mysqli_fetch_array($rs))
              {
                  ?>
              
              <div class="row">
                  <div class="col-md-1"></div>
                      <div class="col-md-4" style="border:2px solid purple; height:400px; background:yellow;">
                          <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">
                                  <div class="card" style="width: 25rem;">
                                   <img src="images//<?php echo $x[5];?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo $x[1]; ?></h5>
                                     <p class="card-text">Price:<?php echo $x[3];?></p>
                                     <p class="card-text"><?php echo $x[4];?></p>
                                     <a href="buy.php?bid=<?php echo $x[0]; ?>" class="btn btn-primary">Buy</a>
                                     <a href="cart.php?cid=<?php echo $x[0];?>" class="btn btn-primary">Cart</a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                  </div>
            
                  
                                  
                  
                  <?php
                  $x=mysqli_fetch_array($rs);
                  ?>
                  <div class="col-md-1"></div>
                  <div class="col-md-4" style="border:2px solid yellow; height:400px; background:purple;">
                      <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                             <div class="card" style="width: 25rem;">
                                   <img src="images//<?php echo $x[5];?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo $x[1]; ?></h5>
                                     <p class="card-text">Price:<?php echo $x[3];?></p>
                                     <p class="card-text"><?php echo $x[4];?></p>
                                     <a href="buy.php?bid=<?php echo $x[0]; ?>" class="btn btn-primary">Buy</a>
                                     <a href="cart.php?cid=<?php echo $x[0];?>" class="btn btn-primary">Cart</a>
                                    </div>
                                  </div>
        
          </div>
          </div>
        </div>
              </div>
            <?php
              }
              ?> 
              </div>
              </div>
          </div>
  </body>
</html>
 