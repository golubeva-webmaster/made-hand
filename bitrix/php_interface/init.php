<?php

// Туризм
$GLOBALS['WORDS_NEWS_STOP'] = ['авари', 'трагеди', 'крушени', 'болезн', 'катастроф','гибел']; // стоп-слова для Туристических новостей
$GLOBALS['REGIONS_IBLOCK_ID'] = 24;

// Рукоделие

// слова для Виды рукоделий Инструмент
$GLOBALS['WORDS_INSTRUMENT'] = [
    '159' =>   ['крючок', 'крючк', 'крючек', 'крючёк','мотив','филейн'],
    '160' => ['спиц'],
];
// слова для Виды рукоделий Сезон
$GLOBALS['WORDS_SEASON'] = [
    '161' => ['зима', 'зимн', 'зиму','пальто','свитер','снуд','тепл'],
    '162' => ['весна', 'весенн', 'весну','шаль','берет'],
    '166' => ['лето', 'летн','купальник','топ','майка','сарафан','ажур','кружевн','шляп','панам'],
    '165' => ['осень', 'осенн','шарф']
];
// слова для Виды рукоделий Вид узора
$GLOBALS['WORDS_UZOR'] = [
    '167' => ['мотив', 'матив'],
    '168' => ['аранами','араны', 'косами',' коса '],
    '169' => ['жаккард','жакард','жокард','жоккард','норвежск'],
    '170' => ['ажур'],
    '171' => ['филейн'],
    '212' => ['бабоч'],
    '213' => ['кайм','бордюр'],
    '214' => ['бахром'],
    '246' => ['ирланд'],
    '252' => ['цветн'],
    '256' => ['миссони','мисони','зигзак'],
    '257' => ['сердеч','сердц'],
    '258' => ['тунис'],
    '259' => ['рельеф','вафельн','жемчужн','соты','кольчуг','плетен','фактурн'],
    '260' => ['интарси'],
    '261' => ['лист','веточк'],
    '262' => ['шишеч','шишк','узелк','нупп'],
    '263' => ['резинк'],
    '264' => ['бриош'],
	'265' => ['фриформ'],
	'266' => ['амигуруми'],
	'269' => ['африканский цветок'],
	'326' => ['двусторон','двухсторон'],
	'327' => ['объемн'],
];
// слова для Виды рукоделий Кому
$GLOBALS['WORDS_SEX'] = [
    '172' => ['женск', 'платье','юбк','купальник','пальто','болеро','пончо','туника','блузка','сарафан','шаль','сумк','сумочк'], // женщинам
    '173' => ['мужск', 'мужчин'], // мужчинам
    '174' => ['детск','детей','игрушк','пинетки','мальч','девочк','амигуруми','малыш','роддом'], // детям
    '170' => ['собак','кошк','кошек','кошечк'],// животным
];
// слова для Праздники
$GLOBALS['WORDS_CELEBRATION'] = [
    '163' => ['новогодн','елочн','снежин','снегов','дед мороз'],
    '164' => ['валентинк','сердеч','влюблён','влюблен'],
    '267' => ['23 февраля','защитник','23-е'],
    '268' => ['8 марта','8-е','восьмое'],
    '270' => ['пасх','кулич','цыпл','курочк','куриц','петуш','путух','наседк','яйца','яичк','яйцо'],
    '271' => ['рождеств','ангел'],
    '321' => ['хэллоуин','хэлоуин','хеллоуин','хелоуин','паук','паутина','летучая мыш','ведьм'],
];
// слова для Виды рукоделий "Тип материала"
$GLOBALS['WORDS_MATERIAL_TYPE'] = [
    '324' => ['видео'], //Видео-урок
    '253' => ['урок','МК','мастер-класс','мастер класс'], // МК
    '254' => ['описание'],//описание
    '255' => ['схем','узор'], //Схема
];
// св-во ВИд изделия
$GLOBALS['WORDS_VID'] = [
    '176' => ['вареж'],
    '177' => ['перчат'],
    '178' => ['берет','беретик'],
    '179' => ['шапк','шапочк'],
    '180' => ['шляп','шляпка'],
    '181' => ['кепк','кепи','кепочка'],
    '182' => ['чалм','повязк'],
    '183' => ['панам'],
    '184' => ['капор'],
    '185' => ['косынк'],
    '186' => ['митенки','митенок','напульсник','нарукавник'],
    '188' => ['зонт'],
    '189' => ['болеро'],
    '190' => ['кофт'],
    '191' => ['пальто','пальтишк'],
    '192' => ['жакет'],
    '193' => ['кардиган'],
    '194' => ['блузк','блуза','блузон'],
    '195' => ['двойк'],
    '196' => ['шуба','шубу'],
    '197' => ['пуловер'],
    '198' => ['купальник','бюстье','бикини','лифов'],
    '199' => ['носк','носочк','чулк','сапог','сапожк','стельк'],
    '247' => ['тапоч','тапок','тапк','балетки'],
    '248' => ['гетр'],
    '249' => ['гольф'],
    '250' => ['следк'],
    '200' => ['туник'],
    '201' => ['плать'],
    '202' => ['сарафан'],
    '203' => ['костюм'],
    '204' => ['джемпер'],
    '205' => ['свитер','худи'],
    '206' => ['сумк','сумочк'],
    '207' => ['клатч'],
    '208' => ['рюкза'],
    '209' => ['жилет','безрукавк'],
    '210' => ['топ'],
    '211' => ['майк'],
    '215' => ['накидк','пелерин'],
    '216' => ['шаль','шали','шалей'],
    '217' => ['пончо'],
    '218' => ['ворот'],
    '219' => ['платок','платк'],
    '220' => ['бактус'],
    '221' => ['палантин'],
    '222' => ['снуд'],
    '223' => ['шарф'],
    '224' => ['манишк'],
    '225' => ['капор','капюшон'],
    '226' => ['шорт'],
    '227' => ['брюк'],
    '228' => ['комбинезон'],
    '229' => ['юбк','юбочк'],
    '230' => ['плед','одеял'],
    '231' => ['покрывал'],
    '232' => ['подуш','наволоч'],
    '233' => ['игрушк','амигуруми'],
    '234' => ['штор'],
    '235' => ['скатерт'],
    '236' => ['салфет'],
    '237' => ['прихват','рукавичка'],
    '238' => ['подставк'],
    '241' => ['ковр','ковер'],
    '242' => ['чехол','сидушк'],
    '243' => ['пинет','башмачк','сандал','кеды','туфе'],
    '244' => ['конверт'],
    '245' => ['комплект'],
    '328' => ['бусы','колье'],
];
// слова для Виды рукоделий "Что"
$GLOBALS['WORDS_TOY'] = [
    '272' => ['заяц', 'зайчи','зайчон','зайц','зайк','кролик'],
    '273' => ['медве','мишк','панд','мишутка','коала'],
    '274' => ['черепа'],
    '275' => ['жираф'],
    '276' => ['бегемот'],
    '277' => ['лошад','зебр','конь','ослик','единоро'],
    '278' => ['мышк','мышь','крыс','мышат','маус','мышонок','мышонк','хомяк'],
    '279' => ['крокодил'],
    '280' => ['кукл','кукол','барби','пупс'],
    '281' => ['сладост','пирожн','чайник','ананас','арбуз','пельмен','печень','яични','морожен','репк','фрукты','овощи','макарон','клубни','тортик','авокадо','пончик','кекс'],
    '282' => ['лягуш'],
    '283' => ['птичк','утен','пингви','жар-','синич','птенц','лебед','попуг','фламинго','аист','энгри','чайка'],
    '284' => ['слон'],
    '285' => ['ежик','ёжик'],
    '286' => ['поросен','свинь','пятачок','хрюш','свинк','хрюн','поросят'],
    '287' => ['овечк','коза','козочк','ягнен','козле','баран','бараш'],
    '288' => ['осьмино','медуз'],
    '289' => ['тигр'],
    '293' => ['левка','лёвк','львен','левушк',' лев,',' лев '],
    '294' => ['котик','Леопольд','кошеч','котенок','коты','китти','кошк','котам','kitti','китти','кот '],
    '296' => ['гном'],
    '297' => ['машинк','машина','машину','ракет','вертол','самол'],
    '298' => ['динозавр','драко'],
    '300' => ['коров'],
    '301' => ['собак','собач','такс','пудел','волк','волч','щенок','песик','пёсик','мопс','пёс '],
    '302' => ['змея','змейк','гусениц','змеюш'],
    '303' => ['обезьян','мартыш'],
    '304' => ['миньон','смешарик','нюша','лосяш','симпсон','Южного Парка','спанч','инопланет','лунтик','монстр','тоторо','наруто','Мурлок','Warcraft','покемон'],
    '305' => ['мячик','смайлик'],
    '306' => ['рыбк','рыба','морская звезда'],
    '307' => ['насеком','жучк','пчелк','пчел','червя'],
    '308' => ['олень','оленен','оленя','лось','лосяш'],
    '309' => ['кактус','цветоч','цветик','ромашк','подсолн','цветы','нарцис','цветок','цветов','розы','роза','лилия'],
    '310' => ['ангел'],
    '311' => ['пальчиков'],
    '312' => ['лиса','лисичка','лисенок','лиска','лисы'],
    '313' => ['снежин'],
    '314' => ['снеговик','снегович'],
    '315' => ['деда мороз, дед мороз, снегурочк', 'Санта','Клаус'],
    '316' => ['колокольч'],
    '317' => ['сова','сову','совы','совята'],
    '318' => ['петуш','петух'],
    '319' => ['яйца','яичк','яйцо'],
    '320' => ['кулич'],
    '322' => ['вязаная елочка','новогодняя елочка','рождественская елочка','ёлка',' елка',' елки','ёлки'],
    '325' => ['мухомор','гриб'],
    '330' => ['курочк','куриц','наседк'],
    '331' => ['цыпл','цыпа'],
    '332' => ['бык','бычок','бычка','бычок'],

    '291' => ['ёлка','новогодн','ёлку','игрушки на елку'],
];

