<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

</main>

<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="footer__title"><? area('footer_social_title') ?></h4>
                </div>
                <div class="col-12 footer__socials">
                    <? area('footer_social_icons') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12"><? area('footer_phone') ?></div>
                <div class="col-12"><? area('footer_email') ?></div>
                <div class="col-12"><? area('footer_address') ?></div>
                <div class="col-12"><? area('footer_address_2') ?></div>
            </div>
        </div>
    </section>
    <? /*<div class="phone"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/vektorBL.png" alt="phone"></div> */?>  <!--    телефонная трубка внизу   -->
    
<!--     <div class="phone__window">
        <a href="#bx24_call" onclick="vallesMobile.openB24Chat()"  class="phone__item"><img src="< ?=SITE_TEMPLATE_PATH?>/assets/build/img/fu1.svg" alt="img">Обратная связь</a>
        <a href="#whatsapp" target="_blank" class="phone__item"><img src="< ?=SITE_TEMPLATE_PATH?>/assets/build/img/fu2.svg" alt="img"> <span>Прислать список товаров в WhatsApp</span> </a>
        <a href="#bx24_question-answ" onclick="vallesMobile.openB24Chat()" class="phone__item"><img src="< ?=SITE_TEMPLATE_PATH?>/assets/build/img/fu3.svg" alt="img">Онлайн-чат</a>
        <a href="#bx24_order-call" onclick="vallesMobile.openB24Callback()" class="phone__item"><img src="< ?=SITE_TEMPLATE_PATH?>/assets/build/img/fu4.svg" alt="img">Заказать звонок</a>
    </div> -->

    <div class="btntop"><img src="<?=SITE_TEMPLATE_PATH?>/assets/build/img/vektorBR.png" alt="phone"></div>
</footer>

<? if (!hasGooAgent()) {?>
    <div class = "popup-background">    </div>      <!-- фон меню, при нажати на который меню скрывается -->
    <section class="popup">     <!-- выплывающее меню -->
        <div class="container">
            <div>
                <div>
                    <h2 class="popup__head-title">Каталог</h2>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "main-menu",
                    Array(
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "COUNT_ELEMENTS" => "N",
                        "FILTER_NAME" => "",
                        "IBLOCK_ID" => "17",
                        "IBLOCK_TYPE" => "aspro_next_catalog",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("", ""),
                        "SECTION_ID" => "",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("UF_CATALOG_MOB_ICON", ""),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "4",
                        "VIEW_MODE" => "LIST"
                    )
                );?>

            </div>
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "menu_popup",
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
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <? area('footer_phone') ?>
                </div>
                <div class="col-12">
                    <? area('footer_email') ?>
                    <div class="col-12">
                        <? area('footer_address') ?>
                    </div>
                    <div class="col-12">
                        <? area('footer_address_2') ?>
                    </div>
                </div>
            </div>
        </div>   <!--   =max=  дописал закрывающий тег    -->
    </section>
<?} ?>

</div>

<? if (!hasGooAgent()) {?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Личный кабинет</h5>
                </div>
                <div class="modal-body">
                    <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "mobile",
                        Array(
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "FORGOT_PASSWORD_URL" => "/auth/forgot-password/",
                            "PROFILE_URL" => "/personal/",
                            "REGISTER_URL" => "/auth/registration/",
                            "SHOW_ERRORS" => "N"
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script async src="<?=SITE_TEMPLATE_PATH?>/assets/build/js/script.min.js?v=dwjadakwd" type="text/javascript"></script>
    <script async src="<?=SITE_TEMPLATE_PATH?>/script.js?v=dwjadakwd" type="text/javascript"></script>

    <script>
        (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b7746147/crm/site_button/loader_2_bvixlm.js');

        // setTimeout(function () {
        //     vallesMobile.renderB25WhatsApp()

        //     $('.b24-widget-button-block, .b24-widget-button-inner-mask').hide()
        //     $('.bx-livechat-control-btn-close').css('background', 'red')
        //     $(document).on('click', '.bx-livechat-control-btn-close', function () {
        //         alert()
        //     })
        //     $('.bx-livechat-control-box').click(function () {
        //         alert()
        //         //document.querySelectorAll('.b24-widget-button-inner-item').click()
        //     })

        // }, 2000)
    </script>

<?} ?>

</body>
</html>
