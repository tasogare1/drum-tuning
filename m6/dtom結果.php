<?php
session_start();
$楽器の種類=$_SESSION['楽器の種類'];
$基音の周波数=$_SESSION['基音の周波数'];
?>
<?php
    include('./include.php');
?>

    <title>tom,bass結果</title>
    <style>
    <style type="text/css" media="screen">
.i{font-size: 50px;}
<?php
include('./cssイラストinclude.php');
?>
    </style>

    </style>
<span style="font-size: 30px;">[楽器の種類]</span>
<?php
    echo '<span style="font-size: 30px;">';
    echo $楽器の種類."<br>";
    echo '</span>';
?>
____________________________________________________________________________________________________________________________________________________________<br>
<span style="font-size: 30px;">[基音の周波数]</span>
<?php
   echo '<span style="font-size: 30px;">';
    echo $基音の周波数."Hz"."<br>";
    echo '</span>';
?> 
____________________________________________________________________________________________________________________________________________________________<br>
<span style="font-size: 30px;">[上下ヘッドの周波数比]</span>
<?php
    echo '<span style="font-size: 30px;">';
    echo $_POST['周波数比']."<br>";
    echo '</span>';
    

?>
____________________________________________________________________________________________________________________________________________________________<br>
<?php

    if($_POST['周波数比']=="2:3(完全5度)"){
        $打面の周波数比=2;
        $裏面の周波数比=3;
    }elseif($_POST['周波数比']=="3:4(完全4度)"){
        $打面の周波数比=3;
        $裏面の周波数比=4;
    }elseif($_POST['周波数比']=="5:8(半6度)"){
        $打面の周波数比=5;
        $裏面の周波数比=8;
    }elseif($_POST['周波数比']=="1:1"){
        $打面の周波数比=1;
        $裏面の周波数比=1;
    }
    
    if($楽器の種類=="10タム"){
        $定数=3.42;
    }elseif($楽器の種類=="12タム"){
        $定数=3.42;
    }elseif($楽器の種類=="13タム"){
        $定数=3.42;
    }elseif($楽器の種類=="14タム"){
        $定数=3.6;
    }elseif($楽器の種類=="16タム"){
        $定数=3.6;
    }elseif($楽器の種類=="20バスドラム"){
        $定数=3.42;
    }elseif($楽器の種類=="22バスドラム"){
        $定数=3.42;
    }
    
    $打面の周波数=($基音の周波数*$定数)/($打面の周波数比+$裏面の周波数比)*$打面の周波数比;
    $裏面の周波数=($基音の周波数*$定数)/($打面の周波数比+$裏面の周波数比)*$裏面の周波数比;
?>
<span style="font-size: 30px;">結果</span><br>
<span style="font-size: 30px;">打面の周波数は
<?php echo (int)$打面の周波数."Hz";?>
</span><br>
<span style="font-size: 30px;">裏面の周波数は
<?php echo (int)$裏面の周波数."Hz";?>
</span><br>
<span style="font-size: 30px;">です！</span><br>
誤差は±3くらいあるかと思います。<br>
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
            <span class="button__text">snare</span>
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

