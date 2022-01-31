<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_hw_4_Maruzhenko</title>
</head>
<body>

<?php

// ---------------------------------------Task 1
function task1($str){
    echo '<strong>Входная строка: </strong>' . $str . '<br>';
    return ucwords($str);
}

echo '<strong>Задача 1.</strong><br><br>';
echo '<strong>Выходная строка: </strong>' . task1('london is the capital of great britain.');
echo '<hr>';

// ---------------------------------------Task 2
function task2($str){
    echo '<strong>Входная строка: </strong>' . $str . ' (слово css - обёрнуто в тег "b") <br>';

    $string = strip_tags($str);
    $arr = explode(' ', $string);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    return $string;
}

echo '<strong>Задача 2.</strong><br><br>';
echo '<strong>Выходная строка: </strong>' . task2("html <b>css</b> php") . ' (в строке тегов нет).';
echo '<hr>';

// ---------------------------------------Task 3
function task3($str){
    echo '<strong>Входная строка: </strong>' . $str . '<br>';

    $arr = explode(' ', $str); // строка в массив
    shuffle($arr); // перемешиваем массив

    return $string = implode(' ', $arr); // лепим строку из массива и возвращаем
}

echo '<strong>Задача 3.</strong><br><br>';
echo '<strong>Выходная строка: </strong>' . task3('Мороз и солнце - день чудесный!');
echo '<hr>';

// ---------------------------------------Task 4
function task4(){
    $currentDate = getdate();
    $month = $currentDate['mon'];
    $year = $currentDate['year'];

    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

echo '<strong>Задача 4.</strong><br><br>';
echo '<strong>В текущем месяце: </strong>' . task4() . ' дн.';
echo '<hr>';

// ---------------------------------------Task 5
function task5(){
    echo date("Y-m-d") . '<br>';
    echo date("d.m.Y") . '<br>';
    echo date("d.m.y") . '<br>';
    echo date("G:i:s") . '<br>';
}

echo '<strong>Задача 5.</strong><br><br>';
echo task5();
echo '<hr>';

// ---------------------------------------Task 6
function task6(){
    $date = '2025-12-31';
    echo 'Исходная дата: ' . $date . '<br>';
    echo '+ 2 дня: ' . date("Y-m-d", strtotime('+ 2 day', strtotime($date))) . '<br>';
    echo '+ 1 месяц и 3 дня: ' . date("Y-m-d", strtotime('+ 1 month 3 day', strtotime($date))) . '<br>';
    echo '+ 1 год: ' . date("Y-m-d", strtotime('+ 1 year', strtotime($date))) . '<br>';
    echo '- 3 дня: ' . date("Y-m-d", strtotime('- 3 day', strtotime($date))) . '<br>';
}

echo '<strong>Задача 6.</strong><br><br>';
echo task6();
echo '<hr>';

// ---------------------------------------Task 7
function task7($str){
    echo '<strong>Входная строка: </strong>' . $str . '<br>';
    $regexp = '/[\d]/';

    return $newStr = preg_replace($regexp, '', $str);
}

echo '<strong>Задача 7.</strong><br><br>';
echo '<strong>Выходная строка: </strong>' . task7('1a2b3c4b5d6e7f8g9h0');
echo '<hr>';

// ---------------------------------------Task 8
function task8($str){
    echo '<strong>Даны числа: </strong>' . $str . '<br>';
    $arr = explode(', ', $str);

    return max($arr);

}

echo '<strong>Задача 8.</strong><br><br>';
echo '<strong>Максимальное число: </strong>' . task8('4, -2, 5, 19, -130, 0, 10');
echo '<hr>';


// ---------------------------------------Task 9
function task9($min, $max){
    return rand($min, $max);
}

echo '<strong>Задача 9.</strong><br><br>';
$min = 1;
$max = 100;
echo '<strong>Случайное число от ' . $min . ' до ' . $max . ' : </strong>' . task9($min, $max);
echo '<hr>';

// ---------------------------------------Task 10
function task10(){
    $arr = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье'
    ];


$date = localtime(time(), true);
$wday = (!$date['tm_wday']) ? 7 : $date['tm_wday'];

return $arr[$wday];
}

