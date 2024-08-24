<?php
if (file_exists("locationfile.txt")) {
    print "<table>";
    print "<tr><th>Desert Shop</th><th>Map</th></tr>";
    $file = fopen("locationfile.txt","r");
    $data = fgets($file);
    while($data != "") {
    $fields = explode("|" ,$data);
    print "<tr>";
    print "<td>$fields[0]</td>";
    $address = urlencode($fields[1]);
    print "<td><iframe src=\"https://maps.google.com/maps?q=$address&output=embed\"></iframe></td>";
    print "</tr>";
    $data = fgets($file);
}
print "</table>";
fclose($file);
} else {
print "Sorry , no locations yet";
}