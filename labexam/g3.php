<html>
    <head>
        <style>
            body{
                background-color: pink;
                font-size:15px;
            }
            table{
                font-size:20px;
            }</style>
            </head>
            <body></body>
        </html>
<?php
$cc=mysqli_connect("localhost","root","","restaurant");
if($cc->connect_error)
    echo "connection failed";
else
{
  if(isset($_POST['s1']))
    {
        $w=($_POST['itemname']);
        $x=($_POST['itype']);
        $y=($_POST['quantity']);
        $z=($_POST['price']);
        $q="INSERT INTO rest values('$w','$x','$y','$z');";
        if($cc->query($q))
        {
            echo "details saved";
        } 
    }
    if(isset($_POST['s2']))
    {
        $sql="select * from rest";
        $result = $cc->query($sql);
        echo "<center><br><br><br>";
        echo "<table border='1'><caption>LIST OF ENTRIES</caption><tr>
	    <td>itemname</td>
	    <td>type</td>
            <td>Quantity</td>
	    <td>Price</td>
	    </tr>";
        while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>" . $row['itemname']. "</td><td>" . $row['itype']. "</td><td>" .$row['quantity']."</td><td>".$row['price']."</td></tr>";
            }
        echo "</table>";
        echo "</center>";
    }
}
$cc->close();
?>