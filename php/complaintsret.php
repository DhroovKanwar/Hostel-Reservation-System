<html>
<head>

    <link rel="stylesheet" type="text/css"  href="css/complaintsret.css">

    </head>
    <body id="b">

        <form action="complaints.php" method="post">

            <?php

$complaint=$_POST['c'];
$name=$_POST['n'];
            $room=$_POST['r'];            
            



$conn=new mysqli("localhost","root","","dhruv");
if($conn->connect_error)
{
    echo"not connected".connect_error();
}


mysqli_select_db($conn,"dhruv");
$query1="CREATE TABLE Comp(Complaints text,Name text,Room_no text)";
$query2="INSERT INTO Comp VALUES('$complaint','$name','$room')";
   if(mysqli_query($conn,$query2))
      { echo "<marquee direction='down'><h1>Your Complaint has been Registered</h1></marquee>"; }

    else {  
        mysqli_query($conn,$query1); 
        mysqli_query($conn,$query2);    
        echo "<marquee direction='down'><h1>Your Complaint has been Registered</h1></marquee>"; 
    }

?>
           <h1 id="q">See your Complaint</h1>
 <button id="delete" input type="submit" formaction="complaints.php">Click Here</button>
        </form>
    </body>
</html>
