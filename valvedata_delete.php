<?php
include("functions.php");
// var_dump($_GET);
// exit();

// データ受け取り
$id =$_GET["id"];

$pdo = connect_to_db();

// $sql = "DELETE FROM valve_data WHERE id =:id";
$sql = "UPDATE valve_data SET deleted_at=now() WHERE id =:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:valvedata_read.php");
exit();