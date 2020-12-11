<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");
?>
    <h1>Карта сайта</h1>
<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "personal",
    array(
        "COMPONENT_TEMPLATE" => "personal",
        "ROOT_MENU_TYPE" => "about",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_TIME" => "3600000",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "",
        "USE_EXT" => "N",
        "DELAY" => "N",
        "ALLOW_MULTI_SELECT" => "N"
    ),
    false
);?>
    <div class="global-block-container">
        <div class="global-content-block">
            <div class="bx_page">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.map",
                    "",
                    Array(
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "COL_NUM" => "1",
                        "LEVEL" => "3",
                        "SET_TITLE" => "Y",
                        "SHOW_DESCRIPTION" => "N"
                    )
                );?>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>