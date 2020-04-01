<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="swiper-container s4">
    <div class="swiper-wrapper">
        <?foreach($arResult["ITEMS"] as $arItem):
            $name = $arItem['PROPERTIES']['MOBILE_TITLE']['~VALUE'];
            $picture = SITE_TEMPLATE_PATH . '/assets/build/img/f1.jpg';
            if ($arItem['PROPERTIES']['MOBILE_PICTURE']['VALUE']) {
                $picture = CFile::GetPath($arItem['PROPERTIES']['MOBILE_PICTURE']['VALUE']);
            }
            ?>
            <div class="swiper-slide">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="solution__slide-link">
                    <img src="<?=$picture?>" alt="Slide" class="solution__img">
                    <div class="solution__vektor"></div>
                    <div class="solution__items">
                        <span class="solution__items--title"><?=$name?></span>
                    </div>
                </a>
            </div>
        <?endforeach;?>
    </div>
</div>
