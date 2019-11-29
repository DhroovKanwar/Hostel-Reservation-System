<html>
<head>
    <link rel="stylesheet" type="text/css"  href="css/complaints.css">
    </head>
    <body>
         <form action="#" method="post">
        <button id="delete" input type="submit" formaction="home.html">Home</button>

        <?php
$conn=new mysqli("localhost","root","","dhruv");
    if($conn->connect_error)
    {
    echo("connection failed".$conn->connect_error());    
        
    }

mysqli_select_db($conn,"dhruv");
echo"<h1>Complaint Page</h1>";
$query1="Select * from Comp";
$result=mysqli_query($conn,$query1);
echo"<table><tr><th><h1>Name</h1></th><th><h1>Room No.</h1></th><th><h1>Complaints</h1></th></tr>";
if(mysqli_num_rows($result) > 0)
{
while($row=mysqli_fetch_assoc($result)) 
{
    
    echo"<tr><td>".$row['Name']."</td><td>".$row['Room_no']."</td><td>".$row['Complaints']."</td></tr>";
}
    
    echo"</table>";
}
else{
    echo"";
}
    
       ?>
        </form>
    </body>
</html>