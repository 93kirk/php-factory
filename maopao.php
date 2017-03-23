<?php
/**
 * Created by PhpStorm.
 * User: chm
 * Date: 2016/4/1
 * Time: 18:51
 */

//冒泡算法有大数沉底，小数浮出，思想本质相同，本方法用的是大数沉底
function maopao($arr){
    $len = count($arr);

    //先给出一个原数组
    echo "原数组为：";
    for($y = 0;$y < $len;$y++){
        echo $arr[$y];
    }
    echo "<br>";
    echo "下面开始排序";
    echo "<br>";


    //用于记录冒泡轮次
    for($i = 1;$i < $len;$i++){


        //用于标记比较次数
        for($k = 0;$k < $len-$i;$k++){

            //比较大小
            if($arr[$k]>$arr[$k+1]){
                $x = $arr[$k+1];
                $arr[$k+1] = $arr[$k];
                $arr[$k] = $x;
            }
        }

        //下方for循环用于输出数组，从第一次排序开始
        for($y = 0;$y < $len;$y++){
            echo $arr[$y];
        }
        echo "<br>";
    }

}

//调用方法
$arrayha = array(3,1,6,4,5,2);
maopao($arrayha);


