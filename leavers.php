<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php
$var0=$_POST['0'];
	$var1=$_POST['1'];
	$var2=$_POST['2'];
	$var3=$_POST['3'];
	$var4=$_POST['4'];
	$var5=$_POST['5'];
	$var6=$_POST['6'];
	$var7=$_POST['7'];
	$var8=$_POST['8'];
	$var9=$_POST['9'];

       // echo $var;
        //echo $var2;	
	
	//connect to db
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "miniproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "INSERT INTO Leavers VALUES ('$var0', '$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10')";
$sql = "SELECT * FROM Leavers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Leaving location</th><th>Leaving account</th><th>Leaving Employee name</th><th>Date of Leaving</th><th>Leaving Manager</th><th>Reason1</th><th>Reason2</th><th>Reason3</th><th>Target/CC/Site</th><th>Status</th><th>Hiring OLF by CM</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Leaving Location"]."</td><td>".$row["Leaving account"]."</td><td>".$row["Leaving Employee name"]."</td><td>".$row["Date of Leaving"]."</td><td>".$row["Leaving Manager"]."</td><td>".$row["Reason1"]."</td><td>".$row["Reason2"]."</td><td>".$row["Reason3"]."</td><td>".$row["Target/CC/Site"]."</td><td>".$row["Status"]."</td><td>".$row["Hiring OLF by CM"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
