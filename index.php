<?php
// 直角三角形
// *
// **
// ***
// ****
// *****

// 秘訣:想成tr、td

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
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

for ($i = 5; $i > 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
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

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= (5 - $i); $j++) {
        echo "&ensp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";

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
// 1.每列差2顆星星，和正三角形一樣，會需要加入空白做定位。
// 2.菱形的列數一定要是奇數的，才會有中間最長的那一列星星，中間列可以用(n+1)/2來表示
// 3.超過中間列後的星星數則以每列少兩顆的方式遞減，
// 4.整個菱形就是一個正三角形和一個倒三角形的組合

$temp = 0;
for ($i = 1; $i <= 9; $i++) {
    if ($i > 5) {
        // ◆ 6789列
        // $temp=4321(這是關鍵，注意不是-1-2-3-4喔，是承上$temp=5開始)
        $temp = $temp - 1;
    } else {
        // ◆ 12345列
        // $temp=12345
        $temp = $i;
    }
    echo $temp;

    // $j會有56789  8765這九種情形
    for ($j = 1; $j <= (4 + $temp); $j++) {
        if ($j <= (5 - $temp)) {
            echo "&ensp;";
        } else {
            // $j>(5-$temp)時
            echo "*";
        }
    }
    echo "<br>";
}

echo "<hr>";

// 菱形，可讀性比較高的寫法
//     *
//    ***
//   *****
//  *******
// *********
//  *******
//   *****
//    ***
//     *

$row = 18;

// 防止不是奇數列↓↓↓
if ($row % 2 == 0) {
    $row = $row + 1;
}

for ($i = 1; $i <= $row; $i++) {
    // mid是最多星星的第幾列數，是用總列數去+1除2得來
    $mid = ($row + 1) / 2;

    if ($i <= $mid) {
        $stars = 2 * $i - 1;
        $space = $mid - $i;
    // ↑上半部，↓下半部
    } else {
        $stars = ($row - $i) * 2 + 1;
        $space = ($mid - 1) - ($row - $i);
    }
    // space是空格變數，是(最多星星的列數-1)減(最大列減現在跑到的列數i)
    // space公式是怎麼得來的?似乎是上面的space倒過來
    // 以上先定義i大於小於最多星星的列數時，星星的數目該怎麼算
    for ($k = 1; $k <= $space; $k++) {
        echo "&ensp;";
    }
    for ($j = 1; $j <= $stars; $j++) {
        echo "*";
    }

    echo "<br>";
}
