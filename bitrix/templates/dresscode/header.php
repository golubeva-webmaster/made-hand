<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?if(file_exists($_SERVER["DOCUMENT_ROOT"].SITE_DIR."settings.php")):?>
	<?require_once($_SERVER["DOCUMENT_ROOT"].SITE_DIR."settings.php"); // site settings?>
<?else:?>
	<?die("/settings.php not found /  dw24.su/lib/ for more info");?>
<?endif;?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<meta charset="<?=SITE_CHARSET?>">
		<META NAME="viewport" content="width=device-width, initial-scale=1.0">
		<?/*><link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" />*/?>

        <?//mari favicon generator https://realfavicongenerator.net/?>
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="/images/favicons/site.webmanifest">
        <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffc40d">
        <meta name="theme-color" content="#ffffff">


        <?/*<link rel="canonical" href="<?="https://www.made-hand.ru" . $_SERVER['REQUEST_URI']; ?>"/>*/?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#3498db">
		<?CJSCore::Init(array("fx", "ajax", "window", "popup"));?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/fonts/roboto/roboto.css");?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/white/".$TEMPLATE_THEME_NAME."/style.css");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.11.0.min.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.1.3.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/rangeSlider.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/system.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/topMenu.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/topSearch.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwCarousel.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwSlider.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwZoomer.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwTimer.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/colorSwitcher.js");?>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
        <meta name="yandex-verification" content="20e78e0478ac11f8" />
        <meta name="google-site-verification" content="LUCHxrdOJ-_K1DB1ElUXLHFvGRoh657_aPYD38jMqMk" />
	</head>
	<body
            class="loading <?if (INDEX_PAGE == "Y"):?>index<?endif;?><?if(!empty($TEMPLATE_PANELS_COLOR) && $TEMPLATE_PANELS_COLOR != "default"):?> panels_<?=$TEMPLATE_PANELS_COLOR?><?endif;?>"
            itemscope="itemscope" itemtype="http://schema.org/WebPage"
    >
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<div id="foundation">
			<?require_once($_SERVER["DOCUMENT_ROOT"]."/".SITE_TEMPLATE_PATH."/headers/".$TEMPLATE_HEADER."/template.php");?>
			<div id="main"<?if($TEMPLATE_BACKGROUND_NAME != ""):?> class="color_<?=$TEMPLATE_BACKGROUND_NAME?>"<?endif;?>>
				<div class="limiter">
					<div class="compliter">
						<?if(!defined("ERROR_404")):?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "sect",
									"AREA_FILE_SUFFIX" => "leftBlock",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => ""
								),
								false
							);?>
						<?endif;?>
						<div id="right">
							<?if(!defined("INDEX_PAGE") && !defined("ERROR_404")):?>
								<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
									"START_FROM" => "0",
										"PATH" => "",
										"SITE_ID" => "-",
									),
									false
								);?>
							<?endif;?>
							<?$APPLICATION->ShowViewContent("after_breadcrumb_container");?>
							<?$APPLICATION->ShowViewContent("landing_page_banner_container");?>
							<?$APPLICATION->ShowViewContent("landing_page_top_text_container");?>