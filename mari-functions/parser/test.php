<?
require_once("../vendor/autoload.php");
require_once("Parser.php");

//$params = [
//    "useragent" => "Mozilla/5.0", // string Содержимое заголовка "User-Agent: ", посылаемого в HTTP-запросе
//    "timeout" => 5, // int Максимально позволенное количество секунд для выполнения CURL-функций
//    "connecttimeout" => 5, // int Количество секунд ожидания при попытке соединения
//    "head" => false, // bool Для вывода заголовков без тела документа
//    "cookie" => [
//        "file" => "cookie.txt", // string Файл для хранения cookie
//        "session" => false // bool Для указания текущему сеансу начать новую "сессию" cookies
//    ],
//    "proxy" => [
//        "ip" => "127.0.0.1", // string IP адрес прокси сервера
//        "port" => 80, // int Порт прокси сервера
//        "type" => "CURLPROXY_HTTP" // string Тип прокси сервера
//    ],
//    "headers" => [ // array Массив устанавливаемых HTTP-заголовков
//        "Content-type: text/plain",
//        "Content-length: 100"
//    ],
//    "post" => "'param1=val1&param2=val2", // string Все данные, передаваемые в HTTP POST-запросе
//];

//$params["url"] = 'https://autotravel.ru/areas.php'; // string Ссылка на страницу
$url_head = 'https://autotravel.ru/areas.php';//'https://autotravel.ru';

// Регионы
$html = Parser::getPage([
    "url" => "https://russia.travel/volgogradskaja/"//"https://autotravel.ru/areas.php"//
]);
if(!empty($html["data"])){

    $content = $html["data"]["content"];
    phpQuery::newDocument($content);
    $categories = pq(".news")->find("a");
    $tmp = [];

    foreach($categories as $key => $category){
        $category = pq($category);
        $tmp[$key] = [
            "text" => trim($category->text()),
            "url"  => trim($category->attr("href"))
        ];
    }
    phpQuery::unloadDocuments();
}

//$tmp = [
////    '0' => [
////        'text' => 'Алтайский край',
////        'url' => '/area.php/47'
////        ],
////    '1' => [
////        'text' => 'Амурская область',
////        'url' => '/area.php/75'
////        ],
////    '2' => [
////        'text' => 'Архангельская область',
////        'url' => '/area.php/33'
////        ],
//    '10' => [
//        'text' => 'Волгоградская область',
//        'url' => '/area.php/11'
//    ]
//];


// Города
//foreach($tmp as $key => $arObl){
//    //echo '<pre>'; print_r($arObl); echo '</pre>';
//    $content = '';
//    echo $arObl['text'].'  '.$url_head.$arObl['url'].'<br>';
//    $htmlCities = Parser::getPage([
//        "url" => $url_head.$arObl['url'] //url области
//    ]);
////$tmp[$key]['cities-test'][] = ['text'=>'text', 'url'=>'url'];
//    if (!empty($htmlCities["data"])) {
//        $content = $htmlCities["data"]["content"];
//        phpQuery::newDocument($content);
//        $categories = pq("#areatowns")->find(".tblock")->find("a");
//        $tmpCities = [];
//
//        foreach ($categories as $keycat => $category) {
//            $category = pq($category);
//            $arCities[] = [
//                "text" => trim($category->text()),
//                "url" => trim($category->attr("href"))
//            ];
//            echo trim($category->text()).': '.trim($category->attr("href")).'<br>';
//        }
//        $tmp[$key]['cities'] = $arCities;;
//        phpQuery::unloadDocuments();
//    }
//}
echo '<pre>'; print_r($tmp); echo '</pre>';
?>
<ul class="itog">
    <?php foreach($tmp as $value): ?>
        <li>
            <a href="<?=$url_head.$value["url"]?>" target="_blank">
                <?php echo($value["text"]); ?>
            </a>
            <ul>
                <? if(!empty($value["cities"])): ?>
                    <?php foreach($value["cities"] as $val): ?>
                        <li>
                            <a href="<?=$url_head.$val["url"]?>" target="_blank">
                                <?php echo($val["text"]); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <? endif; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>
<?php
/*

//$url = 'https://russia.travel/news/';
$url = 'https://autotravel.ru/areas.php';
$opts = array(
    'http'=>array( "method" => "GET",
    "timeout" => 20,
    "header" => "User-agent: Myagent",
    "proxy" => "tcp://my-proxy.localnet:3128"
    )
    );
   $context = stream_context_create($opts);
   $file = file_get_contents($url); //, false, $context

echo ($file);

phpQuery::newDocument($html);

$links = pq(".tblock")->find("a");

$tmp = array();

foreach($links as $link){

    $link = pq($link);

    $tmp[] = [
        "text" => $link->text(),
        "url"  => $link->attr("href")
    ];
}

phpQuery::unloadDocuments();
*/
?>
<?php
/*
 * Ошибки curl http://php-zametki.ru/php-prodvinutym/75-php-curl.html
 * Парсинг: http://falbar.ru/article/pishem-parser-kontenta-na-php
 * */?>
