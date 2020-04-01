<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "menu",
    array(
        "ADD_SECTIONS_CHAIN" => "N",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "COUNT_ELEMENTS" => "N",
        "FILTER_NAME" => "",
        "IBLOCK_ID" => "53",
        "IBLOCK_TYPE" => "aspro_next_content",
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array(
            0 => "",
            1 => "",
        ),
        "SECTION_ID" => "",
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array(
            0 => "",
            1 => "UF_POPULAR",
            2 => "UF_ICON_POPULAR",
            3 => "UF_POPULAR_CATEGORY",
            4 => "",
        ),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "10",
        "VIEW_MODE" => "LIST",
        "COMPONENT_TEMPLATE" => "menu"
    ),
    false
);?>
