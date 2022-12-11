<?php
session_start();
$楽器の種類=$_SESSION['楽器の種類'];
$_SESSION['基音の周波数']=$_POST['基音の周波数'];

?>
<?php
    include('./include.php');
?>
    <title>上下ヘッド周波数比</title>
    <style>
.box select{ font-size: 30px; }
<?php
    include('./css送信include.php');
?>
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
    echo $_POST['基音の周波数']."Hz"."<br>";
    echo '</span>';
?> 
____________________________________________________________________________________________________________________________________________________________<br>

<span style="font-size: 30px;">上下ヘッドの周波数比を選択してください</span><br>
2:3が標準的、3:4がそれよりも打面が若干高く、5:8が打面が若干低くなります。<br>
例えば2:3で200:300なら、3:4だと214:286、5:8だと192:308になります。<br>

    <form action="dtom結果.php" method="post"  >
<div class="box">
    <select name='周波数比'>
    <option value="2:3(完全5度)">2:3(完全5度)</option>
    <option value="3:4(完全4度)">3:4(完全4度)</option>
    <option value="5:8(半6度)">5:8(半6度)</option>
    <option value="1:1">1:1</option>
    </select>
</div>
    <input type='submit' value='送信' class="button button--1">
    </form>  
 ____________________________________________________________________________________________________________________________________________________________<br>

<a href="dtom楽器選択.php">
    <span style="font-size: 30px;">最初へ戻る</span>
</a><br>
<a href="drumスタート.php">
    <span style="font-size: 30px;">アプリトップへ戻る</span>
</a>
</head>
<body>