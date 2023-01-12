<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>バルブデータの登録</title>
</head>

<body>
  <!--  enctype="multipart/form-data" -->
  
  <form action="valvedata_create.php" method="POST" enctype="multipart/form-data">
     
    <fieldset>
      <legend>バルブデータの登録</legend>
      <a href="valvedata_read.php">一覧画面</a>
      <div>
        プラント名: <input type="text" name="plant">
      </div>
      <div>
        号機: <input type="text" name="plant_number">
      </div>
      <div>
        弁番号: <input type="text" name="valve_number">
      </div>
      <div>
        弁名称: <input type="text" name="valve_name">
      </div>
      <div>
        Jo.: <input type="text" name="valve_jo">

      </div>
      <div>
        PAT: <input type="text" name="valve_pat">
      </div>
      <div>
        口径: <input type="text" name="valve_size">
      </div>
       <div>
        構造図: <input type="file" name="valve_structure" required>
      </div>
      <div>
        <button>submit</button>
      </div>
      <a href="login_success_manager.php">管理者ページへ</a>
    </fieldset>
  </form>

</body>

</html>