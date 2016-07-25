<?php
/**
 * 用户数据的分页
 * @param  int $pageNum       当前页号
 * @param  int $pageSum       总页码数
 * @param  int $pageNavLength 导航栏页数长度
 * @return array   $pageNav   数组栏的内容
 */
function pageNav($pageNum,$pageSum,$pageNavLength){
	$pageNavNum = ceil($pageNum/$pageNavLength);
	$pageNav = array();
	if($pageSum >= ($pageNavNum * $pageNavLength)){
		for($i=1 ; $i<=$pageNavLength ; $i++){
			$pageNav[] = ($pageNavNum-1) * $pageNavLength + $i;
		}
	}else{
		for($i=1 ; $i<=(($pageSum % $pageNavLength)?$pageSum % $pageNavLength:1) ; $i++){
			$pageNav[] = ($pageNavNum-1) * $pageNavLength + $i;
		}
	}
	return $pageNav;
}