echo '<strong>Задача 10.</strong><br><br>';
echo '<strong>Текущий день недели: </strong>' . task10();
echo '<hr>';

// ---------------------------------------Task 11
function task11($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++){
        if(is_array($arr[$i])){
            for($y = 0; $y < count($arr[$i]); $y++){
                $sum += $arr[$i][$y];
            }
        }else{
            $sum += $arr[$i];
        }

    }
    return $sum;
}
echo '<strong>Задача 11.</strong><br><br>';
echo '<strong>Сумма элементов массива = </strong>' . task11([100, [1, 2, 3], [4, 5, 6],[6], 7, 8, 9]);
echo '<hr>';

// ---------------------------------------Task 12
function task12($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    $newArr = [];
    array_push($newArr, $arr[0]);

    for ($i = 0; $i < count($arr); $i++){
        $var = $arr[$i];
        if(!in_array($var, $newArr)){
            array_push($newArr, $var);
        }
    }
    return $string = implode(', ', $newArr);
}

echo '<strong>Задача 12.</strong><br><br>';
echo '<strong>Элементы массива без дублей = </strong>' . task12([1, 1, 1, 2, 2, 2, 2, 3]);
echo '<hr>';


// ---------------------------------------Task 13
function task13(){
    $arr = [
        'index' => 'Home',
        'about' => 'About',
        'services' => 'Services',
        'catalog' => 'Catalog',
        'contacts' => 'Contacts'
    ];

    echo '<ul>';
    foreach($arr as $key => $value){
        echo '<li><a href=' . $key .'.php>' . $value . '</a></li>';
    }
    echo '</ul>';
}

echo '<strong>Задача 13.</strong><br><br>';
task13();
echo '<hr>';

// ---------------------------------------Task 14
function task14($count){
    echo 'Выводится ' . $count . ' красных квадратов размером 500 х 500 px на случайных позициях.<br><br>';
    echo '<div style="background-color: black; 
                      width: 500px; 
                      height: 500px; 
                      position: relative">';
    for($i = 1; $i <= $count; $i++) {
        $x = rand(0, 450);
        $y = rand(0, 450);
        echo '<div style="background-color: red; 
                          width: 50px; 
                          height: 50px;
                          position: absolute; 
                          margin-left: '. $x .'px; 
                          margin-top: '. $y .'px;
                          border: 1px solid gold">';
        echo '</div>';
    }
    echo '</div>';
}

echo '<strong>Задача 14.</strong><br><br>';
task14(50); // меняйте количество квадратов и развлекайтесь!
echo '<hr>';

// ---------------------------------------Task 15
function task15($str){
    echo '<strong>Входная строка: </strong>' . $str . '<br>';
    $arr = [];
    $pos = 0;
    $len = 1;
    $fullLen = 0;
    for ($i = 0; $i < strlen($str); $i++){
        $subStr = substr($str, $pos, $len);
        $fullLen += $len;
        $len += 1;
        $pos += $len - 1;
        array_push($arr, $subStr);
        if ($fullLen >= strlen($str)) {
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
            break;
        }
    }
}

echo '<strong>Задача 15.</strong><br><br>';
task15('1234567890');
echo '<hr>';

// ---------------------------------------Task 16
function task16($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $sum = 0;
    $string = implode(',', $arr);
    $subStr_count = substr_count($string, '0'); // количество вхождений подстроки
    if($subStr_count < 2){
        $msg = 'Ошибка. В массиве меньше двух нулей. ';
        return $msg;
    }
    $firstPos = (strpos($string, '0')); // первое вхождение
    $lastPos = (strripos($string, '0')); // последнее вхождение
    $newString = substr($string, ($firstPos + 2), ($lastPos - $firstPos - 3) );
    $newArr = explode(',', $newString);
    foreach ($newArr as $val){
        $sum += (int)$val;
    }
    return $sum;
}

echo '<strong>Задача 16.</strong><br><br>';
echo '<strong>Сумма элементов между первым и последним нулём = </strong>' . task16([1,8,0,13,76,8,7,0,22,0,2,3,2]);
echo '<hr>';


// --------------------------------------- 
echo '<strong>По задачам 17, 18, 19, 20 вопросов нет, но не успеваю по времени. Допилю позже. </strong><br><br>';


?>



</body>
</html>