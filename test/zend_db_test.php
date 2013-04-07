<?php
require_once 'Zend/Db/Adapter/Pdo/Mysql.php';

$db_info = array('host'     => 'mysql455.db.sakura.ne.jp',
                 'username' => 'saturday-league',
                 'password' => 'mizunoe1',
                 'dbname'   => 'saturday-league_sldata');

$db = new Zend_Db_Adapter_Pdo_Mysql($db_info);

$sql = "SELECT * FROM TEAM";
$result = $db->fetchAll($sql);

foreach ($result as $row)
{
    echo $row['NAME'] . '<br/>';
}
