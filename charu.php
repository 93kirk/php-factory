<?php
/**
 * Created by PhpStorm.
 * User: chm
 * Date: 2016/4/1
 * Time: 19:35
 */
//插入排序特点是一边是排好顺序的，另一边一个一个和顺序的数据对比，每次对比插入一个
function charu($arr) {
    $len = count($arr);

    //先给出一个原数组
    echo "原数组为：";
    for($y = 0;$y < $len;$y++){
        echo $arr[$y];
    }
    echo "<br>";
    echo "下面开始排序";
    echo "<br>";


    //外层循环空值轮次
    for($i = 1; $i < $len; $i++) {

        //比较新数和前面顺序序列，找好位置插入
        $x = $arr[$i];
        for($j = $i-1;$j >= 0;$j--) {
            if($x < $arr[$j]) {
                //发现插入的元素要小，交换位置，将后边的元素与前面的元素互换
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $x;
            }

            //如果碰到不需要移动的元素，由于是已经排好的数组，则前面的就不需要再次比较了。
            else {
                break;
            }
        }

        //for循环用于输出数组，从第一次排序结束开始
        for($y = 0;$y < $len;$y++){
            echo $arr[$y];
        }
        echo "<br>";
    }

}

$arrayha = array(3,1,6,4,5,2);
charu($arrayha);