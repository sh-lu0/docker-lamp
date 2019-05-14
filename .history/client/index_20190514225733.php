<?php
// phpinfo();
try{
    $db = new PDO('mysql:dbname=testdb;host=db';port=3306,'root','root');
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}
 ?>

<p>hello world！</p>

<?php
try {
    $db = new PDO('mysql:dbname=test_db;host=db', 'root', 'root');
} catch (PDOException $e) {
    print('Error:'.$e->getMessage());
    die();
}
 ?>

<p>hello world！</p>
