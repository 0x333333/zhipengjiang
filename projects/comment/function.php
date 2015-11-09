<?php
/**
 * @时间转换函数和输出内容格式化函数
 * @2010 Helloweba.com,All Rights Reserved.
 * -----------------------------------------------------------------------------
 * @author: helloweba
 * @update: 2010-10-16
*/
if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


function formatSay($say,$dt,$uid){
	$say=htmlspecialchars(stripslashes($say));

	return'
	<div class="saylist"><a href="#"><img src="images/'.$uid.'.jpg" width="50" height="50" alt="demo" /></a>
	<div class="saytxt">
	<p><strong><a href="#">demo_'.$uid.'</a></strong> '. preg_replace('/((?:http|https|ftp):\/\/(?:[A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?[^\s\"\']+)/i','<a href="$1" rel="nofollow" target="blank">$1</a>',$say).'
	</p><div class="date">'.tranTime($dt).'</div>
	</div>
	<div class="clear"></div>
	</div>';
}

/*时间转换函数*/
function tranTime($time) {
	$rtime = date("m-d H:i",$time);
	$htime = date("H:i",$time);
	$time = time() - $time;

	if ($time < 60) {
		$str = '刚刚';
	}
	elseif ($time < 60 * 60) {
		$min = floor($time/60);
		$str = $min.'分钟前';
	}
	elseif ($time < 60 * 60 * 24) {
		$h = floor($time/(60*60));
		$str = $h.'小时前 '.$htime;
	}
	elseif ($time < 60 * 60 * 24 * 3) {
		$d = floor($time/(60*60*24));
		if($d=1)
		   $str = '昨天 '.$rtime;
		else
		   $str = '前天 '.$rtime;
	}
    else {
		$str = $rtime;
	}
	return $str;
}
?>
