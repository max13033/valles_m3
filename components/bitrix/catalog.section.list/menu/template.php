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

//pr( count($arResult) );
//pr($arResult);
?>
<section class="service">
    <div class="container">
        <div class="row">
            <? foreach ($arResult['SECTIONS'] as $SECTION) {?>
                <button
                        class="service__title col-12"
                        type="button"
                        data-toggle="collapse"
                        data-target="#multiCollapseExample<?=$SECTION['ID']?>"
                        aria-expanded="false"
                        aria-controls="multiCollapseExample<?=$SECTION['ID']?>">
                    <?=$SECTION['~NAME']?>
                </button>
                <div class="col-12  service__items collapse multi-collapse" id="multiCollapseExample<?=$SECTION['ID']?>">
                    <? foreach ($SECTION['LINKS'] as $LINK){?>
                        <a href="<?=$LINK['PROPERTY_LINK_VALUE']?>" class="service__item">
                            <?=$LINK['~NAME']?>
                        </a>
                    <?} ?>
                </div>
            <?}?>
        </div>
    </div>
</section>

