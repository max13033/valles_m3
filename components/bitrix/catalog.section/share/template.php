<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */
$this->setFrameMode(true);
//unset($arResult['ITEMS'][0]['PROPERTIES']);
//pr($arResult['ITEMS'][0]);
?>
<div class="swiper-container s3">
    <div class="swiper-wrapper">
        <?foreach ($arResult['ITEMS'] as $item){
//            pr($item);
            ?>
            <div class="swiper-slide">
                <a href="<?=$item['DETAIL_PAGE_URL']?>" class="action__items-link">
                    <div class="action__img-wrap">
                        <div class="b-product__picture" style="background-image:url('<?=$item['PREVIEW_PICTURE']['SRC']?>')"></div>
                        <? if ($item['RATIO_PRICE']['DISCOUNT_DIFF_PERCENT']){?>
                            <div class="action__items">
                                <span>-<?=$item['RATIO_PRICE']['DISCOUNT_DIFF_PERCENT']?>%</span>
                            </div>
                        <?}?>
                    </div>
                    <p class="action__text"><?=$item['~NAME']?></p>
                    <p class="product__cost">
                        <?=$item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?>
                        <?if($item['PRICES']['BASE']['DISCOUNT_VALUE']){?>
                            <span><?=$item['PRICES']['BASE']['PRINT_VALUE']?></span>
                        <?}?>
                    </p>
                </a>
            </div>
        <?}?>

    </div>
</div>
