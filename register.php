<?php
  $localhost="localhost";
  $username="root";
  $password="";
  $database="login";
  $con=mysqli_connect($localhost,$username,$password,$database);
  if(!$con)
  {
   echo "Connected Successfully!...";
  }
?>
<html>
<body >
<br>
<center><h1>Registeration Form</h1>
<h3>(Work from home Employee performance Appraisal Scale)</h3>
</center>

<br>

<form>
<table align="center"  bgcolor="#f2f2f2">
<tr><td>Employee Name</td><td> : </td><td><input type="text"  placeholder="Enter your name" name="r"></td></tr><br>
<tr><td> Employee ID </td><td> :</td><td> <input type="text"  placeholder="Enter your ID" name="n"></td></tr><br>
<tr><td>Phone</td><td> :</td><td><input type="text"  placeholder="Enter your phone number" name="a"></td></tr><br>
<tr><td>Department</td><td> :</td> <td><input type="text" placeholder="Enter your department" name="m"></td></tr>
</table><br><br>
<center><input type="submit" value="register" name="i">

<center>
</form>
<?php
if (isset($_GET["i"]))
{
  $r=$_GET["r"];
  $n=$_GET["n"];
  $a=$_GET["a"];
  $m=$_GET["m"];
  $sql="insert into reg values('$r','$n','$a','$m')";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    echo "Record Inserted...";
  }
}
else if (isset($_GET["s"]))
{
  $r=$_GET["r"];
  $sql="select * from stu where rollno='$r'";
  $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   echo "<table border='1'>";
 
   
     while($row=mysqli_fetch_array($result))
     {
     echo "<tr>"; 
     echo "<td>".$row[0]."</td>";
     echo "<td>".$row[1]."</td>";
     echo "<td>".$row[2]."</td>";
     echo "<td>".$row[3]."</td>";
     echo "<tr>";
     }
     echo "</table>";
}
?>
</body>
</html>
