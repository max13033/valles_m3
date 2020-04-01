<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?if( $arResult["ITEMS"]):?>
	<?global $arTheme;
	$bHideOnNarrow = $arTheme['BIGBANNER_HIDEONNARROW']['VALUE'] === 'Y';
	$bannerHeight = intval($arParams['BANNER_HEIGHT'])?>

    <div class="swiper-container s1">
        <div class="swiper-wrapper">

            <?foreach($arResult["ITEMS"] as $arItem):

                if ($arItem['PROPERTIES']['MOBILE_ENABLE']['VALUE'] != 'Y') continue;

                $background = is_array($arItem["DETAIL_PICTURE"]) ? $arItem["DETAIL_PICTURE"]["SRC"] : $this->GetFolder()."/images/background.jpg";

                $target = $arItem["PROPERTIES"]["TARGETS"]["VALUE_XML_ID"];

                $title = $arItem["PROPERTIES"]["MOBILE_TITLE"]["~VALUE"];
                $subtitle = $arItem["PROPERTIES"]["MOBILE_SUBTITLE"]["~VALUE"];
                $label = $arItem["PROPERTIES"]["MOBILE_LABLE"]["~VALUE"];

                $link = 'javascript:void(0);';

                if (!empty($arItem["PROPERTIES"]["MOBILE_IMAGE"]['VALUE'])) {
                    $background = CFile::GetPath($arItem["PROPERTIES"]["MOBILE_IMAGE"]['VALUE']);
                }
                if (!empty($arItem["PROPERTIES"]["PICTURE_SVG"]['VALUE'])) {    //  если в свойствах есть SVG картинка - отображать её вместо JPG
                    $background = CFile::GetPath($arItem["PROPERTIES"]["PICTURE_SVG"]['VALUE']);
                }                

                if($arItem["PROPERTIES"]["URL_STRING"]["VALUE"]) {
                    $link = $arItem["PROPERTIES"]["URL_STRING"]["VALUE"];
                }

                ?>

                <div class="swiper-slide">
                    <a href="<?=$link?>" class="offer__link-wrap" <?=(strlen($target) ? 'target="'.$target.'"' : '')?>>
                        <img src="<?=$background?>" alt="Slide" class="offer__img">
                        <? if ($label || $title) {?>
                            <div class="offer__vektor"></div>
                        <?} ?>    
                        <div class="offer__items">
                            <? if ($label) {?>
                                <span class="offer__items--title"><?=$label?></span>
                            <?} ?>
                            <? if ($title) {?>
                                <span class="offer__items--uptext"><?=$title?></span>
                            <?} ?>
                            <? if ($subtitle) {?>
                                <span class="offer__items--sup"><?=$subtitle?></span>
                            <?} ?>
                        </div>
                    </a>
                </div>
            <?endforeach;?>

        </div>
    </div>
<?endif;?>

