<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("rss");
?><?$APPLICATION->IncludeComponent("bitrix:rss.out", "mari_yandex_turbo", Array(
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"FILTER_NAME" => "",	// Фильтр
		"IBLOCK_ID" => "48",	// Информационный блок
		"IBLOCK_TYPE" => "catalog",	// Тип информационного блока
		"NUM_DAYS" => "30",	// Количество дней для экспорта
		"NUM_NEWS" => "1000",	// Количество новостей для экспорта
		"RSS_TTL" => "60",	// Время жизни (в минутах)
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ID" => "",	// Раздел
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"YANDEX" => "Y",	// Экспортировать в диалект Яндекса
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>