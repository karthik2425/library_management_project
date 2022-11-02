<html>
<head>
<title>view data on database</title>
</head>
<body>

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
  
$s="localhost";
$u="root";
$p="";
$db="library";
$conn=mysqli_connect($s,$u,$p,$db);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  $query = "SELECT * FROM lib;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
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
        echo "0 results";
    }
  
   $conn->close();
  
?>
</table>
<a href="https://localhost/project/home.html">HOME PAGE</a>
</body>
</html>