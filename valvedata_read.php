<?php
include('functions.php');

$pdo = connect_to_db();

$sql = 'SELECT * FROM valve_data WHERE deleted_at IS NULL';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["プラント名"]}</td>
      <td>{$record["号機"]}</td>
      <td>{$record["弁番号"]}</td>
      <td>{$record["弁名称"]}</td>
      <td>{$record["Jo"]}</td>
      <td>{$record["PAT"]}</td>
      <td>{$record["SIZE"]}</td>
      <td>
        <a href='valvedata_edit.php?id={$record["id"]}'>edit</a>
      </td>
      <td>
        <a href='valvedata_delete.php?id={$record["id"]}'>delete</a>
      </td>
    </tr>
  ";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>バルブリスト</title>
</head>

<body>
  <fieldset>
    <legend>バルブリスト</legend>
    <a href="valvedata_input.php">バルブデータ登録へ</a>
     <a href="login_success_manager.php">管理者ページへ</a>
    <table>
      <thead>
        <tr>
          <th>プラント名</th>
          <th>号機</th>
          <th>弁番号</th>
          <th>弁名称</th>
          <th>Jo.</th>
          <th>PAT</th>
          <th>口径</th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
        
      </tbody>
     
      
    </table>
  </fieldset>
</body>

</html>