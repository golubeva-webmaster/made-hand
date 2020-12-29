<?define("INDEX_PAGE", "Y");?>
<?define("MAIN_PAGE", true);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php

$imgSource = 'https://made-hand.ru/upload/iblock/a32/a32803318ee2f2e809d64575e629807e.jpg';?>
<br>Исходник:<br>
<img src="<?=$imgSource?>"><br><br>
<?
function makeMirrorPic($fileImg, $newFile)
{
    //------------ ОТОБРАЗИТЬ КАРТИНКУ ------------------------

    // загружаем картинку
    $source = imagecreatefromjpeg($fileImg);
    // получаем размеры картинки
    $size = getimagesize($fileImg);
    echo 'size<pre>'; print_r($size); echo '</pre>';
    echo '<br>filesize: '.filesize($fileImg);
    // определим случайно на сколько пикселей будем делать обрезку
    $randX = rand(0,2);
    $randY = rand(1,2);
    echo '<br> обрезаем по ширине на: '.$randX;
    echo '<br> обрезаем по высоте на: '.$randY;
    // создаем новое изображение
    $img = imagecreatetruecolor($size[0]-$randX, $size[1]-$randY);
    // наносим попиксельно изображение в обратном порядке
    for ($x = 0; $x <= $size[0]-$randX; $x++) {
        for ($y = 0; $y <= $size[1]-$randY; $y++) {
            if(($x == 0 && $y == 0) || ($x == 1 && $y == 1) || ($x == 3 && $y == 3))
                $color= '#f44336';
            else
                $color = imagecolorat($source, $x, $y);
            imagesetpixel($img, $size[0]-$randX - $x, $y, $color);
        }
    }
    // сохраняем изображение
    imagejpeg($img, $newFile);

    //------------ РЕСАЙЗ КАРТИНКИ ------------------------
    $arr = getimagesize($newFile);

    //Изменяем размеры картинки
    $arFile = CFile::MakeFileArray($fileImg);
//echo '<br>MakeFileArray<pre>'; print_r($arFile); echo '</pre>';


    $arrResizeParams = [
        "WIDTH" => $arr[0]-$randX,
        "HEIGHT" => $arr[1]-$randY,
        "METHOD" => "resample",
        'COMPRESSION' => 75,
    ];
    $arNewFile = CIBlock::ResizePicture(CFile::MakeFileArray(CFile::SaveFile(CFile::MakeFileArray($arFile['tmp_name']),'tmp')), $arrResizeParams); // сольет промежуточные сторонние фотки в папку tm
//    if(is_array($arNewFile)) {
//        echo '<br>Новый файл после ресайза<pre>'; print_r($arNewFile); echo '</pre>';
//    }
//    else
//    {
//        //Можно вернуть ошибку
//        $APPLICATION->throwException("Ошибка масштабирования изображения в свойстве \"Файлы\":".$arNewFile);
//        return false;
//    }

    echo '<br>filesize: '.filesize($newFile);

    // очищаем память
    imagedestroy($img);
    return $newFile;
}

$imgRes = makeMirrorPic($imgSource, 'testNew.jpg');?>
<br>Получилось:<br>
<img src="<?=$imgRes?>"><br><br>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>