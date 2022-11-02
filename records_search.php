<html>
<body>

<form action="" method="post">
Search REGNO <input type="text" name="search"><br>
<input type ="submit">
</form>
<table border="2">
<tr>
<th>sno</th>
<th>regno</th>
<th>name</th>
<th>gender</th>
<th>course</th>
<th>book</th>
<th>author</th>
<th>phone number</th>
<th>email</th>
<th>Date</th>
</tr>
<?php

$search = $_POST['search'];

$s="localhost";
$u="root";
$p="";
$db="library";
$conn=mysqli_connect($s,$u,$p,$db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from lib where regno like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	 echo "<tr>
		<td>".$row['sno']."</td>
		<td>".$row['regno']."</td>
		<td>".$row['name']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['course']."</td>
		<td>".$row['book']."</td>
		<td>".$row['author']."</td>
		<td>".$row['phone']."</td>
		<td>".$row['email']."</td>
		<td>".$row['date']."</td>
		
		</tr>
		";
        }
		

}
 else {
	echo "0 records";
}

$conn->close();

?>
<a href="https://localhost/project/home.html">HOME PAGE</a>
</body>
</html>