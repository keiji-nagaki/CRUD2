<?php
// var_dump($_GET);
// exit();
include("functions.php");
// id受け取り
$id = $_GET["id"];

// DB接続


$pdo = connect_to_db();

// SQL実行 WHERE
$sql = 'SELECT * FROM valve_data WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($record);
// exit();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（編集画面）</title>
</head>

<body>
  <form action="valvedata_update.php" method="POST">
    <fieldset>
      <legend>DB連携型todoリスト（編集画面）</legend>
      <a href="valvedata_read.php">一覧画面</a>
      <div>
        プラント名: <input type="text" name="plant" value="<?= $record["プラント名"]?>">
      </div>
      <div>
        号機: <input type="text" name="plant_number" value="<?= $record["号機"]?>">
      </div>
      <div>
        弁番号: <input type="text" name="valve_number" value="<?= $record["弁番号"]?>">
      </div>
      <div>
        弁名称: <input type="text" name="valve_name" value="<?= $record["弁名称"]?>">
      </div>
      <div>
        Jo.: <input type="text" name="valve_jo" value="<?= $record["Jo"]?>">

      </div>
      <div>
        PAT: <input type="text" name="valve_pat" value="<?= $record["PAT"]?>">
      </div>
      <div>
        口径: <input type="text" name="valve_size" value="<?= $record["SIZE"]?>">
      </div>
      <div>
        <input type="hidden" name="id"value="<?= $record["id"] ?>">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>