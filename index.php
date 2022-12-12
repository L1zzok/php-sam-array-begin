<?php

//1.	Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.
$arrRange = range(-50,50,8);

//Перемешайте элементы этого массива
shuffle($arrRange);

//2.	Выведите элементы этого массива в строку через « ** ».
$strImp = implode("**",$arrRange);

//3.	Удалите четные элементы этого массива, определите количество оставшихся
$res = array_filter($arrRange, fn($item) => $item % 2 == 0);
unset($arrRange);
count($res);

//4.	Замените все отрицательные значения положительными
for ($i = 0; $i < count($arrRange); $i++) {
    if ($arrRange[$i] < 0) {
    $arrRange[$i] = $arrRange[$i] * -1;
    }
    }
    print_r($arrRange);

//5.	Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке [-5; 10].
$arrRandom = [];
$elem = 20;
$min = -5;
$max = 15;
for($i=0; $i<= $elem; $i++){
    $arrRandom[$i] = rand($min,$max);
};

//6.	Определите количество значений в массиве arrRandom (количество повторений) 
array_count_values($arrRandom);

//7.	Определите сумму элементов массива arrRandom
$res = array_reduce($arrRandom, function($carry, $item){
    if($item >0){
        $carry += $item;
    };
    return $carry;
}, 1);

//8.	Определите произведение элементов массива arrRange, кратных 3
$res = array_reduce($arrRandom, function($carry, $item){
    if($item % 3 == 0){
        $carry *= $item;
    };
    return $carry;
}, 1);

//9.	Объедините массивы arrRange и arrRandom двумя способами
$sposob1 = $arrRange + $arrRandom;
$sposob2 =array_merge($arrRange,$arrRandom);

//10.	В массиве arrRandom удалите 2, 3 и 4 элементы
array_splice($arrRandom,2,3);

//11.	В массиве arrRandom определите количество элементов, не превышающих его среднее значение
$middle = $sum / count($arrRandom);
$res = array_filter($arrRandom, fn ($item) => $item < $middle);
count($res);

//12.	Добавьте в конец массива arrRandom элемент=1000 (2 способа)
array_push($arrRandom, 1000);
$arrRandom[] = 1000;

//14.	Сформируйте массив из переменных, представленных ниже
$apple = "черешня";
$grape = "виноград";
$strawberry = "земляника";
$pear = "груша";


//15. Выполните сортировку элементов массива по номеру дома в порядке возрастания.

$arr = [
    ["street"=> "гагарина", "house" => 7 , "flat"=>303],
    ["street"=> "елькина", "house" => 12 , "flat"=>12],
    ["street"=> "Доватора", "house" => 113 , "flat"=>24],
];
usort($arr, fn($a,$b)=> $b["house"] <=> $a["house"]);
