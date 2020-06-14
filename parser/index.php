<?
require_once("../vendor/autoload.php");

//$url = 'https://russia.travel/news/';
$url = 'https://russia.travel/arhangelskaja/';
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
?>