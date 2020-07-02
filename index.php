<pre>

<?php


print "<h1>Welcome \n</h1>";
print "<b>Private Ip of the EC2 instance is </b>";

print `ifconfig eth0 | grep "inet" | cut -d ':' -f 2 | cut -d '' -f 1 | cut -b 14-25`;

print "<h3> RAM Usage \n</h3>";
print `free -m`;

?>

</pre>
