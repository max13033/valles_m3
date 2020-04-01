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
<div class="row popup__select">
    <? foreach ($arResult['SECTIONS'] as $SECTION) {?>
        <button
                class="popup__title col-12"
                type="button"
                data-toggle="collapse"
                data-target="#multi1CollapseExample<?=$SECTION['ID']?>"
                aria-expanded="false"
                aria-controls="multi1CollapseExample<?=$SECTION['ID']?>">
            <?=$SECTION['~NAME']?>
        </button>
        <div class="col-12  popup__items collapse multi-collapse" id="multi1CollapseExample<?=$SECTION['ID']?>">
            <? foreach ($SECTION['LINKS'] as $LINK){?>
                <a href="<?=$LINK['PROPERTY_LINK_VALUE']?>" class="popup__item">
                    <?=$LINK['~NAME']?>
                </a>
            <?} ?>
        </div>
    <?}?>
</div>

