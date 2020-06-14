<?
require_once("../vendor/autoload.php");

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
?>