<?php
$cricket=array("virat","dhoni","sachin","rohit");
echo"<br>Display Names in Table format <br/>";
echo"<br>==============================<br/>";
echo"<br>Names of cricket players are sorted in an array:<br/>";
print_r($cricket);
echo"<br><br>names of cricket players are sorted in table:<br/>";
echo"<br><table border=2><tr><th>player names</th></tr><br/>";
echo"<tr><td>$cricket[0]</td></tr>";
echo"<tr><td>$cricket[1]</td></tr>";
echo"<tr><td>$cricket[2]</td></tr>";
echo"<tr><td>$cricket[3]</td></tr>";
echo"<table>";
?>
