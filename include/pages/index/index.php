<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$src = $_SERVER["DOCUMENT_ROOT"];
$src .= SITE_TEMPLATE_PATH;
$src .= "/include/pages/index/block_";

require($src."main_slider.php");
require($src."categories.php");

if ( ! hasGooAgent() )
{
    require($src."shares.php");
    require($src."catalog.php");
    require($src."projects.php");
    require($src."popular.php");
    require($src."banners.php");
    require($src."menu.php");
}
?>
