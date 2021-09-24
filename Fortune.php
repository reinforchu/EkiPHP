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
					<td rowspan="3"><ruby><?php echo $hakkei[2]; ?><rt>本卦</rt></ruby><?php echo $hakkei[3]; ?></td>
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
			<p><a href="https://www.google.com/search?q=<?php echo $ka64[0]; ?>"><?php echo $ka64[0]; ?> をGoogleで検索する</a>
			<p><a href="https://www.google.com/search?q=<?php echo $ka64[1]; ?>"><?php echo $ka64[1]; ?> をGoogleで検索する</a>
		</div>
		