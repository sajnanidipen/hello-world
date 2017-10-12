<?php
$conn=mysqli_connect("localhost","root","","mydb");

if(!$conn){
	die("conn failed");
	mysqli_connect_error();
}
else{
	echo "connected successfully";
}
$sql1= "insert into mytable (roll,name) values(1,'dipen1');";
$query=mysqli_query($conn,$sql1);
if ($conn->query($sql1) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$sql2= "insert into mytable (roll,name) values(2,'dipen2');";
$query=mysqli_query($conn,$sql2);
if ($conn->query($sql2) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$result=mysqli_query($conn,"select * from student");
echo"<table border='1'>
	 <tr>
	 <th>roll</th>
	 <th></th>
	 <th>name</th>
	 </tr>";
while($res= mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$res['roll']."<td>";
	echo "<td>".$res['name']."<td>";
	echo "</tr>";
}
echo "</table>";














?>

