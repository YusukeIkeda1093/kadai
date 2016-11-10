<!--
今回送ったものはPHPの練習です。
環境構築にかなり手間取っており
今回の面談ではそのあたりをお聞きしたいと考えています。
-->













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="style_test1_input.css">
<title>PHP練習</title>
</head>

<body>

<!--getメソッドはURLパラメーター
	URLの後ろに?〜とつくことで値を一時的に保存・送信できるが
	パスワードなどの情報を送る時は丸見えになってしまうという欠点がある
	そこでpostメソッドを使用する
	getメソッドを使う時は$_GETで受け取る
	postメソッドは$_POSTで受け取る
	$_REQUESTはどちらの場合でも受け取れるが、URLを書き換えることで上書きができるといった脆弱性がある-->
<form action="test1.php" method="post">
<!--form action="test1.php" method="get"-->

<dl>

<dt><label for="my_name">お名前：</label></dt>
<dd><input id="my_name" type="text" name="my_name" size="35" maxlength="255" value="!名前未入力!" /></dd>

<dt><label for="message">メッセージ：</label></dt>
<dd><input id="message" type="text" name="message" size="35" maxlength="255" value="" /></dd>

<dt>性別：</dt>
<dd>
<input id="gender_male" type="radio" name="gender" value="男性" checked="checked"/><label for="gender_male">男性</label>
<input id="gender_female" type="radio" name="gender" value="女性" /><label for="gender_female">女性</label>
</dd>
<!-- <input for="~~"> の~~はID属性値と関連付けするためのもの。
	例えば上記の例だと、男性のlabelは、for="gender_male"とid="gender_male"で関連付けられているため、
	男性の文字をクリックした際も男性のラジオボタンがチェックされる-->
	
	<!--<?php
	phpinfo();
	?>-->
	
<dt>生まれ月：</dt>
<dd>
<select name="birth_month">
<?php

for($i = 1; $i <=12; $i ++){
	print('<option value=' . $i . '>' . $i . '月</option>');
}
?>
<!--
上のfor文と同義
<option value="1">1月</option>
<option value="2">2月</option>
<option value="3">3月</option>
<option value="4">4月</option>
<option value="5">5月</option>
<option value="6">6月</option>
<option value="7">7月</option>
<option value="8">8月</option>
<option value="9">9月</option>
<option value="10">10月</option>
<option value="11">11月</option>
<option value="12">12月</option>
-->
</select>
</dd>

<dt>質問１：</dt>
<dd><input id="question1" type="checkbox" name="question1" value="true" /><label for="question1">あなたは学生ですか？</label></dd>

<br><br>
<dt>今日は：</dt>
<dd>
<?php print(date('m月')); ?>
<select name="today">
<?php
for($d = 1; $d <= date('t'); $d ++){
	print('<option value="' . $d . '">' . $d . '日</option>');
}
?>
</select>
</dd>

</dl>

<input type="submit" value="送信する" />


</form>

</body>
</html>