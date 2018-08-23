
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>


table,th,td
{
border: 5px;
border-style:solid;
width: 30px;
height: 20px;
border-width:2px;

border-color:pink;

}
.button
{
	  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>

</head>

<body bgcolor="#EEFDEF">
<?php


$server="localhost";
$username="root";
$password="";
$database="airline";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
	die("error");
}
$image_url='<img src="plane.png" alt="Flowers in Chania" style="width:50px;height:50px;">';
$a=0;
extract($_POST);
$q = $_POST['source'];
$d=$_POST['dest'];
$sql="SELECT*FROM  flights where source='$q' and dest='$d' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
    echo "<table border='1'><tr><th>SOURCE</th><th>DESTINATION</th><th>DEPARTURE TIME</th><th>ARRIVAL TIME</th><th>PRICE</th><th>Flight Name</th><th>Icon</th></tr>";
	while($row=mysqli_fetch_assoc($result))
	{
		

        echo "<tr><td>".$row["source"]."</td><td>".$row["dest"]."</td><td>".$row["departure time"]."</td><td>".$row["arrival time"]."</td><td>".$row["price"]."</td><td>".$row["Flight name"]."</td><td>.$image_url.</td><td><input type='submit' class='button' value='Book'></td></tr>";
        
	}
	echo "</table>";


}
?>

