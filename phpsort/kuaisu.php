<?php
/**
 * User: chm
 * Date: 2016/4/1
 * Time: 20:25
 */

//快速排序和前面的比起来思路要复杂一些，也是算法精髓入门之处，递归，我没仔细想怎么把每轮输出，因为分成小块了
function kuaisu($arr) {
    //先判断是否需要继续进行排序（即还有几个数据在数组中）
    $len = count($arr);
    if($len <= 1) {
        return $arr;
    }
    //选择第一个元素作为中间的标准值
    $middle = $arr[0];

    //遍历标准值外的所有元素，按照大小关系放入两个数组内
    //初始化两个数组，用于分开排序
    $left = array(); //小于中间标准值的数组
    $right = array(); //大于标准值的数组
    for($i=1; $i<$len; $i++) {
        if($middle > $arr[$i]) {
            //放入左边数组
            $left[] = $arr[$i];
        } else {
            //放入右边
            $right[] = $arr[$i];
        }
    }
    //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
    $left = kuaisu($left);
    $right = kuaisu($right);
    //合并
    return array_merge($left, array($middle), $right);
}

//先给出一个原数组
$arrayha = array(3,1,6,4,5,2);
$l = count($arrayha);
echo "原数组为：";
for($y = 0;$y < $l;$y++){
    echo $arrayha[$y];
}
echo "<br>";

//调用方法
$s = kuaisu($arrayha);

//下方for循环用于输出数组，从第一次排序开始
echo "快速排序过后：";
echo "<br>";
for($y = 0;$y < $l;$y++){
    echo $s[$y];
}