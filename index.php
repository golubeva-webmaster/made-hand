<?define("INDEX_PAGE", "Y");?>
<?define("MAIN_PAGE", true);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->SetTitle('Вязание крючком и спицами');?>
<?//$APPLICATION->SetDescription('Схемы вязания спицами и крючком.');?>
	<div id="promoBlock">
		<?$APPLICATION->IncludeComponent(
	"dresscode:slider", 
	"promoSlider", 
	array(
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_ID" => "16",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "3600000",
		"PICTURE_WIDTH" => "1181",
		"PICTURE_HEIGHT" => "555"
	),
	false
);?>
        <h1><?$APPLICATION->ShowTitle();?></h1>

			<?$APPLICATION->IncludeComponent(
	"dresscode:special.product", 
	".default", 
	array(
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "3600000",
		"PROP_NAME" => "",
		"IBLOCK_TYPE" => "info",
		"IBLOCK_ID" => "47",
		"PICTURE_WIDTH" => "200",
		"PICTURE_HEIGHT" => "180",
		"ELEMENTS_COUNT" => "10",
		"SORT_PROPERTY_NAME" => "SORT",
		"SORT_VALUE" => "ASC",
		"COMPONENT_TEMPLATE" => ".default",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_MEASURES" => "N",
		"CATALOG_ITEM_TEMPLATE" => "special",
		"PRODUCT_PRICE_CODE" => array(
		),
		"CONVERT_CURRENCY" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
	</div>
	
<?$APPLICATION->IncludeComponent(
	"dresscode:offers.product", 
	".default", 
	array(
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "3600000",
		"PROP_NAME" => "TOY",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "48",
		"PICTURE_WIDTH" => "220",
		"PICTURE_HEIGHT" => "200",
		"PROP_VALUE" => array(
			0 => "_310",
			1 => "_300",
			2 => "_314",
			3 => "_315",
			4 => "_291",
			5 => "_313",
			6 => "_316",
		),
		"ELEMENTS_COUNT" => "9",
		"SORT_PROPERTY_NAME" => "SORT",
		"SORT_VALUE" => "ASC",
		"COMPONENT_TEMPLATE" => ".default",
		"CATALOG_ITEM_TEMPLATE" => ".default",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_MEASURES" => "N",
		"PRODUCT_PRICE_CODE" => array(
		),
		"CONVERT_CURRENCY" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>

<?$APPLICATION->IncludeComponent(
	"dresscode:pop.section", 
	".default", 
	array(
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "3600000",
		"PROP_NAME" => "UF_POPULAR",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "48",
		"PICTURE_WIDTH" => "120",
		"PICTURE_HEIGHT" => "100",
		"PROP_VALUE" => "Y",
		"ELEMENTS_COUNT" => "10",
		"SORT_PROPERTY_NAME" => "7",
		"SORT_VALUE" => "DESC",
		"SELECT_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "SECTION_PAGE_URL",
			3 => "DETAIL_PICTURE",
			4 => "UF_IMAGES",
			5 => "UF_MARKER",
			6 => "",
		),
		"POP_LAST_ELEMENT" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
<?/*$APPLICATION->IncludeComponent(
	"dresscode:slider", 
	"middle", 
	array(
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_ID" => "17",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "3600000",
		"PICTURE_WIDTH" => "1476",
		"PICTURE_HEIGHT" => "202"
	),
	false
);*/?>
<?$APPLICATION->IncludeComponent(
	"dresscode:brands.list", 
	".default", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "48",
		"SELECT_FIELDS" => array(
			0 => "",
			1 => "*",
			2 => "",
		),
		"PROP_NAME" => "",
		"PROP_VALUE" => "",
		"ELEMENTS_COUNT" => "15",
		"SORT_PROPERTY_NAME" => "id",
		"SORT_VALUE" => "DESC",
		"PICTURE_WIDTH" => "150",
		"PICTURE_HEIGHT" => "120",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "360000",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "simplyText",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>

    <h2>О любимом хобби с юмором <a href="/postcard/">>></a></h2>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "indexBanners",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "PREVIEW_TEXT",
            1 => "PREVIEW_PICTURE",
            2 => "DETAIL_TEXT",
            3 => "DETAIL_PICTURE",
            4 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "47",
        "IBLOCK_TYPE" => "info",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Банеры",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "UZOR",
            2 => "VID",
            3 => "TOY",
            4 => "CELEBRATION",
            5 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ID",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "indexBanners"
    ),
    false,
    array(
        "ACTIVE_COMPONENT" => "Y"
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>