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
        <meta name="keywords" content="易占い">
        <title>PHPによる易占い（疑似擲銭法）</title>
		<style type="text/css">
			table {
				width: 500px;
				border: 2px #2b2b2b solid;
			}
			
			td {
				text-align: center;
				border: 2px #2b2b2b solid;
			}
		</style>
    </head>
    <body>
	<h2>PHPによる易占い(擲銭法)</h2>
	<p>中筮法/六変筮法</p>
		<!-- <form>
			<button type="submit" name="fortune" value="tekisen">擲銭する</button>
		</form> -->
		<br>
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
				<td rowspan="3">地</td>
				<td rowspan="6">地天泰</td>
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
				<td rowspan="3">天</td>
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
	</body>
</html>