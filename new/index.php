<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    ".default-mari-news",
    array(
        "ADD_ELEMENT_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "NAME",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => ".default-mari-news",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Коллекция",
        "DETAIL_PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "48",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array(
            0 => "DETAIL_TEXT",
            1 => "DETAIL_PICTURE",
            2 => "",
        ),
        "LIST_PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "12",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "round",
        "PAGER_TITLE" => "Коллекции",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/collection/",
        "SEF_MODE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_REVIEW" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "PRODUCT_IBLOCK_TYPE" => "catalog",
        "PRODUCT_IBLOCK_ID" => "48",
        "PRODUCT_FILTER_NAME" => "arrFilter",
        "PRODUCT_PROPERTY_CODE" => array(
            0 => "BLOG_POST_ID",
            1 => "BLOG_COMMENTS_CNT",
            2 => "OFFERS",
            3 => "ATT_BRAND",
            4 => "COLLECTION",
            5 => "TOTAL_OUTPUT_POWER",
            6 => "VID_ZASTECHKI",
            7 => "VID_SUMKI",
            8 => "VIDEO",
            9 => "VYSOTA_RUCHEK",
            10 => "WARRANTY",
            11 => "OTSEKOV",
            12 => "CONVECTION",
            13 => "NAZNAZHENIE",
            14 => "BULK",
            15 => "PODKLADKA",
            16 => "SEASON",
            17 => "REF",
            18 => "COUNTRY_BRAND",
            19 => "SKU_COLOR",
            20 => "CML2_ARTICLE",
            21 => "DELIVERY",
            22 => "PICKUP",
            23 => "USER_ID",
            24 => "VOTE_COUNT",
            25 => "SHOW_MENU",
            26 => "SIMILAR_PRODUCT",
            27 => "RATING",
            28 => "RELATED_PRODUCT",
            29 => "VOTE_SUM",
            30 => "COLOR",
            31 => "ZOOM2",
            32 => "BATTERY_LIFE",
            33 => "SWITCH",
            34 => "GRAF_PROC",
            35 => "LENGTH_OF_CORD",
            36 => "DISPLAY",
            37 => "LOADING_LAUNDRY",
            38 => "FULL_HD_VIDEO_RECORD",
            39 => "INTERFACE",
            40 => "COMPRESSORS",
            41 => "Number_of_Outlets",
            42 => "MAX_RESOLUTION_VIDEO",
            43 => "MAX_BUS_FREQUENCY",
            44 => "MAX_RESOLUTION",
            45 => "FREEZER",
            46 => "POWER_SUB",
            47 => "POWER",
            48 => "HARD_DRIVE_SPACE",
            49 => "MEMORY",
            50 => "OS",
            51 => "ZOOM",
            52 => "PAPER_FEED",
            53 => "SUPPORTED_STANDARTS",
            54 => "VIDEO_FORMAT",
            55 => "SUPPORT_2SIM",
            56 => "MP3",
            57 => "ETHERNET_PORTS",
            58 => "MATRIX",
            59 => "CAMERA",
            60 => "PHOTOSENSITIVITY",
            61 => "DEFROST",
            62 => "SPEED_WIFI",
            63 => "SPIN_SPEED",
            64 => "PRINT_SPEED",
            65 => "SOCKET",
            66 => "IMAGE_STABILIZER",
            67 => "GSM",
            68 => "SIM",
            69 => "TYPE",
            70 => "MEMORY_CARD",
            71 => "TYPE_BODY",
            72 => "TYPE_MOUSE",
            73 => "TYPE_PRINT",
            74 => "CONNECTION",
            75 => "TYPE_OF_CONTROL",
            76 => "TYPE_DISPLAY",
            77 => "TYPE2",
            78 => "REFRESH_RATE",
            79 => "RANGE",
            80 => "AMOUNT_MEMORY",
            81 => "MEMORY_CAPACITY",
            82 => "VIDEO_BRAND",
            83 => "DIAGONAL",
            84 => "RESOLUTION",
            85 => "TOUCH",
            86 => "CORES",
            87 => "LINE_PROC",
            88 => "PROCESSOR",
            89 => "CLOCK_SPEED",
            90 => "TYPE_PROCESSOR",
            91 => "PROCESSOR_SPEED",
            92 => "HARD_DRIVE",
            93 => "HARD_DRIVE_TYPE",
            94 => "Number_of_memory_slots",
            95 => "MAXIMUM_MEMORY_FREQUENCY",
            96 => "TYPE_MEMORY",
            97 => "BLUETOOTH",
            98 => "FM",
            99 => "GPS",
            100 => "HDMI",
            101 => "SMART_TV",
            102 => "USB",
            103 => "WIFI",
            104 => "FLASH",
            105 => "ROTARY_DISPLAY",
            106 => "SUPPORT_3D",
            107 => "SUPPORT_3G",
            108 => "WITH_COOLER",
            109 => "FINGERPRINT",
            110 => "PROFILE",
            111 => "GAS_CONTROL",
            112 => "GRILL",
            113 => "MORE_PROPERTIES",
            114 => "GENRE",
            115 => "INTAKE_POWER",
            116 => "SURFACE_COATING",
            117 => "brand_tyres",
            118 => "SEASONOST",
            119 => "DUST_COLLECTION",
            120 => "DRYING",
            121 => "REMOVABLE_TOP_COVER",
            122 => "CONTROL",
            123 => "FINE_FILTER",
            124 => "FORM_FAKTOR",
            125 => "HTML",
            126 => "MARKER_PHOTO",
            127 => "NEW",
            128 => "DELIVERY_DESC",
            129 => "SALE",
            130 => "MARKER",
            131 => "POPULAR",
            132 => "WEIGHT",
            133 => "HEIGHT",
            134 => "DEPTH",
            135 => "WIDTH",
            136 => "",
        ),
        "PRODUCT_PRICE_CODE" => array(
        ),
        "PRODUCT_CONVERT_CURRENCY" => "Y",
        "PRODUCT_CURRENCY_ID" => "RUB",
        "HIDE_NOT_AVAILABLE" => "N",
        "HIDE_MEASURES" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "FILTER_PRICE_CODE" => array(
            0 => "BASE",
        ),
        "SHOW_BLOG_COMMENTS" => "Y",
        "TAGS_CLOUD_ELEMENTS" => "150",
        "PERIOD_NEW_TAGS" => "",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_AS_RATING" => "rating",
        "FONT_MAX" => "50",
        "FONT_MIN" => "10",
        "COLOR_NEW" => "3E74E6",
        "COLOR_OLD" => "C0C0C0",
        "TAGS_CLOUD_WIDTH" => "100%",
        "USE_SHARE" => "N",
        "TEMPLATE_THEME" => "blue",
        "MEDIA_PROPERTY" => "",
        "SLIDER_PROPERTY" => "",
        "SEF_URL_TEMPLATES" => array(
            "news" => "",
            "section" => "",
            "detail" => "#ELEMENT_CODE#/",
        )
    ),
    false
);?><br /><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>