<?php
session_start();
require 'connect.php';

$context = $_POST['context'];
$source = $_POST['source'];
$author = $_POST['author'];
echo $context.$source.$author;
//INSERT INTO `quote` (`Context`, `Source`, `Author`, `ID`) VALUES ('Facts don\'t care about your feelings.', 'lectures', 'Ben Shapiro', NULL)
$sql = "INSERT INTO `quote` (`Context`, `Source`, `Author`) VALUES ('$context', '$source', '$author')";
mysqli_query($db, $sql) or die(mysqli_error($db));
?>