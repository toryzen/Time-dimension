<?php
/*
 +------------------------------------------------------------------------------
 * 时间维度方法
 +------------------------------------------------------------------------------
 * @Framework  None
 * @Platform   None
 * @Author     ToryZen <toryzen@gmail.com>
 +------------------------------------------------------------------------------
*/
function week($s){
//星期方法
	if($s=='Sun'){
		$r[num] = '7';
		$r[cn] = '星期天';
	}
	if($s=='Mon'){
		$r[num] = '1';
		$r[cn] = '星期一';
	}
	if($s=='Tue'){
		$r[num] = '2';
		$r[cn] = '星期二';
	}
	if($s=='Wed'){
		$r[num] = '3';
		$r[cn] = '星期三';
	}
	if($s=='Thu'){
		$r[num] = '4';
		$r[cn] = '星期四';
	}
	if($s=='Fri'){
		$r[num] = '5';
		$r[cn] = '星期天';
	}
	if($s=='Sat'){
		$r[num] = '6';
		$r[cn] = '星期六';
	}
	return $r;
}
function season($s){
//季度方法
	if($s=='01'||$s=='02'||$s=='03'||$s=='04'){
		$r[num] = '1';
		$r[cn] = '一季度';
	}
	if($s=='05'||$s=='06'||$s=='07'||$s=='08'){
		$r[num] = '2';
		$r[cn] = '二季度';
	}
	if($s=='09'||$s=='10'||$s=='11'||$s=='12'){
		$r[num] = '3';
		$r[cn] = '三季度';
	}
	return $r;
}
function halfyear($s){
//半年方法
	if($s=='01'||$s=='2'||$s=='3'||$s=='4'||$s=='5'||$s=='6'){
		$r = '上半年';
	}
	else{
		$r = '下半年';
	}
	return $r;
}
function tendays($s){
//月旬方法
	$s = (int)$s;
	if($s<11){
		$r = '上旬';
	}
	if($s<21&&$s>10){
		$r = '中旬';
	}
	if($s>20){
		$r = '下旬';
	}
	return $r;
}

function monthcn($s){
	if($s=='01'){$r = '一月';}
	if($s=='02'){$r = '二月';}
	if($s=='03'){$r = '三月';}
	if($s=='04'){$r = '四月';}
	if($s=='05'){$r = '五月';}
	if($s=='06'){$r = '六月';}
	if($s=='07'){$r = '七月';}
	if($s=='08'){$r = '八月';}
	if($s=='09'){$r = '九月';}
	if($s=='10'){$r = '十月';}
	if($s=='11'){$r = '十一月';}
	if($s=='12'){$r = '十二月';}

	return $r; 
}

?>