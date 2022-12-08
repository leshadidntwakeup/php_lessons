<?php
/* Напишите на PHP программу, вычисляющую общую стоимость трапезы в ресторане,
 состоящей из двух гамбургеров по 4,95 доллара каждый, одного молочно-шоколадного коктейля за 1,95 доллара
 и одной порции кока-колы за 0,85 доллара. Ставка налога на добавленную стоимость составляет 7,5%,
 а чаевые без вычета налогов — 16%. */

$fullPrice = 0;
$hamburger = 4.95;
$milkshake = 1.95;
$cocaCola = 0.85;
$hamburger *= 2;
$proc = 7.5;
$tips = 16;

//считаем стоимость с учетом ставки налога
$fullPrice = $hamburger + $milkshake + $cocaCola;
$tax = $fullPrice / 100 * $proc;
$fullPrice += $tax;

//считаем стоимость с чаевыми
$procTips = $fullPrice / 100 * $tips;
$fullPrice += $procTips;

echo "Стоимость трапезы в ресторане: " . $fullPrice . "<br>\n" . "<br>\n";


/* Видоизмените программу из предыдущего упражнения, чтобы вывести счет в отформатированном виде.
 В частности, выведите сначала цену и количество каждого блюда вместе с общей стоимостью трапезы,
 а затем общую стоимость еды и напитков как без учета, так и с учетом налога на добавленную стоимость и чаевых.
Непременно выровняйте цены в выводимом счете по вертикали */


class nameOfProduct{

    public $name;
    public $price;
    public $amount;
    public $fullPrice;

}

$burger = new nameOfProduct();

$name =  $burger -> name = 'Бургер';
$price = $burger -> price = 4.95;
$amount = $burger -> amount = 2;
$fullPrice1 = $price * $amount;
echo 'Наименование товара: ' . $name . "<br>\n";
echo 'Стоимость товара: $ ' . $price . "<br>\n" ;
echo 'Количество товара: ' . $amount . "<br>\n";
echo 'Полная стоимость товара: $ ' . $fullPrice1 . "<br>\n" . "<br>\n";

$cocktail = new nameOfProduct();

$name =  $cocktail -> name = 'Милкшейк';
$price = $cocktail -> price = 1.95;
$amount = $cocktail -> amount = 1;
$fullPrice2 = $price * $amount;
echo 'Наименование товара: ' . $name . "<br>\n";
echo 'Стоимость товара: $ ' . $price . "<br>\n" ;
echo 'Количество товара: ' . $amount . "<br>\n";
echo 'Полная стоимость товара: $ ' . $fullPrice2 . "<br>\n" . "<br>\n";

$cola = new nameOfProduct();

$name =  $cocktail -> name = 'Кока-кола';
$price = $cocktail -> price = 0.85;
$amount = $cocktail -> amount = 1;
$fullPrice3 = $price * $amount;
echo 'Наименование товара: ' . $name . "<br>\n";
echo 'Стоимость товара: $ ' . $price . "<br>\n" ;
echo 'Количество товара: ' . $amount . "<br>\n";
echo 'Полная стоимость товара: $ ' . $fullPrice3 . "<br>\n" . "<br>\n";

$fullPriceFood = $fullPrice1 + $fullPrice2 + $fullPrice3;
echo 'Стоимость трапезы без учета чаявых и налога: $' . $fullPriceFood . "<br>\n";

$taxOfFood = $fullPriceFood / 100 * $proc;
$fullPriceFood += $taxOfFood;
echo 'Стоимость трапезы без учета чаявых: $' . $fullPriceFood . "<br>\n";

$tipsOfFood = $fullPriceFood / 100 * $tips;
$fullPriceFood += $tipsOfFood;
echo 'Общая стоимость трапезы: $' . $fullPriceFood . "<br>\n";


/* Напишите на РНР программу, задающую имя в переменной $first_name и фамилию в переменной $last_name.
Выведите символьную строку, содержащую имя и фамилию, разделив их пробелом. Кроме того,
выведите длину этой символьной строки. */


$first_name = 'Алексей';
$second_name = 'Морозов';
$nameOfPeople = $first_name . " " . $second_name;
$fullStr = strlen($nameOfPeople);
echo $nameOfPeople . "<br>\n";
echo 'Длинна строки = ' . $fullStr . "<br>\n";


/* Напишите на РНР программу, в которой применяются составные операции инкрементирования (++)
 и умножения с присваиванием (*=), для вывода чисел в пределах от 1 до 5, а также степеней числа 2
в пределах от 2 (2^1) до 32 (2^5). */

?>