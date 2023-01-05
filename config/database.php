<?php
define('DB_HOST', 'sql113.epizy.com');
define('DB_USER', 'epiz_32236880');
define('DB_PASS', 'dUFsV2qdYH');
define('DB_NAME', 'epiz_32236880_ims');


//Create Connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check Connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
