<?php
/**
 * User: chm
 * Date: 2017/3/22
 * Time: 14:54
 */
//
//sguibing为单次归并操作，参数$r为读入数组，参数$i为排序结果数组的键，参数$m为前半部分数组的末尾键，参数$n为入参数组的末尾键
function sguibing($r,$rf,$i,$m,$n){
	//print_r($r);//测试代码
	//$j和$i分别控制前半部分和后半部分的入组情况，$k控制了新的$rf数组的键，$m和$n限定前后两部分数组的最终长
    for($j=$m+1,$k=$i; $i<=$m&&$j<=$n; $k++){
		//谁小谁先进组
        if($r[$j] < $r[$i]){
			$rf[$k] = $r[$j++]; 
		}			
        else{
		    $rf[$k] = $r[$i++];
		}  
    }  
	//最后一定会剩下一侧没有入组完毕，两个while保证最后收尾
    while($i <= $m){
		$rf[$k++] = $r[$i++];  
	}
    while($j <= $n){
		$rf[$k++] = $r[$j++];
	}
	return $rf;
}
//guibing为整体归并情况，$arr为读入的排序数组
function guibing($arr){
	//$len代表当前每小段长度，$lenght代表总长，$rf代表排序后新数组
	$len = 1; 
	$lenght = count($arr);
	$rf = array();
    while($len < $lenght) {//大循环，控制整体进展
        $len = $len*2;
        $i = 0;  
		//$rf = array();//此处为当时犯错代码，已经提出循环外
        while($i+$len <= $lenght){  //小循环控制每一段的归并
		    //static $x = 0;//测试参数
            $rf = sguibing($arr,$rf,$i, $i+$len/2-1, $i+$len-1); //对等长的两个子表合并
            $i = $i+$len;  
			//echo ++$x;print_r($rf);echo "<br>";//测试代码
        }  
        if($i + $len/2 < $lenght){  //收尾归并最后多出的不规则长度子表
            $rf = sguibing($arr,$rf,$i, $i+$len/2-1, $lenght -1); //对不等长的两个子表合并  
			//echo ++$x;print_r($rf);echo "<br>";//测试代码
        }  
		
        $arr = $rf; //rf赋值给arr，下一轮根据新数组继续运算 
    }  
	print_r($arr);
}
function test(){
	$arr = [3,1,5,7,2,4,9,6,10,8];  
	for($i=0;$i<50;$i++){
		$arr[$i] = rand(0,10000);
	}
	print_r($arr);echo "<br><br>";
    guibing($arr);
}
test();
    


