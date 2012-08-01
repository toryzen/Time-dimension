<?php
/*
 +------------------------------------------------------------------------------
 * 时间维度生成
 +------------------------------------------------------------------------------
 * @Framework  None
 * @Platform   None
 * @Author     ToryZen <toryzen@gmail.com>
 +------------------------------------------------------------------------------
*/
ini_set("max_execution_time", "180000"); 
include('Function.php');
require_once 'Lunar.php';
$begintime = 1136131200;//开始时间20060101
$endtime = 1577808000;//结束时间20200101
$con = mysql_connect("localhost","root","");
mysql_select_db("NewTimter", $con);
mysql_query('set names utf8');
for($begintime;$begintime<=$endtime;$begintime+=86400){
	$gl = date('Ymd',$begintime);//公历
	$gl_shortbars = date('Y-m-d',$begintime);//公历短斜杠
	$gl_backslash = date('Y/m/d',$begintime);//公历反斜杠
	$gl_short = date('ymd',$begintime);//短公历
	$lunar = new Lunar();
	$nl = date("Ymd",$lunar->S2L(date("Y-m-d",$begintime))); //农历
	$year_num = date('Y',$begintime);//数字年
	$year_cn = $year_num."年";//中文年
	$month_num = date('m',$begintime);//数字月
	$month_cn = (int)($month_num)."月";//中文月(数字)
	$month_allcn = monthcn($month_num);//中文月
	$day_num = date('d',$begintime);//数字天
	$day_cn = (int)($day_num)."日";//中文天
	$week = week(date('D',$begintime));
	$dayofweek = $week[num];//数字星期
	$week_cn = $week[cn];//中文星期
	$season = season($month_num);
	$season_num = $season[num];//数字季度
	$season_cn = $season[cn];//中文季度
	$halfyear = halfyear($month_num);//半年
	$tendays = tendays($day_num);//月旬
	$month_en = date('M',$begintime);//英文月
	$week_en = date('l',$begintime);//英文周
	$dayofyear = date('z',$begintime)+1;//第几天
	$weekofyear = date('W',$begintime);//第几周
	//$dayofweek =  date('W',$begintime);//第几周
	//echo $gl."	".$weekofyear."<br/>";
	//echo $month_allcn."<br>" ;
	mysql_query("INSERT INTO timer (gregorian,g_shortbars,g_backslash,g_short,lunar,dayofyear,weekofyear,dayofweek,year_num,month_num,day_num,season_num,year_cn,month_cn,month_allcn,day_cn,week_cn,season_cn,tendays,halfyear,month_en,week_en) VALUES ('".$gl."','".$gl_shortbars."','".$gl_backslash."','".$gl_short."','".$nl."','".$dayofyear."','".$weekofyear."','".$dayofweek."','".$year_num."','".$month_num."','".$day_num."','".$season_num."','".$year_cn."','".$month_cn."','".$month_allcn."','".$day_cn."','".$week_cn."','".$season_cn."','".$halfyear."','".$tendays."','".$month_en."','".$week_en."')",$con);
}
mysql_close($con);
?>