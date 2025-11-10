<html>
<head>
    <title>Flight Details</title>
</head>
<body>

<form method="POST" action="">
    From: <input type="text" name="fro"><br>
    Airline: <input type="text" name="airline"><br>
    Departure Date: <input type="text" name="dd"><br>
    Arrival Date: <input type="text" name="ad"><br>
    To: <input type="text" name="too"><br>
    Flight Number: <input type="text" name="fn"><br>
    Terminal: <input type="text" name="ter"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<br><h2 align=center>FLIGHT DETAILS</h2><br/>";
}

if (isset($_POST['submit'])) {
    $fro = $_POST["fro"];
    $airline = $_POST["airline"];
    $dd = $_POST["dd"];
    $ad = $_POST["ad"];
    $too = $_POST["too"];
    $fn = $_POST["fn"];
    $ter = $_POST["ter"];

    $query = "INSERT INTO air (fro, airline, dd, ad, too, fn, ter)
              VALUES ('$fro', '$airline', '$dd', '$ad', '$too', '$fn', '$ter')";
    if (mysqli_query($conn, $query)) {
        echo "Record inserted successfully.<br><br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM air";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    echo "<table border=2 align=center>";
    echo "<tr>
            <th>From</th>
            <th>Airline</th>
            <th>Departure Date</th>
            <th>Arrival Date</th>
            <th>To</th>
            <th>Flight Number</th>
            <th>Terminal</th>
          </tr>";
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>
                <td>{$row['fro']}</td>
                <td>{$row['airline']}</td>
                <td>{$row['dd']}</td>
                <td>{$row['ad']}</td>
                <td>{$row['too']}</td>
                <td>{$row['fn']}</td>
                <td>{$row['ter']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>