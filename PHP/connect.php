<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	 die("not connected".mysqli_error());
}
echo "Connected";
/*
$sql = "INSERT INTO student VALUES (3, 'prakash', 'chawl no-420,roomno-69',000000012,'2017/09/02')";
$update = mysqli_query($conn,"UPDATE student SET contactno=7986550965 WHERE student_id=1;");
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if(!$update){
	 echo "not updated ";
	
}
else{
	echo "updated record";
}*/
$result=mysqli_query($conn,"select * from student ");
echo"<table border='1'>
	 <tr>
	 <th>name</th>
	 <th></th>
	 <th>Address</th>
	 </tr>";
while($res= mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$res['student_name']."<td>";
	echo "<td>".$res['address']."<td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
