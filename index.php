<?php
// Bài 1 Cấu trúc lại mảng
$arr = []; // mang ban dau
$newArr = []; // mang sau khi cau truc
$n = 3; //nhap gia tri cua n
for($i = 0; $i<3*$n; $i++)
{
    $arr[$i] = rand(0,100);
}
for($i =0; $i<$n; $i++)
{
    $newArr[$i*$n] = $arr[$i];
    $newArr[$i*$n+1] = $arr[$i +$n];
    $newArr[$i*$n+2] = $arr[$i+$n*2];
}

// bài 2 Tìm tổng lớn nhất của 2 phần tử trong mảng số nguyên

function calMax($arr) {
    sort($arr);
    $n = count($arr);
    $result = $arr[$n-1] + $arr[$n-2];
    return $result;
}


// bài 3 Tìm các cặp giá trị có khoảng cách nhỏ nhất
$arr = array([ 1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15]);

function smallDistance($arr){
    $arrNew = sort($arr);
$min = $arrNew[1] - $arrNew[0];
for ($i =0; $i < count($arrNew); $i++){

}
}