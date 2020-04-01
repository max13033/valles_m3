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
<? foreach ($arResult['SECTIONS'] as $SECTION) {
    $img = isset($SECTION['UF_CATALOG_MOB_ICON']) ? CFile::GetPath($SECTION['UF_CATALOG_MOB_ICON']) : SITE_TEMPLATE_PATH . '/assets/build/img/plus/1.svg' ;
    ?>
    <div class="col-12">
        <a href="<?=$SECTION['SECTION_PAGE_URL']?>" class = "catalog__link">
            <?  /*  <img src="<?=$img?>" alt="<?=$SECTION['NAME']?>"><?=$SECTION['~NAME']?> */  ?>
            <img src="<?=$img?>" alt="<?=$SECTION['NAME']?>">  <?=$SECTION['UF_MOBILE_MENU_NAME']?$SECTION['UF_MOBILE_MENU_NAME']:$SECTION['~NAME']?>    
        </a>
    </div>
<?}?>

