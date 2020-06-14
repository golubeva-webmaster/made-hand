<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if(!empty($arResult["ITEMS"])):?>
	<div class="sideBlock" id="newsBlock">
		<div class="sideBlockContent">
			<?foreach($arResult["ITEMS"] as $ix => $arItem):?>

				<div class="blockquote-wrap">
					<blockquote>
						<?if(!empty($arItem["PREVIEW_TEXT"])):?>
							<div class="preText">
								<?=mb_strimwidth($arItem["PREVIEW_TEXT"], 0, 200, "...");?>
							</div>
						<?endif;?>
					</blockquote>
					<p><?=$arItem["NAME"]?></p>
					<p class="right">
						<a href="<?=SITE_DIR?>quotes/"><?=$arResult["NAME"]?></a>
					</p>
				</div>
			<?endforeach;?>		
		</div>
	</div>
<?endif;?>

