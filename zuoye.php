<?php
function msubstr($str,$start,$len){
	$tmpstr=' ';
	$strlen=$start+$len;
	for($i=$start;$i<$strlen;$i++){
		if(ord(substr($str,$i,1))>0xa0){
			$tmpstr=substr($str,$i,2);
			echo $tmpstr;
			$i++;
		}else{
			$tmpstr=substr($str,$i,1);
			echo $tmpstr;
		}
	}
}
$str="明日科技公司是一家以计算机软件技术为核心的高科技企业，多年来始终致力于行业管理软件开发。数字化出版物制作、计算机网络系统综合应用以及行业电子商务网站开发等领域，涉及生产、管理、控制、物流、营销、服务等行业";
if(strlen($str)>60){
	echo msubstr($str,0,60).'...';
}else{
	echo $str;
}
?>