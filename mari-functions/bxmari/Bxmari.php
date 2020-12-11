

<?php
/*Класс для работы с разделами и элементами битрикса
Class Bxmari*/

Class Bxmari{
    /**
     * @param array $arParams
     * @return array|bool
     */

    public static function transliterate($value) {
        $converter = array(
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
        );
        $value = mb_strtolower($value);
        $value = strtr($value, $converter);
        $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
        $value = mb_ereg_replace('[-]+', '-', $value);
        $value = trim($value, '-');
        return $value;
    }

    public static function getFilesize($url) {
        static $regex = '/^Content-Length: *+\K\d++$/im';
        if (!$fp = @fopen($url, 'rb')) {
            return false;
        }
        if (isset($http_response_header) &&
            preg_match($regex, implode("\n", $http_response_header), $matches)) {
            return (int)$matches[0];
        }
        return strlen(stream_get_contents($fp));
    }

    // Сохранить изображение в базе сайта
    public static function saveFile($ar)
    {
        $arImage = [
            "name" => $ar['name'],
            "tmp_name" => $ar['path'],
            "type" => $ar['type'],//'image/jpeg',//$rash[count($rash) - 1], //!
            "del" => "Y",
            "MODULE_ID" => "iblock",
            "size" => self::getFilesize($ar['path'])
        ];

        $fid = CFile::SaveFile($arImage, "iblock");

        return CFile::MakeFileArray($fid);
    }

    // Если нет раздела - cоздать, если есть - обновить
    public static function createSection($arFields = []){
        if(CModule::IncludeModule("iblock")) {
                $bs = new CIBlockSection;

                $arFilter = ['NAME' => $arFields['NAME'], 'IBLOCK_ID' => $arFields['IBLOCK_ID'], 'SECTION_ID'=> $arFields['IBLOCK_SECTION_ID']];

                $res = $bs->GetList([], $arFilter, false, ["ID"], false);
                if(!$ar = $res->GetNext()) { // если еще нет раздела с таким названием
                    $ID = $bs->Add($arFields);
                    $res = ($ID > 0);
                    echo '<br>В разделе id: '.$arFields['IBLOCK_SECTION_ID'].' нет подраздела '.$arFields['NAME'];
                    echo '<br>создан раздел name = '.$arFields['NAME'].' id = ' . $ID;
                }
                else {
                    $res = $bs->Update($ar['ID'], $arFields);
                    $ID = $ar['ID'];
                    echo '<br>В разделе id: '.$arFields['IBLOCK_SECTION_ID'].' есть подраздел '.$arFields['NAME'];
                    echo '<br>обновлен раздел name = ' . $arFields['NAME'] . ' id = ' . $ID;
                }

                if (!$res)
                    echo '<br>ошибка при создании/обновлении раздела: '.$bs->LAST_ERROR;

                return $ID;
        }
    }    
    
    // Города Если нет раздела - cоздать
    public static function createSectionCity($arFields = []){
        if(CModule::IncludeModule("iblock")) {
            $bs = new CIBlockSection;

            $arFilter = ['NAME' => $arFields['NAME'], 'IBLOCK_ID' => $arFields['IBLOCK_ID'], 'IBLOCK_SECTION_ID'=> $arFields['IBLOCK_SECTION_ID']];

            echo '<br>создается раздел Город arFilter:<pre>'; print_r($arFilter); echo '</pre>';

            $res = $bs->GetList([], $arFilter, false, ["ID"], false);
            if(!$ar = $res->GetNext()) { // если еще нет раздела с таким названием
                $ID = $bs->Add($arFields);
                $res = ($ID > 0);
                echo '<br>создан раздел name = '.$arFields['NAME'].' id = ' . $ID;
            }

            if (!$res)
                echo '<br>ошибка при создании/обновлении раздела: '.$bs->LAST_ERROR;

            return $ID;
        }
    }


    /**
     * @param array $arParams
     * @return array|bool
     */
    public static function createElement($arParams = []){}

    /*
     *     // Инфа по секции
    public static function getSectionInfoForCatalog($sectionId)
    {

        try {

            \Bitrix\Main\Loader::includeModule("iblock");

        } catch (\Bitrix\Main\LoaderException $e) {
        }

        $by = "ID";
        $order = "ASC";
        $arResult = false;

        $arFilter = ['IBLOCK_ID' => CATALOG_IBLOCK_ID, "ID" => $sectionId];
        $db = CIBlockSection::GetList([$by => $order], $arFilter, false, ['UF_DESCRIPTION']);
        if ($arFields = $db->GetNext()) {
            $arResult = [
                'NAME' => $arFields['NAME'],
                'UF_DESCRIPTION' => $arFields['UF_DESCRIPTION'],
            ];
        }
        return $arResult;

    }
        // Возвращает true если в секции есть подразделы, false - если их нет
    public static function sectionHasSubSections($sectionId)
    {

        try {

            Loader::includeModule("iblock");

            $arFilter = ['IBLOCK_ID' => CATALOG_IBLOCK_ID, 'SECTION_ID' => $sectionId, "ACTIVE" => "Y", "GLOBAL_ACTIVE" => "Y"];
            $db_list = CIBlockSection::GetList([], $arFilter, true);
            if ($ar_result = $db_list->GetNext()) {
                return true;
            } else {
                return false;
            }

        } catch (\Bitrix\Main\LoaderException $e) {
        }

        return false;

    }


    // Возвращает ID секции для вывода списка разделов
    public static function getSectionIdForNav($sectionId)
    {

        try {

            Loader::includeModule("iblock");

            $arFilter = ['IBLOCK_ID' => CATALOG_IBLOCK_ID, 'ID' => $sectionId, "ACTIVE" => "Y", "GLOBAL_ACTIVE" => "Y"];
            $db_list = CIBlockSection::GetList([], $arFilter, true);
            if ($ar_result = $db_list->GetNext()) {
                if ($ar_result['DEPTH_LEVEL'] == 1) {

                    if (self::sectionHasSubSections($sectionId)) {
                        return $sectionId;
                    } else {
                        return false;
                    }

                } else {

                    if (self::sectionHasSubSections($sectionId)) {
                        return $sectionId;
                    } else {
                        return $ar_result['IBLOCK_SECTION_ID'];
                    }


                }
            }

        } catch (\Bitrix\Main\LoaderException $e) {
        }

        return false;

    }
*/
}
?>

