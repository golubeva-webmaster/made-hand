<?
require_once("../vendor/autoload.php");
require_once("Parser.php");

$url_head = 'https://ru.wikipedia.org';

function getImage($url_page){
    if ($url_page) {
        $htmlBigIMG = Parser::getPage(["url" => $url_page]);
        if (!empty($htmlBigIMG["data"])) {
            $content = $htmlBigIMG["data"]["content"];
            phpQuery::newDocument($content);
            return 'https:' . pq("#file")->find("img")->attr("src");
        }
        phpQuery::unloadDocuments();
    }
}

function getSubjectData($data){
    $url_head = 'https://ru.wikipedia.org';
    $ar = [];
    phpQuery::newDocument($data["content"]);

    if(pq('[data-wikidata-property-id="P2046"]')->find("p")->text())
		$ar['TERRITORIA'] = explode('[', pq('[data-wikidata-property-id="P2046"]')->find("p")->text())[0];

    $tm= explode('[', pq('[data-wikidata-property-id="P1082"]')->find("p")->text())[0];
    if($tm)
		$ar['COUNT_NASELENIE'] = explode('↗',$tm)[1];

    $ar['TIMEZONE'] = pq('span[data-wikidata-property-id="P421"]')->find("a")->text();// часовой пояс
    if(pq('span[data-wikidata-property-id="P856"]')->find("a")->attr("href"))
		$ar['OF_SITE'] = pq('span[data-wikidata-property-id="P856"]')->find("a")->attr("href");// официальный сайт

    $ar['MAP']['geo-geohack'] = pq('span.geo-geohack')->find("a")->attr("href");
    $ar['MAP']['geo-google'] = pq('span.geo-google')->find("a")->attr("href");
    $ar['MAP']['geo-yandex'] = pq('span.geo-geohack')->find("a")->attr("href");
    $ar['MAP']['geo-osm'] = pq('span.geo-geohack')->find("a")->attr("href");

    $img_on_map_url = pq('span[data-wikidata-property-id="P242"]')->find("a")->attr("href");// официальный сайт
    if(pq('span[data-wikidata-property-id="P242"]')->find("img")->attr("alt"))
		$ar['IMG_ON_MAP']['ALT'] = pq('span[data-wikidata-property-id="P242"]')->find("img")->attr("alt");// официальный сайт

    $img_url = pq(".infobox-image")->find("a")->attr("href");
    $flag_url = pq('span[data-wikidata-property-id="P41"]')->find("a")->attr("href");// флаг
    $gerb_url = pq('span[data-wikidata-property-id="P94"]')->find("a")->attr("href");// герб

    if(pq(".infobox-image")->find("a")->find("img")->attr("alt"))
		$ar['DETAIL_IMAGE']['ALT'] = pq(".infobox-image")->find("a")->find("img")->attr("alt");

    // Идем на стр картинок, забираем
    if($img_url) $ar['DETAIL_IMAGE']['URL'] = getImage($url_head.$img_url);
    if($flag_url) $ar["FLAG"] = getImage($url_head.$flag_url);
    if($gerb_url) $ar["GERB"] = getImage($url_head.$gerb_url);
    if($img_on_map_url) $ar['IMG_ON_MAP']['URL'] = getImage($url_head.$img_on_map_url);

    return $ar;
}

// Регионы
//$html = Parser::getPage([
//    "url" => "https://ru.wikipedia.org/wiki/Субъекты_Российской_Федерации"
//]);
//if(!empty($html["data"])){
//    $content = $html["data"]["content"];
//    phpQuery::newDocument($content);
//    $sub = pq(".standard tbody tr");
//
//    $tmp = [];
//
//    foreach($sub as $key => $category){
//        $cat = pq($category);
//        $tmp[$key] = [
//            "title" => trim($cat->find("td:nth-child(2) a")->title()),
//            "url"  => $url_head.trim($cat->find("td:nth-child(2) a")->attr("href")),
//        ];
//    }
//    phpQuery::unloadDocuments();
//}

$tmp = [
//    '0' => [
//        'title' => 'Республика Адыгея',
//        'url' => $url_head.'/wiki/%D0%90%D0%B4%D1%8B%D0%B3%D0%B5%D1%8F',
//    ],
//    '1' => [
//        'title' => 'Республика Алтай',
//        'url' => $url_head.'/wiki/%D0%A0%D0%B5%D1%81%D0%BF%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0_%D0%90%D0%BB%D1%82%D0%B0%D0%B9',
//    ],
//    '40' => [
//        'title' => 'Владимирская область',
//        'url' => $url_head.'/wiki/%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C',
//    ],
    '41' => [
        'title' => 'Волгоградская область',
        'url' => $url_head.'/wiki/%D0%92%D0%BE%D0%BB%D0%B3%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C',
    ],
];

// внутри Субъекта РФ
foreach($tmp as $key => $arObl) {

    $htmlCities = Parser::getPage([
        "url" => $arObl['url']
    ]);
    if (!empty($htmlCities["data"])) {

        $arSubj = getSubjectData($htmlCities["data"]);
        $tmp[$key] = array_merge($tmp[$key], $arSubj);
        phpQuery::newDocument($htmlCities["data"]["content"]);

        // Населенные пункты
        $cities = pq("table.wide")->find('tr');
        $tmp[$key]['CITES'] = [];
		$i=0;
        foreach($cities as $city) {
            $cat = pq($city);
            $url = trim($cat->find("td:nth-child(1)")->find("a")->attr('href'));

            $tmp[$key]['CITES'][$i] = [
                "title" => trim($cat->find("td:nth-child(1)")->find("a")->text()),
                "url" => $url_head.$url
            ];
//MARI продолжить
            $htmlSub = Parser::getPage([
                "url" => $url_head.$url
            ]);
            if (!empty($htmlSub["data"])) {
                $arSubj = getSubjectData($htmlSub["data"]);
				//echo '<a href="'.$url.'">'.trim($cat->find("td:nth-child(1)")->find("a")->text()).'</a>';
                //echo '<pre>'; print_r($arSubj); echo '</pre>';
				$tmp[$key]['CITES'][$i] = array_merge($tmp[$key]['CITES'][$i], $arSubj);
			}
			$i++;
        }

    phpQuery::unloadDocuments();
    }
    echo '<a href="'.$tmp[$key]['url'].'">'.$tmp[$key]['title'].'</a><br>';
    echo '<a href="'.$tmp[$key]['CENTER']['url'].'">'.$tmp[$key]['CENTER']['title'].'</a><br>';
    echo '<pre>'; print_r($tmp[$key]); echo '</pre>';
}


?>
<?php
/*
 * Ошибки curl http://php-zametki.ru/php-prodvinutym/75-php-curl.html
 * Парсинг: http://falbar.ru/article/pishem-parser-kontenta-na-php
 * */?>

<?php/*
новости туризма РФ
РФ туризм https://russian.rt.com/tag/turizm
мир туризм, РФ в основном https://tourism.interfax.ru/ru/?tpid=961&tpl=47
мир туризм https://ria.ru/tourism_news/

храмы, регоины: https://hramy.ru/regions/regfull.htm
офицмальные сайты субъектов РФ http://www.gov.ru/main/regions/regioni-44.html

wiki API https://www.ibm.com/developerworks/ru/library/x-phpwikipedia/index.html
видео о разном https://zilcc.ru/news/8364.html
Спецпроект Путешествуйте с кагоцелом https://kagoceltravelrussia.kudago.com/?utm_source=kudago.com&utm_medium=editorial_interesting&utm_campaign=kagocel#/article/baikals
*/
?>