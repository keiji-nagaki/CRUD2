<?php
echo "<pre>";
var_dump($_POST);
var_dump($_FILES);
echo "</pre>";
exit();

include('functions.php');

if (
  !isset($_POST['plant']) || $_POST['plant'] === '' ||
  !isset($_POST['plant_number']) || $_POST['plant_number'] === '' ||
  !isset($_POST['valve_number']) || $_POST['valve_number'] === '' ||
  !isset($_POST['valve_name']) || $_POST['valve_name'] === ''||
  !isset($_POST['valve_jo']) || $_POST['valve_jo'] === '' ||
  !isset($_POST['valve_pat']) || $_POST['valve_pat'] === '' ||
  !isset($_POST['valve_size']) || $_POST['valve_size'] === '' ||
  !isset($_FILES["valve_structure"]["name"]) || $_FILES["valve_structure"]["name"] === '' ||
  !isset($_FILES["valve_structure"]["type"]) || $_FILES["valve_structure"]["type"] === '' ||
  !isset($_FILES["valve_structure"]["tmp_name"]) || $_FILES["valve_structure"]["tmp_name"] === '' ||   
  !isset($_FILES["valve_structure"]["size"]) || $_FILES["valve_structure"]["size"] === '' 
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

// var_dump($plant);
// var_dump($plant_number);
// var_dump($valve_number);
// var_dump($valve_name);
// var_dump($valve_jo);
// var_dump($valve_pat);
// var_dump($valve_size);
// exit();

$pdo = connect_to_db();

$sql = 'INSERT INTO valve_data(id, プラント名, 号機, 弁番号, 弁名称, Jo, PAT, SIZE, created_at, updated_at) 
VALUES(NULL, :plant, :plant_number, :valve_number, :valve_name, :valve_jo, :valve_pat, :valve_size, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':plant', $plant, PDO::PARAM_STR);
$stmt->bindValue(':plant_number', $plant_number, PDO::PARAM_STR);
$stmt->bindValue(':valve_number', $valve_number, PDO::PARAM_STR);
$stmt->bindValue(':valve_name', $valve_name, PDO::PARAM_STR);
$stmt->bindValue(':valve_jo', $valve_jo, PDO::PARAM_STR);
$stmt->bindValue(':valve_pat', $valve_pat, PDO::PARAM_STR);
$stmt->bindValue(':valve_size', $valve_size, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:valvedata_input.php");
exit();
