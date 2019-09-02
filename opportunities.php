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

$sql1 = "INSERT INTO Opportunities (Account, GEM_ID,Opportunity_Desc,Probability,Expected_Work_PM,Priority,Work_To_Be_Planned_PM,Expected_Duration_months,Work_per_month,Start_Date)
VALUES ('$var0', '$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";
$sql = "SELECT * FROM Opportunities";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Account</th><th>GEM_ID</th><th>Opportunity description</th><th>Probability</th><th>Expected Work (PM)</th><th>Priority</th><th>Work to be planned (PM)</th><th>Expected Duration(months)</th><th>Work(PM)</th><th>Start date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Account"]."</td><td>".$row["GEM_ID"]."</td><td>".$row["Opportunity description"]."</td><td>".$row["Probability"]."</td><td>".$row["Expected Work (PM)"]."</td><td>".$row["Priority"]."</td><td>".$row["Work to be planned (PM)"]."</td><td>".$row["Expected Duration(months)"]."</td><td>".$row["Work(PM)"]."</td><td>".$row["Start date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
