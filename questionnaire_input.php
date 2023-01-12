<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート</title>
</head>

<body>
  <form action="questionnaire_create.php" method ="POST">
    <fieldset>
       <!-- <a href="questionnaire_txt_read.php">一覧画面</a> -->
      <legend>アンケート</legend>
        <p>日頃より、格別のご高配を賜り厚く御礼申し上げます。<br>
         弊社では、製品のサービスの向上を目的としてアンケートを実施させて頂いております。<br>
         ご多忙の折、誠に勝手なお願いではありますが、アンケートにお答え頂き、率直はご意見・
         ご要望をお聞かせください。<br>
         頂いたご意見、ご要望は今後の企業活動の参考とさせて頂きます。ご協力をお願い申し上げます。
        </p>

        <div>
          日　付：<input type="date" name ="date">        
        </div>

        <div>
          会社名： <input type="text" name ="company" >       
        </div>
     
        <div>
           <p>１．メンテナンスの品質について<br>
           <input type="radio" name="q1" id=a1 value="1"> 1.不満
           <input type="radio" name="q1" id=b1 value="2"> 2.やや不満
           <input type="radio" name="q1" id=c1 value="3"> 3.普通
           <input type="radio" name="q1" id=d1 value="4"> 4.満足
           <input type="radio" name="q1" id=e1 value="5"> 5.大変満足
          </p>
        </div>
        <div>
           <p>２．作業中の安全意識について<br>
           <input type="radio" name="q2" id=a2 value="1"> 1.不満
           <input type="radio" name="q2" id=b2 value="2"> 2.やや不満
           <input type="radio" name="q2" id=c2 value="3"> 3.普通
           <input type="radio" name="q2" id=d2 value="4"> 4.満足
           <input type="radio" name="q2" id=e5 value="5"> 5.大変満足
          </p>
        </div>
        <div required>
           <p>３．バルブ・部品の品質について<br>
           <input type="radio" name="q3"  id=a3 value="1"> 1.不満
           <input type="radio" name="q3"  id=b3 value="2"> 2.やや不満
           <input type="radio" name="q3"  id=c3 value="3"> 3.普通
           <input type="radio" name="q3"  id=d3 value="4"> 4.満足
           <input type="radio" name="q3"  id=e3 value="5"> 5.大変満足
          </p>
        </div>
        <div>
           <p>４．製品納期・工期について<br>
           <input type="radio" name="q4" id=a4 value="1"> 1.不満
           <input type="radio" name="q4" id=b4 value="2"> 2.やや不満
           <input type="radio" name="q4" id=c4 value="3"> 3.普通
           <input type="radio" name="q4" id=d4 value="4"> 4.満足
           <input type="radio" name="q4" id=e4 value="5"> 5.大変満足
          </p>
        </div>
        <div>
           <p>５．作業員の対応について<br>
           <input type="radio" name="q5" id=a5 value="1"> 1.不満
           <input type="radio" name="q5" id=b5 value="2"> 2.やや不満
           <input type="radio" name="q5" id=c5 value="3"> 3.普通
           <input type="radio" name="q5" id=d5 value="4"> 4.満足
           <input type="radio" name="q5" id=e5 value="5"> 5.大変満足
          </p>
        </div>
        <div>
           <p>６．営業担当の対応について<br>
           <input type="radio" name="q6" id=a6 value="1"> 1.不満
           <input type="radio" name="q6" id=b6 value="2"> 2.やや不満
           <input type="radio" name="q6" id=c6 value="3"> 3.普通
           <input type="radio" name="q6" id=d6 value="4"> 4.満足
           <input type="radio" name="q6" id=e6 value="5"> 5.大変満足
          </p>
        </div>
        <div>
           <p>７．お問合せの対応について<br>
           <input type="radio" name="q7" id=a7 value="1"> 1.不満
           <input type="radio" name="q7" id=b7 value="2"> 2.やや不満
           <input type="radio" name="q7" id=c7 value="3"> 3.普通
           <input type="radio" name="q7" id=d7 value="4"> 4.満足
           <input type="radio" name="q7" id=e7 value="5"> 5.大変満足
          </p>
        </div>
        <div>
           <p>８．トラブル対応について<br>
           <input type="radio" name="q8" id=a8 value="1"> 1.不満
           <input type="radio" name="q8" id=b8 value="2"> 2.やや不満
           <input type="radio" name="q8" id=c8 value="3"> 3.普通
           <input type="radio" name="q8" id=d8 value="4"> 4.満足
           <input type="radio" name="q8" id=e8 value="5"> 5.大変満足
          </p>
        </div>

      <div>
        <p>９.バルブのトラブル・メンテナンス等でのお困りごとががございましたら、ご自由にお書きください。</p>
        <input type="text" name ="ploblems" class=input>
      </div>
      <div>
        <p>１０.当社が提供する商品・サービスに対しご意見、ご要望がございましたらご自由にお書きください。</p>
        <input type="text" name ="request" class=input>
      </div>
   
      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>