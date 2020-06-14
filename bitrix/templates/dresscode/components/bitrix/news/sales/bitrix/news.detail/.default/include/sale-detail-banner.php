<div class="blog-banner banner-wrap banner-bg">
	<div class="banner-animated banner-elem" style="background: url('<?=$arResult["RESIZE_BANNER_PICTURE"]["src"]?>') center center / cover no-repeat;">
		<div class="tb">
			<div class="text-wrap tc">
				<div class="tb">
					<div class="tr">
						<div class="tc">
							<?if(!empty($arResult["DISPLAY_PROPERTIES"]["STOCK_DATE"]["VALUE"])):?>
								<div class="date"><?=$arResult["DISPLAY_PROPERTIES"]["STOCK_DATE"]["VALUE"];?></div>
							<?endif;?>
							<?if(!empty($arResult["NAME"])):?>
								<h1 class="ff-medium"><?=$arResult["NAME"]?></h1>
							<?endif;?>
							<?if(!empty($arResult["PREVIEW_TEXT"])):?>
								<div class="descr"><?=$arResult["PREVIEW_TEXT"]?></div>
							<?endif;?>
						</div>
					</div>
					<div class="social">
						<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,telegram"></div>
					</div>
				</div>
			</div>
			<div class="image tc">
				<?if(!empty($arResult["RESIZE_DETAIL_PICTURE"])):?>
						<img src="<?=$arResult["RESIZE_DETAIL_PICTURE"]["src"]?>" alt="<?=$arResult["NAME"]?>">
				<?endif;?>
			</div>
		</div>
	</div>
</div>
<div class="global-block-container">
	<div class="global-content-block">
		<div class="detail-text-wrap">
			<?=$arResult["DETAIL_TEXT"]?>
			<div class="btn-simple-wrap">
				<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="btn-simple btn-small"><?=GetMessage("NEWS_BACK")?></a>
			</div>
		</div>
	</div>
	<?global $arrFilter; $arrFilter["!ID"] = $arResult["ID"];?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"saleDetail",
		array_merge($arParams, array("NEWS_COUNT" => 3, "FILTER_NAME" => "arrFilter", "INCLUDE_IBLOCK_INTO_CHAIN" => "N", "ADD_SECTIONS_CHAIN" => "N", "ADD_ELEMENT_CHAIN" => "N", "SET_TITLE" => "N")),
		$component
	);?>
</div>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script src="//yastatic.net/share2/share.js" charset="utf-8"></script>