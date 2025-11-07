<html>
    <head>
        <title>employee</title>
    </head>
    <body>
        <form method="POST" action="#">
            Enter ID:<input type="text" name="eid"><br><br>
            Enter Name:<input type="text" name="ename"><br><br>
            Enter dept:<input type="text" name="dept"><br><br>
            Enter Salary:<input type="text" name="sal"><br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
$servername="localhost";
$username="root"; 
$password="";
$dbname="empdb";
$tbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
    {
    die("Connection failed:".mysqli_connect_error());
    }
    else
    {
        echo "<br><h2 align=center>Connected....</h2><br/>";
    }
    $id=$_POST['eid'];
    $name=$_POST['ename'];
    $dept=$_POST['dept'];
    $sal=$_POST['sal'];
    $query="INSERT INTO emp(eid,ename,dept,sal) VALUES('".$id."','".$name."','".$dept."','".$sal."')";
    $res=mysqli_query($conn,$query);
    if($res)
    {
        echo "SUBMITTED SUCCESSFULLY!!";
    }
    else
    {
        echo "ERROR";
    }
    echo "<br><h2 align=center>EMPLOYEE DETAILS</h2><br/>";
    $sql="SELECT * FROM emp";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        echo "<table border=2 align=center>";
        echo "<tr><th>Employee ID</th>";
        echo "<th>Employee Name</th>"; 
        echo "<th>Department</th>";
        echo "<th>Salary</th></tr>";
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr><td>$row[eid]</td>";
            echo "<td>$row[ename]</td>";
            echo "<td>$row[dept]</td>";
            echo "<td>$row[sal]</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($conn);
?>