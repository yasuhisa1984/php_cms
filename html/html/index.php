<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php7.2-apache</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
try {
    $dbh = new PDO('mysql:host=mysql5.7-trial2;dbname=test', 'root', 'root');
    foreach($dbh->query('select * from test') as $row) {
        echo $row['text'] . '<br>';
    }
    $dbh = null;
} catch (PDOException $e) {
    echo $e;
    die();
}
$dbh = null;
?>
</body>
</body>
</html>
