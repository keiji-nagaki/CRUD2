<?php
$str="";
$array= [];

$file=fopen("data/todo.txt","r");
flock($file,LOCK_EX);

if($file){
  while($line=fgets($file)){
    $str .= "<tr><td>{$line}</td></tr>";

    $array [] = [
      "date" => explode (" ", $line)[0],
      "company" => explode (" ", $line)[1],
      "q1" => explode (" ", $line)[2],
      "q2" => explode (" ", $line)[3],
      "q3" => explode (" ", $line)[4],
      "q4" => explode (" ", $line)[5],
      "q5" => explode (" ", $line)[6],
      "q6" => explode (" ", $line)[7],
      "q7" => explode (" ", $line)[8],
      "q8" => explode (" ", $line)[9],
      "ploblems" => explode (" ", $line)[10],
      "request" => str_replace("\n", "",explode (" ", $line)[11]),
    ];

  }
}
flock($file,LOCK_UN);
fclose($file);

// var_dump($array);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"/>
  <title>アンケート結果</title>
</head>

<body>
  <fieldset>
    <legend>アンケート結果</legend>
    <a href="login_success_manager.php">戻る</a>


  
   <div>
    <h1>1.メンテナンスの品質について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart1" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
  <div>
    <h1>２．作業中の安全意識について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart2" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
   <h1>３．バルブ・部品の品質について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart3" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
  </div>
   <h1>４．製品納期・工期について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart4" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
  <h1>５．作業員の対応について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart5" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
  <h1>６．営業担当の対応について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart6" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
  <h1>７．お問合せの対応について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart7" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
  <h1>８．トラブル対応について</h1>
  <!-- <p id="qq"></p>   -->
  <canvas id="myChart8" style="border: solid 1px; width: 500px; height: 500px"></canvas>
  </div>
  <h1>９.バルブのトラブル・メンテナンス等でのお困りごとががございましたら、ご自由にお書きください。</h1>
  <p id="q9"></p>  
  </div>
