<?php
$conn = mysql_connect("localhost", "alba", "alba")
        or die(mysql_error());

mysql_query("SET NAMES UTF8");

mysql_select_db("alba_en") 
or die(mysql_error());