// слова для Виды рукоделий "Уровень сложности"
$GLOBALS['LEVEL'] = [
    '323' => ['прост', 'начинающ','нович'],
];
$GLOBALS['AUTHOR'] = ['работа', 'работы', 'Работа', 'Работы'];
$GLOBALS['WORDS_NAME_DEL'] = ['2006', '2007', '2008', '2009','2010', '2011', '2012', '2013','2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021','&','amp;','quot;','Вязание для женщин. '];
$GLOBALS['WORDS_NAME_STOP'] = ['Подборка','подборк','дайджест','ВИДЕО:','итоги конкурса','прием работ','Зайка Лулу крючком','Пупс в костюме лисенка ']; // если в названии есть, не сохранять такой элемент
$GLOBALS['WORDS_DETAIL_STOP'] = ['Читать дальше']; // если в описании есть, не сохранять такой элемент
$GLOBALS['WORDS_DEL_FROM_DETAIL_TEXT'] = ['<noscript>','</noscript>','podborki','https://kru4ok.ru/images/lazy2.png',
    'Здесь должно загрузиться видео, подождите или обновите страницу.',
    '<p></p>', '<p>&nbsp;</p>', '<p> </p>',
    '<!-- Quick Adsense WordPress Plugin: http://quickadsense.com/ -->',
    'https://money.yandex.ru/quickpay/shop-widget?writer=selle'

    ]; // если в описании есть, удалить

