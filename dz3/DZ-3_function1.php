<?php
/**
 * Created by PhpStorm.
 * User: Станислав
 * Date: 07.02.2017
 * Time: 18:58
 */
echo '<h1>--------------------------------------------------1--------------------------------------------------------------------</h1>';
/*1.	Сделайте функцию, которая возвращает куб числа. Число передается параметром.*/

function kub($kub){
    $kub = $kub ** 3;
    echo $kub;
}
kub(3);
echo '<h1>--------------------------------------------------2--------------------------------------------------------------------</h1>';

/*2.	Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются ей первым и вторым параметром.*/

function summ($a, $b){
   $result = $a+$b;
   echo $result;
}
summ(2, 5);
echo '<h1>--------------------------------------------------3--------------------------------------------------------------------</h1>';

/*3.	Сделайте функцию, которая отнимает от первого числа второе и делит на третье.*/

function alg($a, $b, $c){
    $result = ($a-$b)/$c;
    echo $result;
}
alg(100, 27, 2);
echo '<h1>--------------------------------------------------4--------------------------------------------------------------------</h1>';

/*4.	Сделайте функцию, которая на вход принимает параметр в виде массива, разворачивает массив и возвращает результат.*/
$arr = ['1', '2', '3', '4', '5', '6'];
$arr_inverted = invertArray($arr);
echo '<pre>';
print_r($arr_inverted);
echo '</pre>';
function invertArray($array)
{

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($i > $j) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
echo '<h1>--------------------------------------------------5--------------------------------------------------------------------</h1>';

/*5.Сделайте функцию, которая принимает параметром число и проверяет четное оно или нет*/
function chet($a){
    if ($a % 2 == 0){
        echo 'Четное';
    }
    else{
        echo 'Нечетное';
    }
    return;
}
$b = 5;
$fun = chet($b);
print_r($fun);
echo '<h1>--------------------------------------------------6--------------------------------------------------------------------</h1>';
/*6.Сделайте функцию, которая принимает параметром массив, а возвращает массив из четных элементов этого массива.*/
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

function mas($mas)
{
foreach ($mas as $value){
    if ($value%2==0){
        $mas1[]=$value;
    }
}
return $mas1;
}
print_r (mas($arr));
echo '<h1>--------------------------------------------------7--------------------------------------------------------------------</h1>';

/*7.Сделайте функцию, которая принимает параметром строку, а возвращает первые N символов этой строки (N – это второй параметр). Функция должна добавлять троеточие в конце возвращаемой строки.*/

$str = 'Source IT';
$n = 6;
str($str, $n);

function str($str, $n)
{
    $result = '';
    for ($i = 0;$i<=$n;$i++)
        $result.=$str{$i};
return $result;
}
echo str($str, $n);
echo '<h1>--------------------------------------------------8--------------------------------------------------------------------</h1>';

/*8.	Напишите функцию, которая в качестве параметра принимает массив, меняет у него ключи со значениями. Например $arr = array(‘php’ => ‘PHP’, ‘java’ => ‘Java’); А результатом будет array(‘PHP’ => ‘php’, ‘Java’ => ‘java’).*/

$arr = array('php_key' => 'PHP_value', 'java_key' => 'JAVA_value');

function revers($mas){
    $temp = Array();

    foreach ($mas as $key => $value){
        $temp += array($value => $key);
    }
    return $temp;
}

print_r (revers($arr));
echo '<h1>--------------------------------------------------9 исправлено--------------------------------------------------------------------</h1>';

/*9.Напишите функцию, которая будет считать сумму цифр числа переданного пользователем в функцию. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6. Также функция должна сделать проверку на корректность введения данных пользователем (т.е. число больше нуля. не пустая строка, не равно null).*/
function sum($a)
{
    $result = 0;
    for ($i = 0; $i < strlen($a); $i++) {
        if ($a < 0 || $a == null || empty($a)) {
            echo 'Ошибка';
            break;
        }
            $result += $a[$i];

    }
    echo $result;
    return;
}
$b = '3211';
sum($b);
echo '<h1>--------------------------------------------------10 исправлено--------------------------------------------------------------------</h1>';

/*10.Напишите функцию, которая возвращает число длиной $length ($length - это параметр функции, который отвечает за длину числа).*/

$length = '20';
function ret($length){
    $a = '';
   for ($i = 1; $i<=$length ;$i++){
       $result = rand(1, 9);
       $a.= $result;

   }
   return $a;
}
$res = ret($length);
echo $res . '<br>';
echo '<h1>--------------------------------------------------11 исправлено--------------------------------------------------------------------</h1>';

/*11.На основании предыдущей задачи необходимо написать функцию, которая принимает два параметра: первый - это число, которое возвращает функция в задаче №3 ($x), второй параметр - это любое ваше число ($y). Функция должна подсчитать количество вхождений $y в числе $x. Например: цифра 5 в числе 442158755745 встречается 4 раза.*/
//$res = 12321523647151;
//$as = (string)$res;
$y = 1;
function retur($as, $y)
{
    $a = strlen($as);
    echo '$a - ' . $a . '<br/>';
    $count = 0;
    for ($i = 0; $i < $a; $i++) {
        if ($as[$i] == (string)$y) {
            $count++;
        }
    }
    return $count;
}

$ret = retur($res, $y);
echo $res . '<br>' . "Число $y повторяется " . $ret . 'раза' ;
echo '<h1>--------------------------------------------------12--------------------------------------------------------------------</h1>';
/*12.Написать функцию, которая возвращает массив длиной $length, заполненный случайными числами (можно воспользоваться функцией rand).*/

$arr = array();
$var1 = mas1($arr);
print_r($var1);
function mas1($a)
{
    $length = 10;
    for ($i = 0; $i <= $length; $i++) {
        $a[] = rand(1, 9);
    }
    return $a;
}

echo '<h1>--------------------------------------------------13 исправлено--------------------------------------------------------------------</h1>';

/*13.Написать функцию, которая в качестве параметра принимает массив из задачи №4. Функция находит максимальное и минимальное значение массива и меняет их местами.*/


function mass($a)
{
    $max = $a[0];
    $min = $a[0];
    $max_index = 0;
    $min_index = 0;

    foreach ($a as $key => $value) {
        if ($max < $value) {
            $max = $value;
           $max_index = $key;
        }
        if ($min > $value) {
            $min = $value;
          $min_index = $key;
        }
    }
    $temp = $a[$max_index];
    $a[$max_index] = $a[$min_index];
    $a[$min_index] = $temp;
    return $a;
}
$arr1 = mass($var1);
print_r($arr1);
echo '<h1>--------------------------------------------------14--------------------------------------------------------------------</h1>';

/*14.Написать функцию, которая в качестве параметра принимает натуральное число n. Вычислить: 11 + 22 + .. + nn. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.*/
$a = 5;
function sum4($b)
{
    $result = array();
    $sum = 0;
    for ($i = 0; $i <= $b; $i++) {
        $result[] = $i ** 2;
        $sum += $result[$i];
    }
    echo 'квадраты чисел ' . var_dump($result) . '</br>' . 'сумма чисел ' . $sum;
    return $b;
}

echo sum4($a);
//------------------------------------------------------------------------------------------------------------------------