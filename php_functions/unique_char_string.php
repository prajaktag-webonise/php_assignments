<?php
/**
 * Created by PhpStorm.
 * User: webonise
 * Date: 16/9/16
 * Time: 4:25 PM
 */
if(isset($_POST['urstring'])) {
    if ($_POST['user_option'] == 1 && $_POST['ustring'] != '') {
        echo 'String :' . uniqueRevString($_POST['ustring']);
    }
    if ($_POST['user_option'] == 2 && $_POST['ustring'] != '') {
        echo 'String :' . uniqueRevStringCustom($_POST['ustring']);
    }
}
function uniqueRevString($string){
    $string=strrev($string);
    $uniq=array_unique(str_split($string));
    $runiq=implode("",$uniq);
    return $runiq;
}
function uniqueRevStringCustom($string){
    //echo 'dfds';
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Functions</title>
</head>
<body>
<h1>Unique Reverse String</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Enter string:<input type="text"  name="ustring">
    <select name="user_option">
        <option value="0">Select</option>
        <option value="1">PHP Built-in</option>
        <option value="2">Custom Functions</option>
    </select>
    <input type="submit" value="Show String" name="urstring">
</form>
<a href="index.php">Back to List</a>
</body>
</html>