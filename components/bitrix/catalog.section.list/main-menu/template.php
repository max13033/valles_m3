<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$arViewModeList = $arResult['VIEW_MODE_LIST'];
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<ul class="b-main-menu-mobile">
    <?
    $intCurrentDepth = 1;
    $boolFirst = true;
    foreach ($arResult['SECTIONS'] as &$arSection)
    {
        if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
        {
            if (0 < $intCurrentDepth) {
                echo
                    "\n",
                    str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']),
                    '<ul>';
            }
        }
        elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL'])
        {
            if (!$boolFirst) echo '</li>';
        }
        else
        {
            while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL'])
            {
                echo
                    '</li>',
                    "\n",
                    str_repeat("\t", $intCurrentDepth),
                    '</ul>',
                    "\n",
                    str_repeat("\t", $intCurrentDepth - 1);

                $intCurrentDepth--;
            }
            echo str_repeat("\t", $intCurrentDepth - 1),
            '</li>';
        }

        echo( !$boolFirst ? "\n" : ''),
            str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);?>

                <li>
                    <a
                        class="b-mobile-menu__item b-mobile-menu__item-open"
                        href="<? echo $arSection["SECTION_PAGE_URL"]; ?>">
                        <?if ($arSection['RELATIVE_DEPTH_LEVEL'] === 1){
                            $image = intval($arSection['UF_CATALOG_MOB_ICON']) > 0 ? CFile::GetPath($arSection['UF_CATALOG_MOB_ICON']) : SITE_TEMPLATE_PATH . '/assets/build/img/plus/1.svg'
                            ?>
                            <img data-src="<?=$image?>" class="b-mobile--icons">
                        <?}?>
                        <div><? echo $arSection["NAME"]; ?></div>
                        <div></div>         <!--  отображает стрелку   вместо after -->
                    </a>
        <?
        $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
        $boolFirst = false;
    }

        unset($arSection);
        while ($intCurrentDepth > 1) {
            echo '</li>'
            ,
            "\n"
            ,
            str_repeat("\t", $intCurrentDepth)
            ,
            '</ul>'
            ,
            "\n"
            ,
            str_repeat("\t", $intCurrentDepth - 1);

            $intCurrentDepth--;
        }

        if ($intCurrentDepth > 0) {
            echo '</li>', "\n";
        }

        ?>
</ul>


