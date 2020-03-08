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
    <input type="text" name="email" class="form-control" placeholder="enter email"><br>
    <input type="password" name="pass" class="form-control" placeholder="enter password"><br>
    <input type="submit" name="li" class="form-control" value="Login">
</div>   
</form>
                    </center>
                </table>
            </div>
        </div>
    </div>
    
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'mywebsite');
if(isset($_REQUEST['li']))
{
	
	$e=$_REQUEST['email'];
	$p=$_REQUEST['pass'];
	$q="select * from register where Email='$e' and pass='$p'";
	$rs=mysqli_query($con,$q);
	$x=mysqli_num_rows($rs);
	if($x>0)
	{
		session_start();
		$_SESSION['loguser']=$e;
		header('location:buy.php');
	}	else
		echo "<h4>Invlaid user name or password</h4>";
}
?>
</body>
</html>