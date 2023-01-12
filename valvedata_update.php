<?php
include("functions.php");
// var_dump($_POST);
// exit();

if (
  !isset($_POST['plant']) || $_POST['plant'] === '' ||
  !isset($_POST['plant_number']) || $_POST['plant_number'] === '' ||
  !isset($_POST['valve_number']) || $_POST['valve_number'] === '' ||
  !isset($_POST['valve_name']) || $_POST['valve_name'] === ''||
  !isset($_POST['valve_jo']) || $_POST['valve_jo'] === '' ||
  !isset($_POST['valve_pat']) || $_POST['valve_pat'] === '' ||
  !isset($_POST['valve_size']) || $_POST['valve_size'] === ''||
  !isset($_POST['id']) || $_POST['id'] === ''
) {
  exit('paramError');
}

$plant = $_POST['plant'];
$plant_number = $_POST['plant_number'];
$valve_number = $_POST['valve_number'];
$valve_name = $_POST['valve_name'];
$valve_jo = $_POST['valve_jo'];
$valve_pat = $_POST['valve_pat'];
$valve_size = $_POST['valve_size'];
$id = $_POST['id'];

// var_dump($plant);
// var_dump($plant_number);
// var_dump($valve_number);
// var_dump($valve_name);
// var_dump($valve_jo);
// var_dump($valve_pat);
// var_dump($valve_size);
// var_dump($id);
// exit();

$pdo = connect_to_db();

$sql = "UPDATE valve_data SET プラント名=:plant, 号機=:plant_number, 弁番号=:valve_number, 弁名称=:valve_name, Jo=:valve_jo, PAT=:valve_pat, SIZE=:valve_size, created_at=now(), updated_at=now() WHERE id =:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':plant', $plant, PDO::PARAM_STR);
$stmt->bindValue(':plant_number', $plant_number, PDO::PARAM_STR);
$stmt->bindValue(':valve_number', $valve_number, PDO::PARAM_STR);
$stmt->bindValue(':valve_name', $valve_name, PDO::PARAM_STR);
$stmt->bindValue(':valve_jo', $valve_jo, PDO::PARAM_STR);
$stmt->bindValue(':valve_pat', $valve_pat, PDO::PARAM_STR);
$stmt->bindValue(':valve_size', $valve_size, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:valvedata_read.php");
exit();

