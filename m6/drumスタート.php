<?php
    include('./include.php');
?>

    <title>スタート</title>
    
    <style type="text/css" media="screen">
.i{font-size: 50px;}
<?php
include('./cssイラストinclude.php');
?>
    </style>


</head>

<body>
<span style="font-size: 40px;">ドラムチューニングアプリ</span>
<br>
ドラムのチューニングを科学的、数値的に行うことのできるアプリです。
<br><br>
______________________________________________________________________________________________________________
<br>
<div class="i">
 <a href="drum説明.php" class="i">説明</a>
</div>

______________________________________________________________________________________________________________
<br><br>
↓↓↓とりあえず使ってみたいという方はこちら↓↓↓<br><br><br><br>
<div class="container">

    <a href="dtom楽器選択.php" class="button button--piyo">
        <div class="button__wrapper">
            <span class="button__text">tom,bass</span>
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

______________________________________________________________________________________________________________

    
    
</body>
</html>