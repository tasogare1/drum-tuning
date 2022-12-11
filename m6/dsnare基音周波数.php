

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





<span style="font-size: 30px;">打面の周波数を選択してください</span><br>

<div class="i">
    <form action="dsnare結果.php" method="post" >
    <input type="number" name = "スネア打面の周波数" placeholder="Hz" required="required">
</div>
<br>
    <input type='submit' value='送信' class="button button--1">
<span style="font-size: 20px;">
240～260Hz:ローピッチ<br><br>

260～300Hz:ミディアムピッチ<br><br>

300～370Hz:ハイピッチ<br><br>

370～450Hz:超ハイピッチ<br><br>
が目安です。
</span><br>
________________________________________________________________________________________________________________________________________________________<br>
<a href="drumスタート.php">
    <span style="font-size: 30px;">アプリトップへ戻る</span>
</a>
</head>
<body>