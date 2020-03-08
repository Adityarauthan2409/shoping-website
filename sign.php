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
<body bgcolor="orange" text="white">
    <div class="cont">
        <div class="row">
            <div class="col-md-4" style="background:lightblue;">
                <table border="2" cellspacing=10 cellpadding=10>
                    <center>              
<form> 
<div class="form-group">
    <input type="text" name="na" class="form-control" placeholder="enter name"><br>
    <input type="text" name="us" class="form-control" placeholder="enter username"><br>
    <input type="text" name="em" class="form-control" placeholder="enter email"><br>
    <input type="text" name="pas" class="form-control" placeholder="enter password"><br>
    <input type="text" name="ph" class="form-control" placeholder="enter phone"><br>
    <input type="submit" name="su" class="form-control" value="Sign up">
</div>   
</form>
                    </center>
                </table>
            </div>
        </div>
    </div>
        
    
<?php
$con=mysqli_connect('localhost','root','')or die("enable to connect".mysqli_error($con));
mysqli_select_db($con,'mywebsite')or die("enable to connect database".mysqli_error());
if(isset($_REQUEST['su']))
{
	
	$us=$_REQUEST['us'];
    $em=$_REQUEST['em'];
    $ph=$_REQUEST['ph'];
    $pas=$_REQUEST['pas'];
	$na=$_REQUEST['na'];
	$q="Insert into register (Name,Uname,Email,Pass,Phone) values('$na','$us','$em','$pas','$ph')";
	$rs=mysqli_query($con,$q)or die("enable to execute query".mysqli_error($con));
	if($rs>0)
	{
		session_start();
		$_SESSION['loguser']=$n;
		header('location:log.php');
	}	else
		echo "<h4>Register failed</h4>";
}
?>
</body>
</html>