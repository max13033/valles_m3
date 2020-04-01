<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as $indexSection => $SECTION) {

    $arSelectMenuItems = Array("ID", "NAME", "PROPERTY_LINK");
    $arFilterMenuItems = Array(
        "IBLOCK_ID" => IntVal($arParams['IBLOCK_ID']),
        "ACTIVE" => "Y",
        "IBLOCK_SECTION_ID" => $SECTION['ID'],
    );
    $resMenuItems = CIBlockElement::GetList([], $arFilterMenuItems, false, Array("nPageSize"=>50), $arSelectMenuItems);
    while($obMenuItems = $resMenuItems->GetNextElement())
    {
        $arResult['SECTIONS'][ $indexSection ]['LINKS'][] = $obMenuItems->GetFields();
    }

//    pr($arResult['SECTIONS']);


}
?>
