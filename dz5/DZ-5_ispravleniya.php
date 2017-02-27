<?php
echo '<h1>--------------------------------------------На count и range---------------------------------------------</h1>';
echo '<h1>-------------------------------------------------1--------------------------------------------------------</h1>';
/*1. Создайте массив, заполненный числами от 1 до 100.*/
$arr = null;
foreach (range(0, 100, 10) as $number) {
    $arr [] = $number;
}
print_r($arr);

echo '<h1>-------------------------------------------------5--------------------------------------------------------</h1>';
/*5. Создайте массив, заполненный числами от 1 до 300. Найдите произведение элементов данного массива.*/
$arr1 = null;
foreach (range(1, 300, 1) as $value) {
    $arr1[] = $value;
}
shuffle($arr1);
$arr1 = array_slice($arr1, 0, 6);
echo array_product($arr1);

echo '<h1>-------------------На сортировку, shuffle и array_rand-------------------------</h1>';
echo '<h1>-------------------------------------------------14--------------------------------------------------------</h1>';

/*14. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.*/

$qa = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
arsort($qa);
print_r($qa);
echo '<br>';
asort($qa);
print_r($qa);
echo '<br>';
ksort($qa);
print_r($qa);

echo '<h1>-----------------------------------------18--------------------------------------------------------------</h1>';
/*18. Напишите скрипт-калькулятор единого налога. Налог считается так: если вы заработали менее, чем ставка $stavka этого налога, умноженная на 30 — то платите ставку. Если же вы заработали более, чем 30*$stavka, то платите не только ставку налога, но и 5% от той суммы, на которую вы превысили 30*$stavka.*/
$zp = 100000;
$stavka = 700;
if ($zp < $stavka * 30) {
    echo 'Платите ставку ' . $stavka;
} else {
    $zp -= $stavka * 30;
    $nalog = (($zp / 100) * 5) + $stavka;
    echo 'Нужно заплатить ставку и 5 процентов от прибыли. Итог - ' . $nalog;
}

echo '<h1>-----------------------------------------19--------------------------------------------------------------</h1>';
/*19. Напишите скрипт-калькулятор оплаты за электроэнергию. Сумма считается так: если вы потратили за месяц менее 150 киловатт, то сумма считается по одной ставке $summ1 за 1 киловатт, всё, что больше 150 и меньше 300 киловатт считается по ставке $summ2, а все киловатты после 300 — по ставке $summ3.*/

$elect = 400;
$sum = 0.5;
$sum1 = 0.75;
$sum2 = 1;
$result = null;
if ($elect <= 150)
    $result = $elect * $sum;
elseif ($elect > 150 and $elect <= 300)
    $result = 150 * $sum + ($elect - 150) * $sum1;
else
    $result = 150 * $sum + 150 * $sum1 + ($elect - 300) * $sum2;
echo $result;