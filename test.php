<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
$arFields['NAME'] = 'Работы Галины Бофановой в технике двойной жаккард крючком';
$GLOBALS['AUTHOR'] = ['работа', 'работы', 'Работа', 'Работы'];

foreach($GLOBALS['AUTHOR'] as $item) {
    echo 'item: '.$item.'<br>';
    if (strpos($arFields['NAME'], $item)) {
        echo $item.' содержится в '.$arFields['NAME'].'<br>';
        $arName = explode($item, $arFields['NAME']);
        $arFields['NAME'] = trim($arName[0]);
        $arFields['PROPERTY_VALUES'][300] = trim($arName[1]);
    }
}
echo 'name: '.$arFields['NAME'].'<br>';
echo 'auth: '.$arFields['PROPERTY_VALUES'][300].'<br>';
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>