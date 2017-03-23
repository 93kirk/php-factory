<?php
/**
 * User: chm
 * Date: 2016/4/1
 * Time: 19:21
 */
//选择排序，应该也有最大最小值选择方法吧，思想依然相同，本方法用的小数值选择
function xuanze($arr){
    $len = count($arr);

    //先给出一个原数组
    echo "原数组为：";
    for($y = 0;$y < $len;$y++){
        echo $arr[$y];
    }
    echo "<br>";
    echo "下面开始排序";
    echo "<br>";

    //记录轮次
    for($i = 0;$i < $len-1;$i++){


        //选择排序的标记$s，用于标记最小值
        $s = $i;
        for($j = $i+1;$j < $len;$j++){
            if($arr[$s] > $arr[$j]){
                $s = $j;
            }
        }

        //若标记不在初始位置，交换标记的和前面最初的标记数据
        if($s != $i) {
            $x = $arr[$s];
            $arr[$s] = $arr[$i];
            $arr[$i] = $x;
        }

        //下方for循环用于输出数组，从第一次排序开始
        for($y = 0;$y < $len;$y++){
            echo $arr[$y];
        }
        echo "<br>";
    }

}


$arrayha = array(3,1,6,4,5,2);
xuanze($arrayha);