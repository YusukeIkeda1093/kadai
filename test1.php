<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="style_test1_input.css">
<title>PHP練習</title>
</head>

<body>

<?php
print ('PHPを勉強中ですよ!! by ikeda');
print("<br><br>");
print ('現在の時間だよ!');
print("<br>");
date_default_timezone_set('Asia/Tokyo');
//htmlタグはダブルクォーテーション
//文字列の結合は . で
print ('今日は ' . date('Y年 n月 j日') . ' です。' . "<br>");
print ('時間は' . date('H時 i分') . 'です。');


//前ページで入力された文字列を表示
print("<br><br>" . 'お名前：' . "<font color='blue'>" . htmlspecialchars($_POST['my_name'], ENT_QUOTES) . "</font><br>");
//print('お名前：' . htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES));
//print('お名前：' . htmlspecialchars($_GET['my_name'], ENT_QUOTES));
//htmlspecialcharsを省略して$_POST['myname']のみでも通るが
//「いけだ <abc> ゆうすけ」など、<>が含まれた文字列の場合
//<>ないが表示されないだけでなく、ハッキング行為に繋がる恐れがある。必ず書こう
//2つ目のパラメーター「ENT_QUOTES」は
//シングルクォーテーションも安全に受信するという意味で安全性が増す。
//意識せず必ずつけると思って良い。

print('メッセージ：' . htmlspecialchars($_POST['message'], ENT_QUOTES) . "<br>");
print('性別：' . htmlspecialchars($_POST['gender'], ENT_QUOTES) . "<br>");
print('生まれ月：' . htmlspecialchars($_POST['birth_month'], ENT_QUOTES) . "月<br>");

//checkboxの真偽によってメッセージを変える
if(htmlspecialchars($_POST['question1'], ENT_QUOTES) == "true"){
	print('質問1：学生です' . "<br>");
}else{
	print('質問1：学生ではありません' . "<br>");
}

//変数の定義、使い方
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
print('改めて、名前は' . $my_name . 'です。'); 

function funcTest(){
	print('<br><input id="funcTest" type="checkbox" /><label for="funcTest">関数テストOKです</label>');
}

echo funcTest();
echo funcTest();
?>


<div id="bird_image" style="position:absolute; left:500px;">
<img src="http://www.wanpug.com/illust/illust4667.png" width="30%" height="30%"></div>

<br><br><br><br><br>
<p>変数の使い方！<font color="blue"><?php print($my_name); ?></font></p>

</body>
</html>