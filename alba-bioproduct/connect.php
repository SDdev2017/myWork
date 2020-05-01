<?php
$connect = mysql_connect("localhost:3306", "albabiop_alba", "albapass123")
        or die(mysql_error());

mysql_select_db("albabiop_alba_bg") or die(mysql_error());