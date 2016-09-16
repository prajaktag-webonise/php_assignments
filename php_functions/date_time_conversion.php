<?php
/**
 * Created by PhpStorm.
 * User: webonise
 * Date: 16/9/16
 * Time: 3:04 PM
 */
if(isset($_POST['uk'])) {
    echo convertToUk($_POST['dtime']);
}
if(isset($_POST['us'])) {
    echo convertToUS($_POST['dtime']);
}

function convertToUS($dtime){
    $datetime = new DateTime($dtime);
    $la_time = new DateTimeZone('America/New_York');
    $datetime->setTimezone($la_time);
    return $datetime->format('Y-m-d H:i:s');
}

function convertToUk($dtime){
    $datetime = new DateTime($dtime);
    $la_time = new DateTimeZone('Europe/London');
    $datetime->setTimezone($la_time);
    return $datetime->format('Y-m-d H:i:s');
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Functions</title>
</head>
<body>
<h1>Date & Time Converter</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Select Date and Time:<input type="datetime-local"  name="dtime">
    <select name="user_option">
<!--        <option value="0">Select</option>-->
        <option value="1">PHP Built-in</option>
<!--        <option value="2">Custom Functions</option>-->
    </select>
    <input type="submit" value="Convert to UK" name="uk">
    <input type="submit" value="Convert to US" name="us">
</form>
<a href="index.php">Back to List</a>
</body>
</html>