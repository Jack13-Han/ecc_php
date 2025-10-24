<?php

define("DB_HOST", "localhost");
define("DB_USER", "dbuser");
define("DB_PASS", "ecc");
define("DB_NAME", "studb");
define("DB_CHARSET", "utf8mb4");
define("TBL_PRODCUT", "OLDPRODUCT");

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;

// function getMessage() {
//   echo "MySQL への接続確認が取れました。";
// }

try {
  $db = new PDO($dsn, DB_USER, DB_PASS);
  $msg = "MySQL への接続確認が取れました。";
  $db = null;

} catch (PDOException $poe) {
  $isConnect = false;
  $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
}

  //TODO:debug
  echo $msg;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <script >
    
  </script>
</body>
</html>