<?php
const EKI_SHOIN = '━　━';
const EKI_ROYO = '━━━';
const EKI_ROIN = '　×　';
const EKI_SHOYO = '　□　';

$eki = array();
$kou = array('初爻', '二爻', '三爻', '四爻', '五爻', '上爻');

for ($i = 0; $i < 6; $i++) {
	array_push($eki, array('teki'=>'', 'inyo'=>'', 'fuhenko'=>'', 'honka'=>'', 'shika'=>''));
	$coin1 = mt_rand(2, 3);
	$coin2 = mt_rand(2, 3);
	$coin3 = mt_rand(2, 3);
	$eki[$i]['teki'] = $coin1 . $coin2 . $coin3;
	$eki[$i]['inyo'] = $coin1 + $coin2 + $coin3;

	if ($eki[$i]['inyo'] == '6') {
		$eki[$i]['fuhenko'] = EKI_ROIN;
		$eki[$i]['honka'] = EKI_SHOIN;
		$eki[$i]['shika'] = EKI_ROYO;
	}
	if ($eki[$i]['inyo'] == '7') {
		$eki[$i]['fuhenko'] = EKI_SHOIN;
		$eki[$i]['honka'] = EKI_SHOIN;
		$eki[$i]['shika'] = EKI_SHOIN;
	}
	if ($eki[$i]['inyo'] == '8') {
		$eki[$i]['fuhenko'] = EKI_ROYO;
		$eki[$i]['honka'] = EKI_ROYO;
		$eki[$i]['shika'] = EKI_ROYO;
	}
	if ($eki[$i]['inyo'] == '9') {
		$eki[$i]['fuhenko'] = EKI_SHOYO;
		$eki[$i]['honka'] = EKI_ROYO;
		$eki[$i]['shika'] = EKI_SHOIN;
	}

 	if ($eki[$i]['inyo'] == '6') { $eki[$i]['inyo'] = '老陽'; }
	if ($eki[$i]['inyo'] == '7') { $eki[$i]['inyo'] = '少陰'; }
	if ($eki[$i]['inyo'] == '8') { $eki[$i]['inyo'] = '少陽'; }
	if ($eki[$i]['inyo'] == '9') { $eki[$i]['inyo'] = '老陰'; }
}