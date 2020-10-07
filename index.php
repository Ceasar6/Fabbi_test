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

$arr = []; // mang ban dau
$newArr = []; // mang chua cac cap so
$n =10;
for($i = 0; $i<$n; $i++)
{
    $arr[$i] = rand(0,100);
}
echo implode(' - ', $arr)."<br>";
sort($arr);
echo implode(' - ', $arr)."<br>";
$min = $arr[1] - $arr[0];
for($i = 0; $i<count($arr)-1; $i++)
{
    if($arr[$i+1] - $arr[$i] < $min)
    {
        $min = $arr[$i+1] - $arr[$i];
    }
}
echo $min."<br>";
$index = 0;

for($i =0; $i < count($arr) -1; $i++)
{
    if($arr[$i+1] - $arr[$i] == $min)
    {
        $newArr[$index] = [];
        $newArr[$index][0] = $arr[$i];
        $newArr[$index][1] = $arr[$i+1];
        $index++;
    }
}
for ($i =0; $i< count($newArr); $i++)
{
    echo implode(' - ', $newArr[$i])."<br>";
}
