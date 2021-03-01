<?define("INDEX_PAGE", "Y");?>
<?define("MAIN_PAGE", true);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
/*
 * из строки
 * https://kru4ok.ru/wp/wp-content/uploads/2015/12/kru4ok-ru-vyazanye-kryuchkom-pinetki-raboty-eleny-zubkovoy-56988-480x406.jpg
 * получить строку
 * https://kru4ok.ru/wp/wp-content/uploads/2015/12/kru4ok-ru-vyazanye-kryuchkom-pinetki-raboty-eleny-zubkovoy-56988.jpg*/

$str = 'before voy-56988-480x426.jpg after before https://kru4ok.ru/wp/wp-content/uploads/2015/12/kru4ok-ru-vyazanye-kryuchkom-pinetki-raboty-eleny-zubkovoy-56988-480x406.jpg after before voy-56988-480x426.jpg after before https://kru4ok.ru/wp/wp-content/uploads/2015/12/kru4ok-ru-vyazanye-kryuchkom-pinetki-raboty-eleny-zubkovoy-56988-480x233.jpg after';
echo '<br>'.$str;

$find = '-480x';

$count = substr_count($str, $find);
echo '<br>Количество вхождений: '.$count;
while($count > 0 ) {
    $pos = strpos($str, $find, $count-1);
    if($pos) {
        echo '<br>Позиция ' . $count . ' вхождения: ' . $pos;
        $need = substr($str, $pos, 8);
        echo '<br>требуется вырезать: ' . $need;
        $str = str_replace($need, '', $str);
        echo '<br>str result: ' . $str;
    }
        $count--;
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>