<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aa1";
$link=mysqli_connect($servername,$username,$password,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con)
{
    echo("connection successfull");
   
}
else{
    die("connection failed because".mysqli_connect_error());
}
?>
<html>

<head>
    <title> database operation</title>
    <img src="login.jpg">
</head>
<body>
<center>
<form name="form1"action="" method="post">
<table>
<tr>
<td>vendor code</td>
<td><input type="text" name="vendorcode"></td>
<br>
<br>
</tr>
<tr>
    <br>
    <br>
<td>product description</td>
<td><input type="text"name="productdescription"></td>
</tr>
<br>
<br>
<tr>
<td>count</td>
<br>
<br>
<td><input type="text"name="count"></td>
</tr>
<br>
<br>
<tr>
<td>cost</td>
<td><input type="text"name="cost"></td>
</tr>
<br>
<tr>
<td>product expiry date</td>
<td><input type="text"name="productexpirydate"></td>
</tr>
<br>
<br>
<tr>
<td colspan="2">
<input type="submit"name="submit1"value="insert">
<input type="submit"name="submit2"value="delete">
<input type="submit"name="submit3"value="update">
<input type="submit"name="submit4"value="display">
<input type="submit"name="submit5"value="search1">
</center>
<br>
<br>
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST["submit1"]))
{
mysqli_query($link,"insert into aat1 values('$_POST[vendorcode]','$_POST[productdescription]','$_POST[count]','$_POST[cost]','$_POST[productexpirydate]')");
echo"Record inserted successfulllllllly";
}
if(isset($_POST["submit2"]))
{
mysqli_query($link,"delete from aat1 where vendorcode='$_POST[vendorcode]'");
echo"Record deleted successfully";
}
if(isset($_POST["submit3"]))
{
mysqli_query($link,"update aat1 set vendrocode='$_POST[productdscription]'where vendorcode='$_POST[vendorcode]'");
}
if(isset($_POST["submit4"]))
{
$res=mysqli_query($link,"select * from aat1");
echo"<table border=1>";
    echo"<tr>";
    echo"<th>";echo"vendorcode";echo"</th>";
    echo"<th>";echo"productdescription";echo"</th>";
    echo"<th>";echo"count";echo"</th>";
    echo"<th>";echo"cost";echo"</th>";
    echo"<th>";echo"productexpirydate";echo"</th>";
    echo"</tr>";
while($row=mysqli_fetch_array($res))
{
    echo"<tr>";
    echo"<td>";echo $row["vendorcode"]; echo"</td>";
    echo"<td>";echo $row["productdescription"]; echo"</td>";
    echo"<td>";echo $row["count"]; echo"</td>";
    echo"<td>";echo $row["cost"]; echo"</td>";
    echo"<td>";echo $row["productexpirydate"]; echo"</td>";
    echo"</tr>";

}
echo"</table>";

}
if(isset($_POST["submit5"]))
{
    $res=mysqli_query($link,"select*from aat1 where username='$_POST[username]'");
    echo"<table border=1>";
    echo"<tr>";
    echo"<th>";echo"vendorcode";echo"</th>";
    echo"<th>";echo"productdescription";echo"</th>";
    echo"<th>";echo"count";echo"</th>";
    echo"<th>";echo"cost";echo"</th>";
    echo"<th>";echo"productexpirydate";echo"</th>";
    echo"</tr>";
while($row=mysqli_fetch_array($res))
{
    echo"<tr>";
    echo"<td>";echo $row["vendorcode"]; echo"</td>";
    echo"<td>";echo $row["productdescription"]; echo"</td>";
    echo"<td>";echo $row["count"]; echo"</td>";
    echo"<td>";echo $row["cost"]; echo"</td>";
    echo"<td>";echo $row["productexpirydate"]; echo"</td>";
    echo"</tr>";

}

echo"</table>";


}
?>
