<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<section class="popular">
    <h2 class="popular__title">
        <? area('category_title'); ?>
    </h2>

    <? global $sectionsPopularSectionsFilter;

    $sectionsPopularSectionsFilter = Array(
        'UF_POPULAR_CATEGORY' => 34
    );

    $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "popular_category",
        array(
            "ADD_SECTIONS_CHAIN" => "N",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "COUNT_ELEMENTS" => "N",
            "FILTER_NAME" => "sectionsPopularSectionsFilter",
            "IBLOCK_ID" => "17",
            "IBLOCK_TYPE" => "aspro_next_catalog",
            "SECTION_CODE" => "",
            "SECTION_FIELDS" => array(
                0 => "",
                1 => "",
            ),
            "SECTION_ID" => "",
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array(
                0 => "UF_POPULAR",
                1 => "UF_ICON_POPULAR",
                2 => "UF_POPULAR_CATEGORY",
                3 => "",
            ),
            "SHOW_PARENT_NAME" => "Y",
            "TOP_DEPTH" => "10",
            "VIEW_MODE" => "LIST",
            "COMPONENT_TEMPLATE" => "popular_category"
        ),
        false
    );?>
</section>
