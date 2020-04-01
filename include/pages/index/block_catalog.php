<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<section class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <? area('catalog_title'); ?>
            </div>
            <? global $sectionsCatalogSectionsFilter;

            $sectionsCatalogSectionsFilter = Array(
                'UF_VIEW_MOBILE_CAT' => 35
            );

            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "section_category",
                array(
                    "ADD_SECTIONS_CHAIN" => "N",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "COUNT_ELEMENTS" => "N",
                    "FILTER_NAME" => "sectionsCatalogSectionsFilter",
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
                        1 => "UF_VIEW_MOBILE_CAT",
                        2 => "UF_CATALOG_MOB_ICON",
                        // 3 => ""
                        3 => "UF_MOBILE_MENU_NAME",
                    ),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "10",
                    "VIEW_MODE" => "LIST",
                    "COMPONENT_TEMPLATE" => "section_category"
                ),
                false
            );?>
        </div>
    </div>
</section>
