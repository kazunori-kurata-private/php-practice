<?php

// 認証情報読み込み
include_once(__DIR__ . "/../../../../secret/config.php");

try {
  $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
  // 確認用
  // echo "DBとの接続に成功しました";
} catch (PDOException $error) {
  echo $error->getMessage();
}
