<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="no-cache, no-store">
        <meta http-equiv="pragma" content="no-cache">
        <meta name="expires" content="0">
        <meta name="viewport" content="width=600">
        <meta name="theme-color" content="#bbc8e6">
        <meta name="description" content="PHPで擲銭法の易占いをします">
        <meta name="keywords" content="易占い,php">
		<meta name="author" content="reinforchu">
		<title>PHPによる易占い（疑似擲銭法）</title>
		<link rel="shortcut icon" href="./assets/icon/favicon.ico">
        <link rel="icon" type="image/gif" href="./assets/icon/animated_favicon.gif">
		<link rel="stylesheet" href="./assets/css/style.css">
		<script type="text/javascript" src="./assets/script/common.js"></script>
    </head>
    <body>
		<h2>PHPによる易占い(擲銭法) - 中筮法/六変筮法</h2>
		<?php if($_SERVER["REQUEST_METHOD"] === "POST") { echo '<button type="submmit" onClick="if(confirm(/もう一度占いますか？/.source)){location.href=`./`;}">もう一度占う</button>'; } ?>
		<?php if($_SERVER["REQUEST_METHOD"] !== "POST") { echo '<div id="coin">
			<form action="./" method="post">
				<button type="button" id="tekisen" onClick="onTekisen();">はじめる</button>
			</form>
			<p>上のボタンをクリックまたはタップしてください。</p>
			<p>タップすることで擲銭で占うことができます。</p>
			<p>占いたいことを念じながら、6回タップしてください。</p>
		</div>'; } ?><?php if($_SERVER["REQUEST_METHOD"] === "POST") { include('./Fortune.php'); } ?>
		<hr>
		<p>お問い合わせ: rein@hack.vet</p>
		<a href="https://twitter.com/reinforchu">Twitter: @reinforchu</a>
		<p>eki42 Version 1.2.3</p>
	</body>
</html>