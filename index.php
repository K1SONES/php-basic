<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>この文章はHTMLで出力しています。</p>
     <p>
         <?php
         echo 'この文章はPHPで出力しています。';
         ?>
     </p>
     <p>
         <?php
         // 四則演算（整数型のみ）
         echo 45 + 18;
         echo '<br>';
         echo 30 - 12;
         echo '<br>';
         echo 15 * 6;
         echo '<br>';
         echo 30 / 3;
         echo '<br>';
         echo 45 % 8;
         ?>
     </p>
     <p>
         <?php
         // 四則演算（浮動小数点型を含む）
         echo 4.5 + 1.8;
         echo '<br>';
         echo 3 - 1.2;
         echo '<br>';
         echo 1.5 * 0.6;
         echo '<br>';
         echo 3 / 0.3;
         echo '<br>';
         // 浮動小数点型で生じる誤差の確認（結果が0.1にならない）
         echo 100 - 99.9;
         ?>
     </p>

         <p>
         <?php
         // 文字列の連結
         echo '45' . '18';
         echo '<br>';
         echo '今日の天気は' . '晴れ';
         echo '<br>';
         echo '今日の天気は' . '曇り';
         ?>
     </p>
     <p>
         <?php
         // 変数に値を代入する
         $user_name = '侍太郎';
 
         // 変数の中身を出力する
         echo $user_name;
         
         echo '<br>';
 
         // 変数に値を再代入する
         $user_name = '侍花子';
 
         // 変数の中身を出力する
         echo $user_name;
         ?>
     </p>
     <p>
         <?php
         // 変数に値を代入する
         $number = 3;
 
         // 変数と数値を計算し、その結果を出力する
         echo $number - 1.2;
 
         // 改行する
         echo '<br>';
 
         // 変数に値を代入する
         $my_name = '侍一郎';
 
         // 変数と文字列を連結し、その結果を出力する
         echo '私の名前は' . $my_name . 'です。';
                  // 改行する
                  echo '<br>';
 
                  // 文字列の中で変数の中身を表示する（変数展開）
                  echo "私の名前は{$my_name}です。";
         ?>
     </p>
 </body>
 
 </html>