<?php
const EKI_SHOIN = '━　━';
const EKI_ROYO = '━━━';
const EKI_ROIN = '　×　';
const EKI_SHOYO = '　□　';

$eki = array();
$kou = array('初爻', '二爻', '三爻', '四爻', '五爻', '上爻');
$ext = (int) 0;
$henkouTip = "";
$henkouInfoTip = "";
$hakkei = array();
$ka64 = array();

// 卦辞
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
		++$ext;
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
		++$ext;
	}

	// 陰陽
 	if ($eki[$i]['inyo'] == '6') { $eki[$i]['inyo'] = '老陽'; }
	if ($eki[$i]['inyo'] == '7') { $eki[$i]['inyo'] = '少陰'; }
	if ($eki[$i]['inyo'] == '8') { $eki[$i]['inyo'] = '少陽'; }
	if ($eki[$i]['inyo'] == '9') { $eki[$i]['inyo'] = '老陰'; }
}

// 変爻
switch($ext)
{
	case 1;
		$henkouTip = "一爻変";
		$henkouInfoTip = "本卦の変爻の爻辞を読みます。";
	break;
	case 2;
		$henkouTip = "二爻変";
		$henkouInfoTip = "本卦の変爻の爻辞を読みます。ただし、上爻を主とします。";
	break;
	case 3;
		$henkouTip = "三爻変";
		$henkouInfoTip = "本卦と之卦の卦辞を読みます。";
	break;
	case 4;
		$henkouTip = "四爻変";
		$henkouInfoTip = "之卦の二つの不変爻の爻辞を読みます。ただし、下爻を主とします。";
	break;
	case 5;
		$henkouTip = "五爻変";
		$henkouInfoTip = "之卦の不変爻の爻辞を読みます。";
	break;
	case 6;
		$henkouTip = "六爻変";
		$henkouInfoTip = "之卦の卦辞を読みます。ただし、乾為天は用九を読み、坤為地は用六を読みます。";
	break;
	default;
		$henkouTip = "変爻なし";
		$henkouInfoTip = "本卦の卦辞を読みます。";
    break;
}

// 八卦
$hakkei[] = $eki[5]['honka'] . $eki[4]['honka'] . $eki[3]['honka'];
$hakkei[] = $eki[2]['honka'] . $eki[1]['honka'] . $eki[0]['honka'];
$hakkei[] = ka8($hakkei[0]);
$hakkei[] = ka8($hakkei[1]);
$hakkei[] = $eki[5]['shika'] . $eki[4]['shika'] . $eki[3]['shika'];
$hakkei[] = $eki[2]['shika'] . $eki[1]['shika'] . $eki[0]['shika'];
$hakkei[] = ka8($hakkei[4]);
$hakkei[] = ka8($hakkei[5]);

// 六十四卦
$ka64[] = ka64($hakkei[0] . $hakkei[1]);
$ka64[] = ka64($hakkei[4] . $hakkei[5]);

function ka8($ka) {
	if (EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "乾"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "巽"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "離"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "艮"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "兌"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "坎"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "震"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "坤"; }
	return 0;
}

function ka64($ka) {
	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "天地否"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "沢地萃"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "火地晋"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "雷地豫"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "風地観"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "水地比"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "山地剥"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN === $ka) { return "坤為地"; }

	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "天山遯"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "沢山咸"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "火山旅"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "雷山小過"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "風山漸"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "水山蹇"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "艮為山"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN === $ka) { return "地山謙"; }

	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "天水訟"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "沢水困"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "火水未済"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "雷水解"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "風水渙"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "坎為水"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "山水蒙"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN === $ka) { return "地水師"; }

	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "天風姤"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "沢風大過"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "火風鼎"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "雷風恒"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "巽為風"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "水風井"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "山風蠱"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN === $ka) { return "地風升"; }

	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "天雷无妄"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "沢雷随"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "火雷噬嗑"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "震為雷"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "風雷益"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "水雷屯"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "山雷頤"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO === $ka) { return "地雷復"; }

	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "天火同人"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "沢火革"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "離為火"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "雷火豊"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "風火家人"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "水火既済"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "山火賁"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO === $ka) { return "地火明夷"; }

	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "天沢履"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "兌為沢"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "火沢睽"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "雷沢帰妹"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "風沢中孚"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "水沢節"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "山沢損"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO === $ka) { return "地沢臨"; }

	if (EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "乾為天"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "沢天夬"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "火天大有"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "雷天大壮"; }
	if (EKI_ROYO . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "風天小畜"; }
	if (EKI_SHOIN . EKI_ROYO . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "水天需"; }
	if (EKI_ROYO . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "山天大畜"; }
	if (EKI_SHOIN . EKI_SHOIN . EKI_SHOIN . EKI_ROYO . EKI_ROYO . EKI_ROYO === $ka) { return "地天泰"; }
	return 0;
}