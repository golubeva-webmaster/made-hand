<?
// URL текущей страницы
function getUrl() {
    $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
    $url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
    $url .= $_SERVER["REQUEST_URI"];
    return $url;
}

// Возвращает значение свойства типа список по его id
function mariGetPropertyListValue($id_property, $code_property){
    foreach($id_property as $key=>$val){
        if(is_array($val)){
            if($val['VALUE']<>'') $result_id = $val['VALUE'];
        }
        else $result_id = $val;
        if (CModule::IncludeModule('iblock')) {
            $res = CIBlockProperty::GetPropertyEnum(
                $code_property,
                array("SORT"=>"asc"),
                array('IBLOCK_ID'=>$GLOBALS['CATALOG_IBLOCK_ID'],'ID'=>$result_id)
            );

            if ($ar_res = $res->GetNext()) {
                if ($ar_res["VALUE"]) {
                    $result = trim($ar_res["VALUE"]);
                } else {
                    $result = '';
                }
            }
        }
    }
    return $result;
}

//Печать массива, видна только marigolu
function mariPrint($arr){
    global $USER;
    if($USER->GetLogin()=='marigolu'){
        if (isset($arr))
            if (is_array($arr)) {
                echo '<pre>';
                print_r($arr);
                echo '</pre>';
            }
            else {
                echo '<pre>';
                echo $arr;
                echo '</pre>';
            }
    }
}

function mariMail($arrr)
{
    $text = '';
    if (is_array($arrr))
        if(!empty($arrr))
            foreach ($arrr as $keyy => $arr) {
                if (is_array($arr) && !empty($arr)) {
                    $text .= "\r\n".$keyy.' Array:'."\r\n";
                    foreach ($arr as $key => $ar) {
                        if (is_array($ar) && !empty($ar)) {
                            $text .= "\r\n".$key.' Array:'."\r\n";
                            foreach ($ar as $k => $v) {
                                $text .= "\r\n".$key.'       ' . $k . ' = ' . $v;
                            }
                        }
                        else $text .= "\r\n" . '   ' . $key . ' = ' . $ar;
                    }
                }
                else {
                    $text .= "\r\n" . $keyy . ' = ' . $arr;
                }
            }
        else $text .= 'Переданное значение, не массив = '.$arrr;
    mail('marishagolubeva@gmail.com', 'mariMail '.date('U'), $text);
}

// Логирование в файл
//На вход функции приходят данные для логирования второй параметр(не обязательный)- очистить файл перед записью, третий параметр(не обязательный) - путь к лог файлу.
function mariLog($var, $clear=FALSE, $path=NULL) {
    //$path = '/mariLogs/mariLog_'.date('Y-m-d').'.txt';
    if ($var) {
        $date = date('Y-m-d H:i:s')."  ";
        $result = $var;
        if (is_array($var) || is_object($var)) {
            $result = print_r($var, 1);
        }
        $result .="\n";
        if(!$path) $path = '/mariLogs/mariLog_'.date('Y-m-d').'.txt';

        if($clear)
            file_put_contents($path, '');

        fwrite($path,"a");
        @error_log($date.$result, 3, $path);
        //@error_log($date.$result, 0); // вывод записей на экран
        //mail('marishagolubeva@gmail.com', 'logging: '.$result,'');
        return true;
    }
    return false;
}
function generate_random_letters($length) {
    $random = '';
    for ($i = 0; $i < $length; $i++) {
        $random .= chr(rand(ord('a'), ord('z')));
    }
    return $random;
}
function mariGetUniqueOrderNumber(){
    $rand='0';
    // if(isset($_SESSION['SESS_SESSION_ID']))
    //     $rand .= $_SESSION['SESS_SESSION_ID'];
    // else
    $rand .= time();
    return $rand;
}

