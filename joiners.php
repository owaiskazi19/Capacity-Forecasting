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
	$var14=$_POST['14'];
	$var15=$_POST['15'];
	$var16=$_POST['16'];
	$var17=$_POST['17'];
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

$sql1 = "INSERT INTO joiners VALUES('$var0','$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13','$var14','$var15','$var16','$var17')";

$sql = "SELECT * FROM joiners";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Hiring OLF by RMG</th><th>RRF</th><th>Hiring lot no</th><th>Hiring location</th><th>Hired Employee Name</th><th>Targeted Project</th><th>Target Manager</th><th>Source</th><th>Date of Joining</th><th>Skill/Account</th><th>Team Leader</th><th>Mentor</th><th>Seat</th><th>30</th><th>60</th><th>90</th><th>Quality Training</th><th>Hiring Comments</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Hiring OLF by RMG"]."</td><td>".$row["RRF"]."</td><td>".$row["Hiring lot no"]."</td><td>".$row["Hiring location"]."</td><td>".$row["Hired Employee Name"]."</td><td>".$row["Targeted Project"]."</td><td>".$row["Target Manager"]."</td><td>".$row["Source"]."</td><td>".$row["Date of Joining"]."</td><td>".$row["Skill/Account"]."</td><td>".$row["Team Leader"]."</td><td>".$row["Mentor"]."</td><td>".$row["Seat"]."</td><td>".$row["30"]."</td><td>".$row["60"]."</td><td>".$row["90"]."</td><td>".$row["Quality Training"]."</td><td>".$row["Hiring Comments"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
