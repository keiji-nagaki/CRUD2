<?php
// var_dump($_POST);
// exit();

// ＄＿POSTの中を分ける
$date=$_POST["date"];
$company=$_POST["company"];
$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];
$q5=$_POST["q5"];
$q6=$_POST["q6"];
$q7=$_POST["q7"];
$q8=$_POST["q8"];
$ploblems=$_POST["ploblems"];
$request=$_POST["request"];


// 書き込データを整え
$write_data="{$date} {$company} {$q1} {$q2} {$q3} {$q4} {$q5} {$q6} {$q7} {$q8} {$ploblems} {$request}\n";

// // ファイルを開く
$file=fopen("data/todo.txt","a");
// ロックをかける
flock($file,LOCK_EX);

// ファイルに書き込む
fwrite($file,$write_data);

// ロックを解除する
flock($file,LOCK_UN);
// ファイルを閉じる
fclose($file);
// メイン画面に戻る
header("Location:thankyou.html");
