<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="box">
    <?php

    echo'<h1>はじめてのPHP</h1>';
    
    echo 5+2;
    echo '5+2';
    
    echo '<p>5+7</p>';
    echo '<br>';
    echo 5+7;
    
    $keisan=7;
    $goukei=$keisan*$keisan;

    echo $goukei;
    
    echo '<br>';
    $apple='りんご';
    echo $apple;
    echo '<br>';
    $num=10+10;
    echo $num;

    echo '<br>';
    $a=1;
    $b=2;
    if($a==1){
        echo '1が表示されました';
    }elseif($a==2){
        echo '2が表示されました';
    }
    if($b==1){
        echo '1が表示されました';
    }elseif($b==2){
        echo '2が表示されました';
    }

    echo '<br>';
    echo mt_rand(1,6);

    echo '<br>';
    $random=mt_rand(1,6);
    echo $random;

    if($random==1){
        echo '１が出ました';
    }elseif($random==2){
        echo '２がでました';
    }

    echo '<br>';
    $random=mt_rand(1,5);
    if($random==1){
        echo '<img src="https://t.pimg.jp/036/544/952/1/36544952.jpg">';
    }elseif($random==2){
        echo '<img src="https://t.pimg.jp/036/544/953/1/36544953.jpg">';
    }elseif($random==3){
        echo '<img src="https://t.pimg.jp/036/544/954/1/36544954.jpg">';
    }elseif($random==4){
        echo '<img src="https://t.pimg.jp/036/544/950/1/36544950.jpg">';
    }elseif($random==5){
        echo '<img src="https://t.pimg.jp/036/544/951/1/36544951.jpg">';
    }
    ?>
 </div>

 <div class="box2">
   <div class="person1">
      <div class="person11">
        <?php
          echo 'あなた';
        ?>
      </div>
      <div class="person12">
        <?php
          $random=mt_rand(1,3);
          if($random==1){
            echo '<img src="https://t.pimg.jp/001/428/522/1/1428522.jpg">';
          }elseif($random==2){
            echo '<img src="https://t.pimg.jp/001/428/523/1/1428523.jpg">';
          }elseif($random==3){
            echo '<img src="https://t.pimg.jp/001/428/526/1/1428526.jpg">';
          }
        ?>
      </div>
   </div>
   <div class="person2">
       <div class="person21">
         <?php
            echo '相手';
         ?>
       </div>
       <div class="person22">
         <?php
           $random=mt_rand(4,6);
           if($random==4){
             echo '<img src="https://t.pimg.jp/001/428/522/1/1428522.jpg">';
           }elseif($random==5){
             echo '<img src="https://t.pimg.jp/001/428/523/1/1428523.jpg">';
           }elseif($random==6){
             echo '<img src="https://t.pimg.jp/001/428/526/1/1428526.jpg">';
           }
         ?>
       </div>   
   </div>
 </div>
</body>
</html>