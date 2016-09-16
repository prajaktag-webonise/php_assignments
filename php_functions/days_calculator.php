<?php
/**
 * Created by PhpStorm.
 * User: webonise
 * Date: 16/9/16
 * Time: 3:44 PM
 */
if(isset($_POST['calculate'])) {
    if ($_POST['user_option'] == 1 && $_POST['date1'] != '' && $_POST['date2'] != '') {
        echo 'Number of days between '.$_POST['date1'].' and '.$_POST['date2'].' in days :';
        echo calcDays($_POST['date1'], $_POST['date2']);

    }
    else if ($_POST['user_option'] == 2 && $_POST['date1'] != '' && $_POST['date2'] != '') {
        echo 'Number of days between '.$_POST['date1'].' and '.$_POST['date2'].' in days :';
        echo dateDiff($_POST['date1'], $_POST['date2']);

    }
    else {
        echo 'Please enter all values and select options properly';
    }
}
function calcDays($date1,$date2) {
    $fdate=date_create($date1);
    $sdate=date_create($date2);
    $diff=date_diff($fdate,$sdate);
    return $diff->format("%R%a days");
}

function dateDiff($start, $end) {

    $start_ts = strtotime($start);

    $end_ts = strtotime($end);

    $diff = $end_ts - $start_ts;

    return round($diff / 86400).' days';

}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Functions</title>
</head>
<body>
<h1>Days Calculator</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Select First Date:<input type="date"  name="date1">
    Select Second Date:<input type="date"  name="date2">
    <select name="user_option">
        <option value="0">Select</option>
        <option value="1">PHP Built-in</option>
                <option value="2">Custom Functions</option>
    </select>
    <input type="submit" value="Calculate" name="calculate">

</form>
<a href="index.php">Back to List</a>
</body>
</html>