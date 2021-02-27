<?php
$i_id = file_get_contents("http://instance-data/latest/meta-data/instance-id");
$i_ipv4 = file_get_contents("http://instance-data/latest/meta-data/local-ipv4");
echo "<h1>application version: 1</h1>";
echo "<h1>instance-id: ", $i_id, "</h1>";
echo "<h1>local-ipv4: ", $i_ipv4, "</h1>";
?>