<?php
    include("connection.php");
?>

<html>
    <head>
        <title>Registration page</title>
    </head>
    <body>
        <form method="POST">
            user name <input type="text" name="u"><br><br>
            password <input type="password" name="p1"><br><br>
            conform password <input type="password" name="p2"><br><br>
            Email id <input type="text" name="e"><br><br>
          
            dob <input type="date" name="d"><br><br>
            <input type="submit" value="Sign Up" name="b2">
        </form>
    </body>
</html>
<?php
if(isset($_POST["b2"]))
{
    $u=$_POST["u"];
    $p1=$_POST["p1"];
    $p2=$_POST["p2"];
    $email=$_POST["e"];
    $dob=$_POST["d"];
    if($p1==$p2)
    {
        $sql="insert into reg values('$u','$p1','$email','$dob')";
        $result=mysqli_query($conn,$sql);

    }
    else
    {
        echo "password does not match";
    }
    
    
    //$num = mysqli_num_rows($result); 
}
?>

