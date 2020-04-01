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

<div class="swiper-container s5">
    <div class="swiper-wrapper">
        <?foreach($arResult["ITEMS"] as $arItem):
            $name = $arItem['~NAME'];
            $picture = $arItem['PREVIEW_PICTURE']['SRC'];
            
            if (!empty($arItem["PROPERTIES"]["PICTURE_SVG"]['VALUE'])) {    //  если в свойствах есть SVG картинка - отображать её вместо JPG
                $picture = CFile::GetPath($arItem["PROPERTIES"]["PICTURE_SVG"]['VALUE']);
            }            
            ?>
            <div class="swiper-slide">
                <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" class="advantages__slide-link">
                    <img src="<?=$picture?>" alt="Slide" class="advantages__img">
                    <!-- <div class="advantages__vektor"></div> -->             <!-- белый фон  -->
                <?  /*  <div class="advantages__items">     название слайдера внутри белого фона
                        <span class="advantages__items--title"><?=$name?></span>
                    </div>  */  ?>
                </a>
            </div>
        <?endforeach;?>
    </div>
</div>
