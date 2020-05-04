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
<body background="2.png">
<br>
<center><h1>Login</h1></center>
<br>

<form>
<table align="center"  bgcolor="#f2f2f2">
<tr><td>Name</td><td> : </td><td><input type="text"  name="r"></td></tr>
<tr><td>email</td><td> :</td><td> <input type="email" name="n"></td></tr>
<tr><td>password</td><td> :</td><td><input type="password"  name="a"></td></tr>
<tr><td>confirm password</td><td> :</td> <td><input type="password"  name="m"></td></tr>
</table><br><br>
<center><input type="submit" value="login" name="i">

<input type="submit" value="select" name="s"><center>
</form>
<?php
if (isset($_GET["i"]))
{
  $r=$_GET["r"];
  $n=$_GET["n"];
  $a=$_GET["a"];
  $m=$_GET["m"];
  $sql="insert into emp values('$r','$n','$a','$m')";
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
 echo "<tr><th>Roll No</th><th>Name</th><th>Age</th><th>Marks</th></tr>";
   
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
