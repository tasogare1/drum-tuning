<?php
    include('./include.php');
?>

    <title>snare結果</title>
    <style>
    <style type="text/css" media="screen">
.i{font-size: 50px;}
<?php
include('./cssイラストinclude.php');
?>
    </style>

    </style>
<span style="font-size: 30px;">[打面の周波数]</span>
<?php
    echo '<span style="font-size: 30px;">';
    echo $_POST['スネア打面の周波数']."Hz"."<br>";
    echo '</span>';
?>
____________________________________________________________________________________________________________________________________________________________<br>
<span style="font-size: 30px;">裏面の周波数は<br>
<?php
    $スネア打面の周波数=$_POST['スネア打面の周波数'];
    $スネア裏面の周波数下限=(($スネア打面の周波数*(4/13)+1250/13)*3.42-$スネア打面の周波数);
    echo (int)$スネア裏面の周波数下限."Hz";
?>
～
<?php
    
    $スネア裏面の周波数上限=(($スネア打面の周波数*(4/13)+1250/13)*3.42-$スネア打面の周波数+70);
    echo (int)$スネア裏面の周波数上限."Hz";
?> 
<br>
の範囲にとどめましょう。<br>

オススメは<br>
<?php
    $スネア裏面の周波数オススメ=(($スネア打面の周波数*(4/13)+1250/13)*3.42-$スネア打面の周波数+25);
    echo (int)$スネア裏面の周波数オススメ."Hz";
?>
です。
</span><br>




_____________________________________________________________________________________________________________________________________________________________<br>
<br><br><br>
<div class="container">

    <a href="dtom楽器選択.php" class="button button--piyo">
        <div class="button__wrapper">
            <span class="button__text">tom,bass<br>トップへ戻る</span>
        </div>
        <div class="characterBox">
            <div class="character wakeup">
                <div class="character__face"></div>
            </div>
            <div class="character wakeup">
                <div class="character__face"></div>
            </div>
            <div class="character">
                <div class="character__face"></div>
            </div>
        </div>
    </a>

   <a href="dsnare基音周波数.php" class="button button--pen">
        <div class="button__wrapper">
            <span class="button__text">snare<br>トップへ戻る</span>
        </div>
        <div class="characterBox">
            <div class="character wakeup">
                <div class="character__face"></div>
                <div class="charactor__face2"></div>
            </div>
            <div class="character wakeup">
                <div class="character__face"></div>
                <div class="charactor__face2"></div>
            </div>
            <div class="character">
                <div class="character__face"></div>
                <div class="charactor__face2"></div>
            </div>
        </div>
    </a>
</div>
<br>
<a href="drumスタート.php">
    <span style="font-size: 30px;">アプリトップへ戻る</span>
</a>


















</head>
</html>

