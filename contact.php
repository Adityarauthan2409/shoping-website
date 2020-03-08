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
        <form id="contact_form"  name="contact_form">
        <fieldset>
            <legend>Contact Us</legend>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" name="n" placeholder="enter name" autofocus="autofocus"></td>
                </tr>
                <tr>
                    <td><label for="name">Email</label></td>
                    <td><input type="text" name="e" placeholder="enter email" autofocus="autofocus"></td>
                </tr>
                <tr>
                    <td><label for="name">Message</label></td>
                    <td><textarea name="message" name="m" placeholder="enter message" cols="40" rows="5" autofocus="autofocus"></textarea></td>
                </tr><br>
                <tr><td></td><td><input type="submit" name="sub" value="Submit"></td></tr>
            </table>
        </fieldset>
        </form>
        
        <?php
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'mywebsite');
        if(isset($_REQUEST['sub']))
        {
            $n=$_REQUEST['n'];
            $e=$_REQUEST['e'];
            $m=$_REQUEST['m'];
            $que="insert into contact values('$n','$e','$m')";
            $rs=mysqli_query($con,$que);
            if($rs>0)
            {
                echo "message sent";
            }
            else
                echo "messaage not sent";
        }
        ?>
    </body>
</html>