// Проставить товарам с заполненым св-ом "Ссылка на изображение" это изображение
// нужно было для товаров поставщиков.
// Если заполнено св-во "ссылка на картинку" и не заполнены детальная и превью, то заполнятся
//function mariSetElementImages()
//{
//    $path = '/var/www/agromir-ispmanager/data/www/agromir.net/logs/OnAfterIBlockElementAddHandler.txt';
//    $text = '';
//    $i=1;
//
//    $arFilter = array(
//            "IBLOCK_ID" => $GLOBALS['CATALOG_IBLOCK_ID'],
//            "!PROPERTY_BITRIX_IMG_URL" => false, // строка пустая
//            "DETAIL_PICTURE" => false,            // детальная не задана
//        );
//    $arSelect = array("ID", "NAME", "DETAIL_PICTURE", "CODE","PROPERTY_BITRIX_IMG_URL");
//    $res = CIBlockElement::getList(['SORT'=>"asc"], $arFilter, false, false, $arSelect);
//
//    while ($element = $res -> Fetch()) {
//        $text .= "\r\n".'<br>'.$i.') '.$element['NAME'];
//        $i++;
//        $arrImg = CFile::MakeFileArray($element['PROPERTY_BITRIX_IMG_URL_VALUE']);
//        $sf = CFile::SaveFile($arrImg, 'iblock');
//
//        if (intval($sf)>0) { // если сохранилось успешно
//            $text .= "\r\n".'Картинка загружена id в b_files = '.$sf;
//            // Уменьшаем картинку до размеров детальной и анонса
//            $detail = CFile::ResizeImageGet($sf, ["width"=>800, "height"=>600], 'BX_RESIZE_IMAGE_PROPORTIONAL', true, false, false);
//            $anons = CFile::ResizeImageGet($sf, ["width"=>245, "height"=>220], 'BX_RESIZE_IMAGE_PROPORTIONAL', true, false, false);
//
//            $el = new CIBlockElement;
//            if ($el->Update($element['ID'], ["DETAIL_PICTURE" => CFile::MakeFileArray($detail['src']), "PREVIEW_PICTURE" => CFile::MakeFileArray($anons['src'])])) {
//                $text .= ' изображения элемента ОБНОВЛЕНЫ!';
//            }
//        } else {
//            $text .= "\r\n".'Картинка не загружена '.$element['PROPERTY_BITRIX_IMG_URL_VALUE'];
//            $text .= "\r\n".' поэтому изображения элемента НЕ обновлены';
//        }
//    }
//}

class Request {

    public static function post($url, $params) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        //curl_setopt($ch, CURLOPT_PROXY, '177.67.82.139:8080');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec ($ch);
        if(!$result) {
            $result = curl_error($ch);
        }

        curl_close ($ch);
        return $result;
    }

}

## Создает CSV файл из переданных в массиве данных.
## @param array  $create_data  Массив данных из которых нужно созать CSV файл.
## @param string $file         Путь до файла 'path/to/test.csv'. Если не указать, то просто вернет результат.
## @return string/false        CSV строку или false, если не удалось создать файл.
## Пример вызова:               mariCreateCsvFile( $ar_big_str, '../../upload/payed_orders_to_csv/'.date('Y-m-d').'.csv', ';', "\r\n" );

function mariCreateExlFile( $create_data, $file = null){

    require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
//Multibyte function overloading in PHP must be disabled for string functions (2). (0)
///home/h903125417/h903125417.nichost.ru/docs/vendor/phpoffice/phpexcel/Classes/PHPExcel/Autoloader.php:9
///

    $document = new \PHPExcel();
    $sheet = $document->setActiveSheetIndex(0); // Выбираем первый лист в документе

    $columnPosition = 0; // Начальная координата x
    $startLine = 0; // Начальная координата y

// Формируем список
    foreach ($create_data as $key=>$catItem) {
        // Перекидываем указатель на следующую строку
        $startLine++;
        // Указатель на первый столбец
        $currentColumn = $columnPosition;

        foreach ($catItem as $value) {
            $sheet->setCellValueByColumnAndRow($currentColumn, $startLine, $value);
            $currentColumn++;
        }
    }

    $objWriter = \PHPExcel_IOFactory::createWriter($document, 'Excel5');
    $objWriter->save($file);
}

function mariCreateCsvFile( $create_data, $file = null, $col_delimiter = ';', $row_delimiter = "\r\n", $code_from, $code_to ){
    if( ! is_array($create_data) )
        return false;

    if( $file && ! is_dir( dirname($file) ) )
        return false;

    $CSV_str = ''; // строка, которая будет записана в csv файл

    // перебираем все данные
    foreach( $create_data as $row ){
        $cols = array();
        foreach( $row as $col_val ){
            $cols[] = $col_val; // добавляем колонку в данные
        }
        $CSV_str .= implode( $col_delimiter, $cols ) . $row_delimiter; // добавляем строку в данные
    }

    $CSV_str = rtrim( $CSV_str, $row_delimiter );

    if($code_from<>'' and $code_to<>'')
        $CSV_str = iconv($code_from, $code_to, $CSV_str); // mari пробую задать кодировку насильно

    if( ($file) && ($CSV_str<>'')){
        // создаем csv файл и записываем в него строку
        $done = file_put_contents( $file, "\xEF\xBB\xBF".$CSV_str );
        //mail('marishagolubeva@gmail.com','Создан файл '.date('Y-m-d H:i:s').'.csv','Отработал local/cron/payed_orders_to_scv.php'."\r\n".$CSV_str);
        return $done ? $CSV_str : false;
    }
    else
        return $CSV_str;
}
?>