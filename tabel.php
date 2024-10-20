<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$Kampus = array("UGM", "UNY", "UPN", "UIN", "TELKOM"); 
$Jalur = array("IUP", "Reguler", "SNBT", "SNBP", "Mandiri");
$UKT = array("20.000.000", "3.000.000", "8.000.000", "5.000.000", "10.000.000");
$Diterima = array("1000", "2000", "3000", "4000", "5000");
$Judul = array("Kampus", "Jalur", "UKT", "Diterima");

echo "<table border = '1'>";
echo "<tr><th>Kampus</th><th>Jalur</th><th>UKT</th><th>Diterima</th></tr>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>$Kampus[$i]</td><td>$Jalur[$i]</td>
    <td>$UKT[$i]</td><td>$Diterima[$i]</td></tr>";
}
echo "</table>";
?>

</pre>
</body>
</html>