<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $USER;
global $APPLICATION;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowMeta("viewport");?>
    <?$APPLICATION->ShowMeta("HandheldFriendly");?>
    <?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
    <?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
    <?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>
    <? if (!hasGooAgent()) {?>
        <?=$APPLICATION->ShowHead();?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <?}?>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="<?=SITE_TEMPLATE_PATH?>/assets/build/css/all.css?v=dkjawdawhk" rel="stylesheet" />
    <? if (!hasGooAgent()) {?>
        <script>
            (function(d) {
                var s = d.createElement('script');
                s.defer = true;
                s.src = 'https://multisearch.io/plugin/10685';
                if (d.head) d.head.appendChild(s);
            })(document);
            cross.onclick = function(){
                document.getElementById('search_popup').style.left = '150%';
            }
            var search_a = document.getElementsByClassName('search')[0];
            search_a.onclick = function(){
                document.getElementById('search_popup').style.left = '0'
            }   
        </script>
        <!-- <scripr src = "< ?=SITE_TEMPLATE_PATH?>/assets/build/js/custom.js">   </scripr> -->
    <?} ?>
</head>
<body>
<? if (!hasGooAgent()) {?>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?} ?>
<div class="b-page-wrapper">
    <header>
        <div class="topdesk container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 class="topdesk__title">ИНТЕРНЕТ-ДИСКАУНТЕР</h3>
                    <p class="topdesk__text">строительных материалов и товаров для дома</p>
                </div>
            </div>
        </div>
        <div style = "height: 48px;">   <!-- добавил блок, чтобы при прокрутке меню, переходя в fixed не прыгало -->
            <div class="header-menu container">
                <div class="row d-flex align-items-end justify-content-between ">
                    <div class="col-4 d-flex justify-content-start">
                        <a href="javascript:void(0);" class="icon-B"><span></span><span></span><span></span></a>
                        <a href="javascript:void(0);" class="search"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/Search.svg" alt=""></a>
                        
                        <div id = "search_popup">    <!-- выплывающая панель поиска -->
                            <div class = "search_button search-input-div">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/Search.svg" alt="">
                            </div>
                            <div class = "search-input-div">
                                <form>
                                    <input type = "text" placeholder="Ищу выгоду">
                                </form>
                            </div>
                            <div id = "cross">
                                <span> &#215; </span>
                            </div>    
                        </div>
                    </div>
                    <div>
                        <? area('header_logo') ?>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <button class="person" data-toggle="modal" data-target="#exampleModal"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/PersonHeader.svg" alt="User"></button>
                        <a href="/basket" class="cart"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/CartHeader.svg" alt="cart"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <? /*<header>
        <div class="topdesk container-fluid">
            <div class="row">
                <div class="col-12">
                    <h3 class="topdesk__title"><? area('header_title') ?></h3>
                    <p class="topdesk__text"><? area('header_subtitle') ?></p>
                </div>
            </div>
        </div>

        <div class="header-menu container">
            <div class="row d-flex align-items-end">
                <div class="col-4 d-flex justify-content-start">
                    <a href="javascript:void(0);" class="icon-B"><span></span><span></span><span></span></a>
                    <a href="javascript:void(0);" class="icon-search"></a>
                </div>
                <div class="">
                    <? area('header_logo') ?>
                </div> 
                <div class="col-4 d-flex justify-content-end">
                    <?if ($USER->IsAuthorized()) {?>
                        <a href="/personal/">
                            <div class="icon-person"></div>
                        </a>
                    <?}else{?>
                        <div class="icon-person">
                            <button data-toggle="modal" data-target="#exampleModal"></button>
                        </div>
                    <?}?>
                    <a href="/basket/" class="icon-cart"></a>
                </div>
            </div>
        </div>
    </header> */ ?>
    <main>
