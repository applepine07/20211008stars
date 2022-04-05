<?php
// 直角三角形
// *
// **
// ***
// ****
// *****

// 秘訣:想成tr、td

for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        // ↑$j印的個數不會大於每列的$i，第一列印1個，第二列印2個，以此類推
        echo "*";
    }
    // $i結束一輪就斷行一次
    echo "<br>";
}

echo "<hr>";

// 倒直角三角形
// *****
// ****
// ***
// **
// *

// 秘訣:外圈數字倒過來

for($i=5;$i>0;$i--){
    for($j=1;$j<=$i;$j++){
        // ↑$j印的個數不會大於每列的$i，第一列印1個，第二列印2個，以此類推
        echo "*";
    }
    // $i結束一輪就斷行一次
    echo "<br>";
}

echo "<hr>";

// 正三角形
//     *
//    ***
//   *****
//  *******
// *********
// 秘訣
// 1．每列的星星數差2顆
// 2．每列會插入不同數目的空白來將星星定位到中間的位置
// 3．觀察每列的星星數和列的關係，為2n-1，n從1開始
// 4．觀察每列的空白數和列的關係，為5-n，n從1開始

for($i=1;$i<=5;$i++){
    for($j=1;$j<=(5-$i);$j++){
        echo "&ensp;";
    }
    for($k=1;$k<=(2*$i-1);$k++){
        echo "*";
    }
    echo "<br>";
}

// 菱形
//     *
//    ***
//   *****
//  *******
// *********
//  *******
//   *****
//    ***
//     *



?>