//----------------------------------------------- СЛУЖЕБНЫЕ ФУНКЦИИ ------------------------------------------------
function transliterate($value) {
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

function mariMail($arrr)
{
    $text = '';
    if (is_array($arrr))
        if(!empty($arrr))
            foreach ($arrr as $keyy => $arr) {
                if (is_array($arr) && !empty($arr)) {
                    $text .= "\r\n".$keyy.'    Array:'."\r\n";
                    foreach ($arr as $key => $ar) {
                        if (is_array($ar) && !empty($ar)) {
                            $text .= "\r\n".$key.'       Array:'."\r\n";
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
    mail('marishagolubeva@gmail.com', 'mariMail made-hand init'.date('U'), $text);
}

function getProperty($arWords, $element_name){
    $flag = false;
    $name = mb_strtolower($element_name); // было strtolower

    foreach($arWords as $key=>$val)
		if(is_array($val))
			foreach($val as $word) {
				if (stripos($name, $word) !== false) {
					$flag = true;
					return $key;
				}
			}
		else
			if (stripos($name, $val) !== false) {
				$flag = true;
				return $key;
			}
}

function getPreviewText($detailText){
    $arrP = explode('.',strip_tags($detailText));   // убрать html, разбить на массив
    $tmp = trim($arrP[0].'. '.$arrP[1]);               // взяли первые 2 предложения
    $tmp = substr($tmp, 0, strrpos($tmp, ' ')); //убрать последний пробел
    $tmp = str_replace('<br>','', $tmp);
    if(strlen($tmp) > 145){
        $tmp = substr($tmp, 0, 145).'...';
    }
    return $tmp;
}
//----------------------------------------------- ELEMENTS ---------------------------------------------------------

AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("Elements", "OnBeforeIBlockElementAddHandler"));
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("Elements", "OnBeforeIBlockElementUpdateHandler"));

class Elements
{
    function OnBeforeIBlockElementUpdateHandler(&$arFields){
        if($arFields['IBLOCK_ID'] == 48 ) {

            // --------------------- заполнить св-во "Что" ------------------------

            if ($arFields['PROPERTY_VALUES'][301][0] == '')
                $arFields['PROPERTY_VALUES'][301] = getProperty($GLOBALS['WORDS_TOY'], $arFields['NAME']);

            // --------------------- ОПИСАНИЕ ДЛЯ АНОНСА --Перестанет иметь смысл после пере-заливки каталога. У всех будет описание по созданию

            if($arFields['PREVIEW_TEXT'] == ''){
                $arFields['PREVIEW_TEXT'] = getPreviewText($arFields['DETAIL_TEXT']);
            }
        }
    }

    function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        //arFields["RESULT"] ID элемента
        $arFields['CODE'] = transliterate($arFields['NAME']);

        if($arFields['IBLOCK_ID'] == 48 ) {

            $arFields['CODE'] = $arFields['CODE'].'_'.rand(1,1000); // уникальность символьного кода

            // ----------------- НАЗВАНИЕ -----------------------

			// Деактивировать элементы с такими словами в названии
            foreach($GLOBALS['WORDS_NAME_STOP'] as $word) {
                if (mb_stripos($arFields['NAME'], $word)){
					global $APPLICATION;
					$APPLICATION->throwException("Не сохраняем из-за стоп-слов");
                    $arFields['ACTIVE'] = 'N';
                    return false;
				}
            }

            // Убрать из названия год
            foreach($GLOBALS['WORDS_NAME_DEL'] as $word)
                if (stripos($arFields['NAME'], $word))
                    $arFields['NAME'] = str_replace($word,'',$arFields['NAME']);

            $arFields['NAME'] = explode('          ', $arFields['NAME'])[0];

            // ---------------------- Вытаскиваем св-ва из Названия ------------------------------

            // заполнить св-во "Автор", если в названии есть слова, вырезать из названия Автора
            foreach($GLOBALS['AUTHOR'] as $item) {
                if (stripos($arFields['NAME'], $item)) {
                    $arName = explode($item, $arFields['NAME']);
                    $arFields['NAME'] = trim($arName[0]);
                    $arFields['PROPERTY_VALUES'][300] = trim($arName[1]);
                }
            }
            // Если в названии присутствует "крючком" или "спицами", выставляем св-во Инструмент
            if($arFields['PROPERTY_VALUES'][286][0] == '')
                $arFields['PROPERTY_VALUES'][286] = getProperty($GLOBALS['WORDS_INSTRUMENT'], $arFields['NAME']); //159 крючок, 160 спицы
            // Если в названии присутствует "зимн" или "летн", выставляем св-во Сезон
            if($arFields['PROPERTY_VALUES'][287][0] == '')
                $arFields['PROPERTY_VALUES'][287] = getProperty($GLOBALS['WORDS_SEASON'], $arFields['NAME']);
            // Узор
            if($arFields['PROPERTY_VALUES'][289] == '')
                $arFields['PROPERTY_VALUES'][289] = getProperty($GLOBALS['WORDS_UZOR'], $arFields['NAME']);
            // Принадлежность полу
            if($arFields['PROPERTY_VALUES'][290][0] == '')
                $arFields['PROPERTY_VALUES'][290] = getProperty($GLOBALS['WORDS_SEX'], $arFields['NAME']); //172 женщ, 173 мужч, 174 дети, 175 животн
			// Праздники
            if($arFields['PROPERTY_VALUES'][288][0] == '')
                $arFields['PROPERTY_VALUES'][288] = getProperty($GLOBALS['WORDS_CELEBRATION'], $arFields['NAME']);
            // Взять из названия Вид изделия, заполнить св-во Вид изделия
            if($arFields['PROPERTY_VALUES'][291][0] == '')
                $arFields['PROPERTY_VALUES'][291] = getProperty($GLOBALS['WORDS_VID'], $arFields['NAME']);
			// заполнить св-во "Тип материала"
            if($arFields['PROPERTY_VALUES'][297][0] == '')
                $arFields['PROPERTY_VALUES'][297] = getProperty($GLOBALS['WORDS_MATERIAL_TYPE'], $arFields['NAME']);
            // заполнить св-во "Что"
            if($arFields['PROPERTY_VALUES'][301][0] == '')
                $arFields['PROPERTY_VALUES'][301] = getProperty($GLOBALS['WORDS_TOY'], $arFields['NAME']);
            // заполнить св-во "Уровень сложности"
            if($arFields['PROPERTY_VALUES'][293][0] == '')
                $arFields['PROPERTY_VALUES'][293] = getProperty($GLOBALS['LEVEL'], $arFields['NAME']);

            $arFields['PROPERTY_VALUES']['SOURCE'] = explode('//',$arFields['LINK'])[1]; // вырежем http


            //---------------------- Ключевые слова ---------------------
            //---------------------- Добавление ключа в тайтл------------

            // --------------------- ОПИСАНИЕ ---------------------------

            // Вырежим из описания первую картинку
            if(strpos($arFields['LINK'],'clubmasteric.ru')
                ||
                strpos($arFields['LINK'],'kru4ok.ru')
                ||
                strpos($arFields['LINK'],'knitka.ru')
                ||
                strpos($arFields['LINK'],'uzorispicami.ru')
            ) {
                $arFields['DETAIL_TEXT']= stristr(stristr($arFields['DETAIL_TEXT'], '<img'),'>');
                $arFields['DETAIL_TEXT']= substr($arFields['DETAIL_TEXT'], 1, strlen($arFields['DETAIL_TEXT']));
            }

            if(strpos($arFields['LINK'],'uzorispicami.ru')) {
                $arFields['DETAIL_TEXT'] = str_replace('width="100%" height="222"','width="0" height="0"',$arFields['DETAIL_TEXT']);

                $arr = explode('<!-- relpost-thumb-wrapper -->', $arFields['DETAIL_TEXT']);
                $arFields['DETAIL_TEXT'] = $arr[0];
            }

            $arFields['DETAIL_TEXT'] = str_replace($GLOBALS['WORDS_DEL_FROM_DETAIL_TEXT'] ,'',$arFields['DETAIL_TEXT']);

            // --------------------- ОПИСАНИЕ ДЛЯ АНОНСА ---------------------------

            if($arFields['PREVIEW_TEXT'] == ''){
                $arFields['PREVIEW_TEXT'] = getPreviewText($arFields['DETAIL_TEXT']);
            }

            // Не сохранять элементы с такими словами в описании foreach($GLOBALS['WORDS_DETAIL_STOP'] as $word) if (stripos($arFields['DETAIL_TEXT'], $word))  return false;

			if(strpos($arFields['LINK'],'www.youtube.com'))
				return false; // не сохраняем, если Источник - ютуб ПРОВЕРИТЬ
        }
    }
}
//https://www.sotbit.ru/learning/shs.parser/lesson/parsercatalogdetailpageafter/
AddEventHandler("shs.parser", "parserCatalogDetailPageAfter", Array("SHSparser", "parserCatalogDetailPageAfterHandler"));

class SHSparser
{
    function parserCatalogDetailPageAfterHandler($_this)
    {
        /*if(strpos($_this->detailPage,'kru4ok.ru')) {*/ // надо для knitka тоже, поэтому комментирую
            // Заменить lazy блоки на обычные
            if(strpos($_this->detailPage,'www.youtube')) {

                $arr = explode('<span data-src="https://www.youtube', $_this->detailPage);
                $itog_text = $arr[0];

                $i = 0;
                while ($i <= count($arr)) {
                    if ($pos = strpos($arr[$i], '" class="lazy-iframe"')) {
                        $url = substr($arr[$i], 0, $pos);
                        $itog_text .= '<iframe src="https://www.youtube' . $url . '" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>';
                        $itog_text .= substr($arr[$i], strpos($arr[$i], 'span') + 5, strlen($arr[$i]));
                    }
                    $i++;
                }
                $itog_text = str_replace('Читать дальше…', 'Читать дальше на сайте источнике', $itog_text);
                $_this->detailPage = $itog_text;
            }
        /*}*/
    }
}


/*
 * вставка сылки на сайт в текст http://blogprogram.ru/skript-zashhity-teksta-ot-kopirovaniya/

корень сайта:
echo 'Document root: '.$_SERVER['DOCUMENT_ROOT'].'<br>';
/home/m/marigolu18/marigolu18.beget.tech/public_html

Быстрый просмотр - дает почти пустое окно
*/

AddEventHandler("main",'OnFileSave','OnFileSaveHandler');
function OnFileSaveHandler(&$arFile, $fileName, $module){
/*$arFile
name = Красивая коса для варежек, шапки, шарфа, схема узора.jpeg
type = image/jpeg
tmp_name = /home/m/marigolu18/marigolu18.beget.tech/public_html/upload/tmp/BXTEMP-2020-12-30/00/bxu/main/fb9746217d916c95afd4d370d9f8f428/file1609237475650/default
size = 23648
error = 0
description =
COPY_FILE = Y
MODULE_ID = iblock
old_file = 312998
ORIGINAL_NAME = Красивая коса для варежек, шапки, шарфа, схема узора.jpeg
*/
    // Обрезать картнку на случайное кол-во пикселей
    $size = getimagesize($arFile['tmp_name']); // размер получаем
    $randX = rand(0,2);
    $randY = rand(1,2);

    $arNewFile = CIBlock::ResizePicture($arFile, array("WIDTH" => $size[0]-$randX, "HEIGHT" => $size[1]-$randY, "METHOD" => "resample"));
    if(is_array($arNewFile))
        $arFile = $arNewFile;
}

?>