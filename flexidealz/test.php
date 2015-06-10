<?php
// we connect to example.com and port 3307
$link = mysql_connect('localhost', 'flexi2xl_fdz', 'flexiD');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

// we connect to localhost at port 3307
$link = mysql_connect('flexidealz.in', 'flexi2xl_fdz', 'flexiD');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>