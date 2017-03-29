<?php
session_start();
?>

<form method=post action="process_quote.php" target="_blank">
    A quote:<br>
    <textarea type="text" name="context" value="Emotions over logic..." style="width:500px;"></textarea><br><br>
    Source:<br>
    <input type="text" name="source" value="Movie" style="width:500px;"><br><br>
    Author:<br>
    <input type="text" name="author" value="A dude" style="width:500px;"><br><br>
    <input type="submit" value="Submit">
</form>
