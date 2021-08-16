<!DOCTYPE html>
<html>
<head>
<title>registered users</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>fname</th>
<th>lname</th>
<th>password</th>
<th>country</th>
<th>district</th>
<th>sector</th>
<th>cell</th>
<th>gender</th>
<th>number</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "haby");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fname,lname,password,country,district,sector,cell,gender,number FROM register";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["lname"] . "</td><td>"
. $row["password"]. "</td><td>" . $row["country"]. "</td><td>" . $row["district"]. "</td><td>" . $row["sector"]. "</td><td>" . $row["cell"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["number"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
