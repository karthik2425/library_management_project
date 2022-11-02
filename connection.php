<html>
<head>
<title>connection</title>
</head>
<body>
<?php
$s="localhost";
$u="root";
$p="";
$db="library";
$conn=mysqli_connect($s,$u,$p,$db);
if($conn->connect_error)
{
echo "connected failed";
die("connection failed:".mysqli_connect_error());
}
else
{
//echo "connected ";
}
if(isset($_REQUEST['submit']))
{
$regno=$_REQUEST['regno'];
$name=$_REQUEST['name'];
$gender=$_REQUEST['gender'];
$course=$_REQUEST['course'];
$book=$_REQUEST['book'];
$author=$_REQUEST['author'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$sql="INSERT INTO lib (regno,name,gender,course,book,author,phone,email) VALUES ('$regno','$name','$gender','$course','$book','$author',$phone,'$email')";
if(mysqli_query($conn,$sql))
{
echo "<h1 style=color:green>new record created successfully</h1>";
}
else
{

echo "error:";
}
}

$conn->close();
?>
<a href="https://localhost/project/home.html">HOME PAGE</a>