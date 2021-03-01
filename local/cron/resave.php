<?php
/*
 * Выборка 10ти элементов с пустым св-вом MORE_PHOTO
 * и заполнение этого св-ва картинками из тела */
$_SERVER['DOCUMENT_ROOT'] = '/home/m/marigolu18/marigolu18.beget.tech/public_html';
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$ID =  	57907;//53855;
$text = $mailtext = '';
global $USER;

function getFileIdBySrc($strFilename){
    $strUploadDir = '/'.\Bitrix\Main\Config\Option::get('main', 'upload_dir').'/';
    echo '<br>strUploadDir = '.$strUploadDir;
    $strFile = substr($strFilename, strlen($strUploadDir));
    echo '<br>strFile = '.$strFile;
    $strSql = "SELECT ID FROM b_file WHERE CONCAT(SUBDIR, '/', FILE_NAME) = '{$strFile}'";
    return \Bitrix\Main\Application::getConnection()->query($strSql)->fetch()['ID'];
}

\Bitrix\Main\Loader::IncludeModule("iblock");
$arSelect = Array("ID", "DETAIL_TEXT", "NAME", "DETAIL_PAGE_URL", "PROPERTY_MORE_PHOTO");
$arFilter = Array(	"IBLOCK_ID"=>48,
    "ACTIVE_DATE"=>"Y",
    "ACTIVE"=>"Y",
    //"ID" => $ID,
    "PROPERTY_MORE_PHOTO" =>false
);
$res = CIBlockElement::GetList(Array("RAND" => "ASC"), $arFilter, false, Array("nPageSize"=>5), $arSelect);

while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();

    //обновим элемент
    $el = new CIBlockElement;
    $arLoadProductArray = Array(
        "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
        "ACTIVE"         => "Y",            // активен
        "DETAIL_TEXT"    => $arFields['DETAIL_TEXT'],
    );

    $text .= '<a target="_blank" href="'.$arFields["DETAIL_PAGE_URL"].'">'.$arFields['NAME'].'</a><br>';

    $mailtext .= $arFields['NAME'].' - https://www.made-hand.ru'.$arFields["DETAIL_PAGE_URL"]."\r\n";

    if(strpos($arFields["DETAIL_TEXT"], '/upload/medialibrary/')){
        $arFirst = explode('/upload/medialibrary/', $arFields["DETAIL_TEXT"]);
        for ($i = 1; $i < count($arFirst); $i++) {
            $it = explode('"', $arFirst[$i]);
            $strFilename = '/upload/medialibrary/'.$it[0];
            $imgId[] = getFileIdBySrc($strFilename);
        }
    }

    CIBlockElement::SetPropertyValueCode($arFields['ID'], "MORE_PHOTO", $imgId);

}
echo $text;
//mail('golubeva.webmaster@gmail.com', 'Result of resave '.date('U'), $mailtext);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php');
?>
