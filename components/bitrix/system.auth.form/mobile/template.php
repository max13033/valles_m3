<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<div class="bx-system-auth-form">

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR']) ShowMessage($arResult['ERROR_MESSAGE']);
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

<form
        name="system_auth_form<?=$arResult["RND"]?>"
        class="modal-form row"
        method="post"
        target="_top"
        action="<?=$arResult["AUTH_URL"]?>">

        <?if($arResult["BACKURL"] <> ''):?>
            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
        <?endif?>

        <?foreach ($arResult["POST"] as $key => $value):?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
        <?endforeach?>
        <input type="hidden" name="AUTH_FORM" value="Y" />
        <input type="hidden" name="TYPE" value="AUTH" />

        <div class="col-12">
            <input type="text"
                   name="USER_LOGIN"
                   maxlength="50"
                   value=""
                   size="17"
                   placeholder="<?=GetMessage("AUTH_LOGIN")?>">

            <script>
                BX.ready(function() {
                    var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                    if (loginCookie)
                    {
                        var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                        var loginInput = form.elements["USER_LOGIN"];
                        loginInput.value = loginCookie;
                    }
                });
            </script>
        </div>
        <div class="col-12">
            <input type="password"
                   name="USER_PASSWORD"
                   maxlength="200"
                   size="15"
                   autocomplete="off"
                   placeholder="<?=GetMessage("AUTH_PASSWORD")?>">

            <?if($arResult["SECURE_AUTH"]):?>
                <span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                <noscript>
    				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
    					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
    				</span>
                </noscript>
                <script type="text/javascript">
                    document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
                </script>
            <?endif?>
            <input type="submit" class="modal-btn" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" />
        </div>

        <div class="col-12 modal-box">
            <?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" style = "display: none;">
                
                <label for="USER_REMEMBER_frm"> 
                    <div>
                        <img src = "<?=SITE_TEMPLATE_PATH?>/assets/build/img/arrowB.png" >
                    </div>   
                    <?echo GetMessage("AUTH_REMEMBER_SHORT")?>
                </label>

                <noindex>
                    <a
                            class="modal-pass"
                            href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>"
                            rel="nofollow">
                                <?=GetMessage("AUTH_FORGOT_PASSWORD_2")?>
                    </a>
                </noindex>                
            <?endif?>
        </div>
    </form>

    <div class="row">
        <!-- Авторизация через соцсети -->
        <?
        if($arResult["AUTH_SERVICES"]):?>
            <p class="modal-enter-title col-12"><?=GetMessage("socserv_as_user_form")?></p>
            <?
            $APPLICATION->IncludeComponent('bitrix:socserv.auth.form',
                'flat',
                array(
                    'AUTH_SERVICES' => $arResult['AUTH_SERVICES'],
                    'AUTH_URL' => $arResult['CURR_URI']
                ),
                $component,
                array('HIDE_ICONS' => 'Y')
            );
            ?>
        <?endif?>
        <!-- / Авторизация через соцсети -->
        <div class="col-12">
            <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
                <noindex>
                    <div class = "modal-reg-div">
                        <a
                                class="modal-reg"
                                href="<?=$arResult["AUTH_REGISTER_URL"]?>"
                                rel="nofollow">
                            <?=GetMessage("AUTH_REGISTER")?>
                        </a>
                    </div>    
                </noindex>
            <?endif?>
        </div>
        <p class="col-12 modal-p">Вам будет доступно управление рассылками, использование персональных данных, связь профиля с аккаунтом соцсети и т.д. </p>
    </div>

</form>



<?
elseif($arResult["FORM_TYPE"] == "otp"):
?>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="OTP" />
	<table width="95%">
		<tr>
			<td colspan="2">
			<?echo GetMessage("auth_form_comp_otp")?><br />
			<input type="text" name="USER_OTP" maxlength="50" value="" size="17" autocomplete="off" /></td>
		</tr>
<?if ($arResult["CAPTCHA_CODE"]):?>
		<tr>
			<td colspan="2">
			<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
			<input type="text" name="captcha_word" maxlength="50" value="" /></td>
		</tr>
<?endif?>
<?if ($arResult["REMEMBER_OTP"] == "Y"):?>
		<tr>
			<td valign="top"><input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" /></td>
			<td width="100%"><label for="OTP_REMEMBER_frm" title="<?echo GetMessage("auth_form_comp_otp_remember_title")?>"><?echo GetMessage("auth_form_comp_otp_remember")?></label></td>
		</tr>
<?endif?>
		<tr>
			<td colspan="2"><input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><noindex><a href="<?=$arResult["AUTH_LOGIN_URL"]?>" rel="nofollow"><?echo GetMessage("auth_form_comp_auth")?></a></noindex><br /></td>
		</tr>
	</table>
</form>

<?
else:
?>

<form action="<?=$arResult["AUTH_URL"]?>">
	<table width="95%">
		<tr>
			<td align="center">
				<?=$arResult["USER_NAME"]?><br />
				[<?=$arResult["USER_LOGIN"]?>]<br />
				<a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />
			</td>
		</tr>
		<tr>
			<td align="center">
			<?foreach ($arResult["GET"] as $key => $value):?>
				<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>
			<input type="hidden" name="logout" value="yes" />
			<input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
			</td>
		</tr>
	</table>
</form>
<?endif?>
</div>
