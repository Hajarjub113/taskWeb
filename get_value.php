<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "web_db";
$db = mysqli_connect($server,$user,$password,$dbname);
$v = $_GET['value'];
$sql = "INSERT INTO `content`(`value`) VALUES('$v')";
$query = mysqli_query($db,$sql);

$sql_view = "SELECT * FROM `content` ORDER BY id DESC LIMIT 1";
$query_view = mysqli_query($db,$sql_view);
?>
<!DOCTYPE html>
<html>

<body>

    <h2>The Result:</h2>
    <p>
        <?php
foreach($query_view as $row_view){
    $content = $row_view['value'];
}
?>
<?= $content; ?>
    </p>
    

</body>

</html>