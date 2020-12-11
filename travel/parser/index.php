st<?
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
/*
$html = Parser::getPage([
    "url" => "https://autotravel.ru/areas.php" //https://www.svyaznoy.ru/catalog"
]);
if(!empty($html["data"])){

    $content = $html["data"]["content"];
    phpQuery::newDocument($content);
    $categories = pq(".tblock")->find("a");
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
*/
$tmp = [
    '0' => [
        'text' => 'Алтайский край',
        'url' => '/area.php/47'
        ],
    '1' => [
        'text' => 'Амурская область',
        'url' => '/area.php/75'
        ],
    '2' => [
        'text' => 'Архангельская область',
        'url' => '/area.php/33'
        ]
];

$i = 1;
foreach($tmp as $key => $arObl){
    echo '<pre>'; print_r($arObl); echo '</pre>';
     /*   $content = '';
        $htmlCities = Parser::getPage([
            "url" => $arObl['url'] //url области
        ]);
        if (!empty($htmlCities["data"])) {

            $content = $htmlCities["data"]["content"];
            phpQuery::newDocument($content);
            $categories = pq(".tblock")->find("a");
            $tmpCities = [];

            foreach ($categories as $key => $category) {
                $category = pq($category);
                $tmp[$key]['submenu'][] = [
                    "text" => trim($category->text()),
                    "url" => trim($category->attr("href"))
                ];
            }
            phpQuery::unloadDocuments();
        }
     */
}
//echo '<pre>'; print_r($tmp); echo '</pre>';
?>
<ul class="itog">
  <?php foreach($tmp as $value): ?>
 <li>
      <a href="https://www.svyaznoy.ru<?php echo($value["url"]); ?>" target="_blank">
           <?php echo($value["text"]); ?>
      </a>
      <ul>
          <? if(!empty($value["submenu"])): ?>
            <?php foreach($value["submenu"] as $val): ?>
            <li>
              <a href="https://www.svyaznoy.ru<?php echo($val["url"]); ?>" target="_blank">
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