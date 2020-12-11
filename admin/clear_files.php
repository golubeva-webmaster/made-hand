<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вычистить все файлы, у которых нет никаких связей с элементами инфоблоков");
/*
//TODO Внимание! Скрипт надо доработать, учесть связь с разделами. Если нет связи с элементами, это не значит что нужно удалять, у картинки может быть связь с разделами! В задаче этого нет, поэтому делалось без этого.


Задача №1
найти и убить файлы от удаленных товаров (или от старого сайта), которые лежат вместе с картинками товаров в одной директории на диске


Есть сайт на битриксе, в каталоге сто тысяч товаров
у каждого есть картинки две родные (PREVIEW_PICTURE и DETAIL_PICTURE)
и дополнительно могут быть поля типа файл (в том числе множественные)
задача:
вычистить все файлы, у которых нет никаких связей с элементами инфоблоков  (по факту обычно это файлы от удаленных товаров или от старого сайта)
1) нужно написать алгоритм как будешь решать
2) написать такое решение
Задачу можно реализовывать как standalone, так и используя Bitrix API

План
1) Перебрать все файлы из /upload/arr-name (где arr-name массив, для быстроты). Сформировать массив имен этих файлов.
2) По $name файла из таблицы зарегистрированных файлов вытащить его id.
3) По id находим связь с элементом ИБ. Если такой связи нет это означает, что в папке /upload/iblock/xxx
находится файл, у которого нет связи ни с одним элементом ИБ
*/
use Bitrix\Main\Loader;
Loader::includeModule('iblock');

//global $USER;
//if ($USER->GetLogin()=='admin') {
//echo 'admin';
    // Логирование в файл
    //На вход функции приходят данные для логирования второй параметр(не обязательный)- очистить файл перед записью, третий параметр(не обязательный) - путь к лог файлу.
    // function mariLog($var, $clear=FALSE, $path=NULL) {
    //     if ($var) {
    //         $date = date('Y-m-d H:i:s')."  ";
    //         $result = $var;
    //         if (is_array($var) || is_object($var)) {
    //             $result = print_r($var, 1);
    //         }
    //         $result .="\n";
    //         if(!$path)
    //             $path = dirname($_SERVER['SCRIPT_FILENAME']) . '/mariLog.txt';
    //         if($clear)
    //             file_put_contents($path, '');
    //         @error_log($date.$result, 3, $path);
    //         //@error_log($date.$result, 0); // вывод записей на экран
    //         //mail('marishagolubeva@gmail.com', 'logging: '.$result,'');
    //         return true;
    //     }
    //     return false;
    // }

//1) Перебрать все файлы из /upload/arr-name (где arr-name массив, для быстроты). Сформировать массив имен этих файлов.

    $_SERVER['DOCUMENT_ROOT'] = 'marigolu18.beget.tech/public_html';
    $path = $_SERVER['DOCUMENT_ROOT'].'/logs/delete-files.txt'; // Пишем лог
    $dir = $_SERVER['DOCUMENT_ROOT'].'/upload/iblock/';
    echo 'dir = '.$dir;
    $opendir = opendir($dir);

    $arSubDirs = ['5f0', '0e8','44c'];
    $i = 1;
    echo 'before while';
    while($subdir = readdir($opendir)) {
        echo 'in while';
        if (is_dir($dir.$subdir)
            && $subdir != '.'
            && $subdir != '..'
            && in_array($subdir, $arSubDirs) /*выбираем только из конкретных подпапок, если нужно вся /upload, закомментировать*/
        ) {
            echo "<br>"."\r\n".$i++.') '.$subdir."\r\n".'<br>';
//2) По $name файла из таблицы зарегистрированных файлов вытащить его id.
            $opensubdir = opendir($dir.$subdir.'/');
            while ($file_name = readdir($opensubdir)) {
                if($file_name != '.' && $file_name != '..')//{
                    //     $arrFileName[] = $file_name;
                    // }
                    $res = CFile::GetList([], array("FILE_NAME"=>$file_name));
                while ($res_arr = $res->GetNext()) {
                    if($res_arr['ID']){
                        $str = $res_arr['ID'].' <a href="/upload/'.$res_arr["SUBDIR"].'/'.$res_arr["FILE_NAME"].'">'.$res_arr["FILE_NAME"].'</a> ';
                        echo '<br>'.$str;
                    }
                    //else echo '<br>'.$res_arr['ID'].'<font color="red">нет в таблице b_file</font>';

//3) По id находим связь с элементом ИБ. Если такой связи нет это означает, что в папке /upload/iblock/xxx
//находится файл, у которого нет связи ни с одним элементом ИБ
                    $arFilter = array(
                        "INCLUDE_SUBSECTIONS" => "Y",
                        array(
                            "LOGIC" => "OR",
                            "DETAIL_PICTURE" => $res_arr['ID'],
                            "PREVIEW_PICTURE" => $res_arr['ID'],
                            "PICTURE" => $res_arr['ID'], //для разделов
                            //"PROPERTY_FILE_VALUE" => $res_arr['ID'], // для св-ва типа файл
                        ),
                    );
                    $res = CIBlockElement::GetList([], $arFilter, false, ["nPageSize"=>50], ["ID", "NAME"]);

                    if ($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        echo '   '. $arFields['NAME'].'.';
                    }
                    else {
                        echo '<font color="red">нет связи ни с одним элементом ИБ</font>';
                        /*CFile::Delete($res_arr['ID']);
                        mariLog("\r\n".$str.' удалено', false, $path); // логируем
                        */
                        //echo "\r\n".$str.' удалено', false, $path;
                    }

                }
            }
        }
//    }

}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