</div>
  <h1> １０.当社が提供する商品・サービスに対しご意見、ご要望がございましたらご自由にお書きください。</h1>
  <p id="q10"></p>  
  </div>
 




  </fieldset> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    const todos = <?=json_encode($array)?>;
    console.log(todos);
    
    // アンケート１用の空の配列を作る
    const array1 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q1);
    array1.push(element.q1);
    });
    // console.log(array1)
    // $("#qq").html(array1);

    // 要素数を数える
     let count1_1 =array1.filter(function(x){return x==='1'}).length
     let count1_2 =array1.filter(function(x){return x==='2'}).length
     let count1_3 =array1.filter(function(x){return x==='3'}).length
     let count1_4 =array1.filter(function(x){return x==='4'}).length
     let count1_5 =array1.filter(function(x){return x==='5'}).length
    // console.log(count1_1);
    // console.log(count1_2);
    // console.log(count1_3);
    // console.log(count1_4);
    // console.log(count1_5);

   // グラフのタイプとか値とかを設定
    let config1 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count1_1, count1_2, count1_3, count1_4,count1_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx1 = document.getElementById("myChart1").getContext("2d");
    myChart1 = new Chart(ctx1, config1);
    }, false);




     // アンケート２用の空の配列を作る
    const array2 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q2);
    array2.push(element.q2);
    });
    // console.log(array2)
    // $("#qq").html(array2);

    // 要素数を数える
     let count2_1 =array2.filter(function(x){return x==='1'}).length
     let count2_2 =array2.filter(function(x){return x==='2'}).length
     let count2_3 =array2.filter(function(x){return x==='3'}).length
     let count2_4 =array2.filter(function(x){return x==='4'}).length
     let count2_5 =array2.filter(function(x){return x==='5'}).length
    // console.log(count2_1);
    // console.log(count2_2);
    // console.log(count2_3);
    // console.log(count2_4);
    // console.log(count2_5);

   // グラフのタイプとか値とかを設定
    let config2 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count2_1, count2_2, count2_3, count2_4,count2_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx2 = document.getElementById("myChart2").getContext("2d");
    myChart2 = new Chart(ctx2, config2);
    }, false);



    // アンケート３用の空の配列を作る
    const array3 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q3);
    array3.push(element.q3);
    });
    // console.log(array2)
    // $("#qq").html(array2);

    // 要素数を数える
     let count3_1 =array3.filter(function(x){return x==='1'}).length
     let count3_2 =array3.filter(function(x){return x==='2'}).length
     let count3_3 =array3.filter(function(x){return x==='3'}).length
     let count3_4 =array3.filter(function(x){return x==='4'}).length
     let count3_5 =array3.filter(function(x){return x==='5'}).length
    // console.log(count3_1);
    // console.log(count3_2);
    // console.log(count3_3);
    // console.log(count3_4);
    // console.log(count3_5);

   // グラフのタイプとか値とかを設定
    let config3 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count3_1, count3_2, count3_3, count3_4,count3_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx3 = document.getElementById("myChart3").getContext("2d");
    myChart3 = new Chart(ctx3, config3);
    }, false);


 // アンケート４用の空の配列を作る
    const array4 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q4);
    array4.push(element.q4);
    });
    // console.log(array4)
    // $("#qq").html(array4);

    // 要素数を数える
     let count4_1 =array4.filter(function(x){return x==='1'}).length
     let count4_2 =array4.filter(function(x){return x==='2'}).length
     let count4_3 =array4.filter(function(x){return x==='3'}).length
     let count4_4 =array4.filter(function(x){return x==='4'}).length
     let count4_5 =array4.filter(function(x){return x==='5'}).length
    // console.log(count4_1);
    // console.log(count4_2);
    // console.log(count4_3);
    // console.log(count4_4);
    // console.log(count4_5);

   // グラフのタイプとか値とかを設定
    let config4 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count4_1, count4_2, count4_3, count4_4,count4_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx4 = document.getElementById("myChart4").getContext("2d");
    myChart4 = new Chart(ctx4, config4);
    }, false);


     // アンケート5用の空の配列を作る
    const array5 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q5);
    array5.push(element.q5);
    });
    // console.log(array4)
    // $("#qq").html(array4);

    // 要素数を数える
     let count5_1 =array5.filter(function(x){return x==='1'}).length
     let count5_2 =array5.filter(function(x){return x==='2'}).length
     let count5_3 =array5.filter(function(x){return x==='3'}).length
     let count5_4 =array5.filter(function(x){return x==='4'}).length
     let count5_5 =array5.filter(function(x){return x==='5'}).length
    // console.log(count5_1);
    // console.log(count5_2);
    // console.log(count5_3);
    // console.log(count5_4);
    // console.log(count5_5);

   // グラフのタイプとか値とかを設定
    let config5 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count5_1, count5_2, count5_3, count5_4,count5_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx5 = document.getElementById("myChart5").getContext("2d");
    myChart5 = new Chart(ctx5, config5);
    }, false);


     // アンケート6用の空の配列を作る
    const array6 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q6);
    array6.push(element.q6);
    });
    // console.log(array6)
    // $("#qq").html(array6);

    // 要素数を数える
     let count6_1 =array6.filter(function(x){return x==='1'}).length
     let count6_2 =array6.filter(function(x){return x==='2'}).length
     let count6_3 =array6.filter(function(x){return x==='3'}).length
     let count6_4 =array6.filter(function(x){return x==='4'}).length
     let count6_5 =array6.filter(function(x){return x==='5'}).length
    // console.log(count6_1);
    // console.log(count6_2);
    // console.log(count6_3);
    // console.log(count6_4);
    // console.log(count6_5);

   // グラフのタイプとか値とかを設定
    let config6 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count6_1, count6_2, count6_3, count6_4,count6_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx6 = document.getElementById("myChart6").getContext("2d");
    myChart6 = new Chart(ctx6, config6);
    }, false);

     // アンケート7用の空の配列を作る
    const array7 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q7);
    array7.push(element.q7);
    });
    // console.log(array7)
    // $("#qq").html(array7);

    // 要素数を数える
     let count7_1 =array7.filter(function(x){return x==='1'}).length
     let count7_2 =array7.filter(function(x){return x==='2'}).length
     let count7_3 =array7.filter(function(x){return x==='3'}).length
     let count7_4 =array7.filter(function(x){return x==='4'}).length
     let count7_5 =array7.filter(function(x){return x==='5'}).length
    // console.log(count4_1);
    // console.log(count4_2);
    // console.log(count4_3);
    // console.log(count4_4);
    // console.log(count4_5);

   // グラフのタイプとか値とかを設定
    let config7 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count7_1, count7_2, count7_3, count7_4,count7_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx7 = document.getElementById("myChart7").getContext("2d");
    myChart7 = new Chart(ctx7, config7);
    }, false);


     // アンケート8用の空の配列を作る
    const array8 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.q8);
    array8.push(element.q8);
    });
    // console.log(array8)
    // $("#qq").html(array8);

    // 要素数を数える
     let count8_1 =array8.filter(function(x){return x==='1'}).length
     let count8_2 =array8.filter(function(x){return x==='2'}).length
     let count8_3 =array8.filter(function(x){return x==='3'}).length
     let count8_4 =array8.filter(function(x){return x==='4'}).length
     let count8_5 =array8.filter(function(x){return x==='5'}).length
    // console.log(count8_1);
    // console.log(count8_2);
    // console.log(count8_3);
    // console.log(count8_4);
    // console.log(count8_5);

   // グラフのタイプとか値とかを設定
    let config8 = {
    type: "pie",
    data: {
        labels: ["不満", "やや不満", "普通", "満足", "大変満足"],
        datasets: [{
            data: [count8_1, count8_2, count8_3, count8_4,count8_5],
            backgroundColor: [
                "rgb(255, 99, 132, 0.5)",
                "rgb(255, 159, 64, 0.5)",
                "rgb(255, 205, 86, 0.5)",
                "rgb(75, 192, 192, 0.5)",
                "rgb(54, 162, 235, 0.5)",
            ]
            
        }],
      },
       options: {
        responsive: false
      }
    };

   // チャートの生成
    window.addEventListener("load", function() {
    let ctx8 = document.getElementById("myChart8").getContext("2d");
    myChart8 = new Chart(ctx8, config8);
    }, false);


     // アンケート9用の空の配列を作る
    const array9 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.ploblems);
    array9.push(element.ploblems);
    });
    // console.log(array9)
    $("#q9").html(array9);

   
// アンケート10用の空の配列を作る
    const array10 = [];

    // // 選択した要素のみを表示する
    todos.forEach(element =>{
    // console.log(element.request);
    array10.push(element.request);
    });
    // console.log(array10)
    $("#q10").html(array10);


  </script>
</body>

</html>