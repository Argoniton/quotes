<?php
include '../connect.php';

 $query = "SELECT * FROM quote";

 $result = mysqli_query($db, $query);
 //echo [$result];
while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    print_r($row);
}