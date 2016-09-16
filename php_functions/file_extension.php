<?php
/**
 * Created by PhpStorm.
 * User: webonise
 * Date: 16/9/16
 * Time: 2:14 PM
 */


if(isset($_POST['filename'])) {
    if($_POST['user_option']==1 && $_POST['file_ext']!= '' ) {
        echo 'Extension :' . getFileExtension($_POST['file_ext']);
    }
    else if($_POST['user_option']==2 && $_POST['file_ext']!= '' ) {
        echo 'Extension :' . getFileExtensionCustom($_POST['file_ext']);
    }
    else {
        echo 'Please enter and select a valid option';
    }

}

function getFileExtension($filename)
{
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    return $extension;
}
function getFileExtensionCustom($filename) {

        $extension="";
        $len=customStringLength($filename);
        for($i=0;$i<$len;$i++){
            if($filename[$i]=='.') {
                $p=$i;
                break;
            }
            else {
                continue;
            }
        }
        for($j=$p+1;$j<$len;$j++) {
            $extension .=$filename[$j];
        }

    return $extension;
}

function customStringLength($s)
{
    $i = 0;
    while ($s[$i] != '') {
        $i++;
    }
    return $i;
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Functions</title>
</head>
<body>
<h1>Finding File Extension</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Enter filename:<input type="text"  name="file_ext">
    <select name="user_option">
        <option value="0">Select</option>
        <option value="1">PHP Built-in</option>
        <option value="2">Custom Functions</option>
    </select>
    <input type="submit" value="Find File Extension" name="filename">
</form>
<a href="index.php">Back to List</a>
</body>
</html>
