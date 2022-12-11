<?php
session_start();
$_SESSION['楽器の種類']=$_POST['楽器の種類'];
?>
<?php
    include('./include.php');
?>
    <title>基音の周波数比</title>
    <style>
input.i{
    font-size: 150%;
}
<?php
    include('./css送信include.php');
?>
    </style>




<span style="font-size: 30px;">[楽器の種類]</span>
<?php
    echo '<span style="font-size: 30px;">';
    echo $_POST['楽器の種類']."<br>";
    echo '</span>';
    

?>
____________________________________________________________________________________________________________________________________________________________<br>
<span style="font-size: 30px;">基音の周波数を選択してください</span><br>

<?php
if($_POST['楽器の種類']=='10タム'){
    echo "131~175Hzがオススメです！
    迷ったら156Hz(D#)にしてみてください。";
}elseif($_POST['楽器の種類']=='12タム'){
    echo "98~123Hzがオススメです！
迷ったら117Hz(A#)にしてみてください。";
}elseif($_POST['楽器の種類']=='13タム'){
    echo "82~110Hzがオススメです！
迷ったら93Hz(F#)にしてみてください。";
}elseif($_POST['楽器の種類']=='14タム'){
    echo "69~93Hzがオススメです！
迷ったら87Hz(F)にしてみてください。";
}elseif($_POST['楽器の種類']=='16タム'){
    echo "52~69Hzがオススメです！
迷ったら65Hz(C)にしてみてください。";
}elseif($_POST['楽器の種類']=='20バスドラム'){
    echo "39~49Hzがオススメです！
迷ったら44Hz(F)にしてみてください";
}elseif($_POST['楽器の種類']=='22バスドラム'){
    echo "39~49Hzがオススメです！
迷ったら44Hz(F)にしてみてください";
}
?>
<div class="i">
    <form action="dtom上下周波数比.php" method="post">
    <input type="number" name = "基音の周波数" placeholder="Hz" required="required">
</div>
<br>
    <input type='submit' value='送信' class="button button--1">
<br>
____________________________________________________________________________________________________________________________________________________________<br>

<a href="dtom楽器選択.php">
    <span style="font-size: 30px;">最初へ戻る</span>
</a><br>
<a href="drumスタート.php">
    <span style="font-size: 30px;">アプリトップへ戻る</span>
</a>
</head>
<body>