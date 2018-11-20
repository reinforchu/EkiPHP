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
        <link rel="icon" type="image/gif" href="./assets/icon/animated_favicon1.gif">
		<link rel="stylesheet" href="./assets/css/style.css">
		<script type="text/javascript" src="./assets/script/common.js"></script>
    </head>
    <body>
		<h2>PHPによる易占い(擲銭法) - 中筮法/六変筮法</h2>
		<div id="reset">
			<button type="submmit" onClick="location.href='./';">もう一度占う</button>
		</div>
		<div id="coin">
			<form action="./?s" method="get">
				<button type="button" value="1" name="0" id="tekisen" onClick="onTekisen();">開始</button>
			</form>
			<p>ボタンをクリックして擲銭してから占います。</p>
		</div>
		<div id="fortune">
			<h2>擲銭結果</h2>
			<table>
				<tr>
					<th>爻</th>
					<th>擲銭</th>
					<th>陰陽</th>
					<th>不変爻</th>
					<th>本卦</th>
					<th>之卦</th>
					<th>八卦</th>
					<th>六十四卦</th>
				</tr>
				<tr>
					<td>上爻</td>
					<?php foreach($eki[5] as $key => $value) { echo '<td>' . $value . '</td>'. "\n\t\t\t\t"; } ?>
					<td rowspan="3"><ruby><?php echo $hakkei[2]; ?><rt>本卦</rt><hr></ruby><?php echo $hakkei[3]; ?></td>
					<td rowspan="6"><ruby><?php echo $ka64[0]; ?><rt>本卦</rt></ruby><hr><ruby><?php echo $ka64[1]; ?><rt>之卦</rt></ruby></td>
				</tr>
				<tr>
					<td>五爻</td>
					<?php foreach($eki[4] as $key => $value) { echo '<td>' . $value . '</td>'. "\n\t\t\t\t";} ?>
				</tr>
				<tr>
					<td>四爻</td>
					<?php foreach($eki[3] as $key => $value) { echo '<td>' . $value . '</td>'. "\n\t\t\t\t";} ?>
				</tr>
				<tr>
					<td>三爻</td>
					<?php foreach($eki[2] as $key => $value) { echo '<td>' . $value . '</td>'. "\n\t\t\t\t";} ?>
					<td rowspan="3"><ruby><?php echo $hakkei[6]; ?><rt>之卦</rt></ruby><?php echo $hakkei[7]; ?></td>
				</tr>
				<tr>
					<td>二爻</td>
					<?php foreach($eki[1] as $key => $value) { echo '<td>' . $value . '</td>'. "\n\t\t\t\t";} ?>
				</tr>
				<tr>
					<td>初爻</td>
					<?php foreach($eki[0] as $key => $value) { echo '<td>' . $value . '</td>'. "\n\t\t\t\t";} ?>
				</tr>
			</table>
			<h2>占断</h2>
			<h3><?php echo $henkouTip; ?></h3>
			<p><?php echo $henkouInfoTip; ?></p>
			<p>六二の<?php echo $ka64[0]; ?>は良い卦です。大人に会います。吉です。</p>
			<p>上九の<?php echo $ka64[1]; ?>は良い卦です。願いごとは大いに叶うでしょう。大吉です。</p>
		</div>
		<script type="text/javascript" src="./assets/script/hide.js"></script>
	</body>
</html>