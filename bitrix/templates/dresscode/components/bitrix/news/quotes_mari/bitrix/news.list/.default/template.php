<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	$this->setFrameMode(true);


//mari выбераем подложку
/*
$activeElements = CIBlockSection::GetSectionElementsCount(77, Array("CNT_ACTIVE"=>"Y"));
$name = rand(1, intval($activeElements));
$style = '';

$arSelect = [];
$arFilter = Array("IBLOCK_ID"=>27, "SECTION_ID"=>77, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "NAME"=> $name);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);

while($ob = $res->GetNextElement())
{
 	$arFields = $ob->GetFields();
	$image = CFile::GetFileArray($arFields["DETAIL_PICTURE"]);
	$style = 'background-repeat: no-repeat; background-size: cover; width: '.$image["WIDTH"].'px; height: '.$image["HEIGHT"].'px; margin: 0 auto; background-image: url('.$image["SRC"].')';
//echo $style;	
}
*/
?>

	<?if(!empty($arResult["ITEMS"])):?>
		<div id="news">
			<div id="newsContainer">
				<div class="items column">
					<?foreach ($arResult["ITEMS"] as $key => $arElement):?>
						<?

						if($arElement['DETAIL_PICTURE']['ID']){
							echo $arElement['DETAIL_PICTURE']['ID'];
							$st = 'background-repeat: no-repeat; background-size: cover; width: '.$arElement['DETAIL_PICTURE']["WIDTH"].'px; height: '.$arElement['DETAIL_PICTURE']["HEIGHT"].'px; margin: 0 auto; background-image: url('.$arElement['DETAIL_PICTURE']["SRC"].')';
							$class = 'quote_body';
						}
						else{
							$st = ''; 
							$class = '';
						}


						$this->AddEditAction($arElement["ID"], $arElement["EDIT_LINK"], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arElement["ID"], $arElement["DELETE_LINK"], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

						<div class="item" id="<?=$this->GetEditAreaId($arElement["ID"]);?>">
							<div class="wrap" style = "<?=$st?>">
								<div class="<?=$class?>">
									
									<?if(!empty($arElement["PREVIEW_TEXT"])):?>
										<div class="description"><span class="middle"><?=$arElement["PREVIEW_TEXT"]?></span></div>
									<?endif;?>
									<div class="title"><span class="middle"><?=$arElement["NAME"]?></span></div>
								</div>
							</div>
						</div>

					<?endforeach;?>
				</div>
			</div>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
		</div>
	<?else:?>
		<div id="empty">
			<div class="emptyWrapper">
				<div class="pictureContainer">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/emptyFolder.png" alt="<?=GetMessage("EMPTY_HEADING")?>" class="emptyImg">
				</div>
				<div class="info">
					<h3><?=GetMessage("EMPTY_HEADING")?></h3>
					<p><?=GetMessage("EMPTY_TEXT")?></p>
					<a href="<?=SITE_DIR?>" class="back"><?=GetMessage("MAIN_PAGE")?></a>
				</div>
			</div>
			<?$APPLICATION->IncludeComponent("bitrix:menu", "emptyMenu", Array(
				"ROOT_MENU_TYPE" => "left",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => "",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
				),
				false
			);?>
		</div>
	<?endif;?>
