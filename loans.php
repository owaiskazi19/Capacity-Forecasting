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
	$var10=$_POST['10'];
	$var11=$_POST['11'];
	$var12=$_POST['12'];
	$var13=$_POST['13'];
	
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

$sql1 = "INSERT INTO Loans
VALUES ('$var0', '$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10', '$var11','$var12','$var13')";
$sql = "SELECT * FROM Loans";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>IN/OUT</th><th>Employee Name</th><th>FromCC/ToCC</th><th>Project</th><th>From Manager</th><th>To Manager</th><th>Team Leader</th><th>Application</th><th>Capacity</th><th>Status</th><th>From Date</th><th>To Date</th><th>Comments</th><th>Duration</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["IN/OUT"]."</td><td>".$row["Employee Name"]."</td><td>".$row["FromCC/ToCC"]."</td><td>".$row["Project"]."</td><td>".$row["From Manager"]."</td><td>".$row["To Manager"]."</td><td>".$row["Team Leader"]."</td><td>".$row["Application"]."</td><td>".$row["Capacity"]."</td><td>".$row["Status"]."</td><td>".$row["From Date"]."</td><td>".$row["To Date"]."</td><td>".$row["Comments"]."</td><td>".$row["Duration"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
