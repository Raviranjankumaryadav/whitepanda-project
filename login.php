<?php
include("conntion.php");
error_reporting(0);

?>

<html>
    <head>
    <style>
        body{
            width:100%;
            height:100%;
            background:#2652ff;
        } 
        form{
            margin-top:5%;
            
        }
        .fom{
            border:none;
            width:250px;
            padding: 8px 2px;
            margin:1%;
            
        }
        .btn{
            width:250px;
             padding: 8px 2px;
            border:none;
            background:#ff266b;
            color:white;
            font-family:serif;
            
            
        }
        .btn:hover{
            width:300px;
            padding: 10px 3px;
            cursor:pointer;
        }
        
        
        
        </style>
    
    
    </head><center>
    <body>
<form action=" " method="GET">
    
    <input type="text" name="username" value=""placeholder="Enter your name *"class="fom" required><br>
    <input type="email"name="email"value=""placeholder="Enter your email*" class="fom"  required><br>
    <input type="tel" name="phone" value=""placeholder="mobi no*"class="fom"  required*><br>
    <input type="date" name="bdate" value=""class="fom" ><br>
    <input type="date" name="rdate" value=""class="fom" ><br>
    <input type="submit" name="submit" value="BOOKING"class="btn">
    
    
    
    
    
    
    
    </form>
</center>
    <?php
if($_GET['submit'])
{

$username=$_GET['username'];
$email=$_GET['email'];
$phone=$_GET['phone'];
    $bdate=$_GET['bdate'];
    $rdate=$_GET['rdate'];
    
if($username!="" && $email!="" && $phone!=""&& $bdate!=""&& $rdate!="")
{
$query="INSERT INTO car VALUES('$username','$email','$phone','$bdate','$rdate')";
$data=mysqli_query($conn,$query);
if($data){
echo"<center>BOOKING SUCCUSS<center>";
}
}
else{
echo"data is not inserted";
}

}



?>

    </body>



</html>