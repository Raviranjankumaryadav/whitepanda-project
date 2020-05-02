
<?php
include("conntion.php");
error_reporting(0);
$query="SELECT * FROM car";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0){
    ?>
<html>
    <head>
    <style>
        body{
            width:100%;
            height:100%;
            background:red;
        }
        table{
            width:60%;
            margin:2% 20% 0% 20%;
            height:400px;
           
        }
        table{
            border:2px solid blue;
            background:white;
            color:blue;
        }
        tr,th,td{
            text-align: center;
            
              border:2px solid blue;
            
        }
        h1{
            text-align:center;
            font-family: serif;
            font-size:20px;
            color:white;
            
        }
    
    
    
    </style>
    </head>
    <body>
        <h1><b>BOOKING DETAILS</b></h1>
    
    <table>
        <tr>
        <th>USER NAME</th>
        <th>EMAIL</th>
        <th>MOBI NO</th>
        <th>BOOKING DATE</th>
        <th>RETURN DATE</th>
        
        
        </tr>
        <?php
    while($result=mysqli_fetch_assoc($data)){
        echo"<tr>
        <td>".$result['username']."</td>
         <td>".$result['email']."</td>
          <td>".$result['phone']."</td>
        <td>".$result['bdate']."</td>
         <td>".$result['rdate']."</td>
        
        
        
        </tr>";
        
        
    }
        
       
    
    
}
else{
    echo"No Record Found";
}







?>
         </table>
    </body>
</html>