<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    UnaEndAdmin UNA Studio End Admin Pages
 * @ingroup     UnaStudio
 * @{
 */

require_once('./../inc/header.inc.php');
require_once(BX_DIRECTORY_PATH_INC . 'design.inc.php');

bx_import('BxDolLanguages');

bx_require_authentication(true);

$sName = bx_get('name');
if($sName === false)
    $sName = bx_get('lang_value');
$sName = $sName !== false ? bx_process_input($sName) : '';

$sPage = bx_get('page');
$sPage = $sPage !== false ? bx_process_input($sPage) : '';

$oPage = BxTemplStudioLanguage::getObjectInstance($sName, $sPage);

if(($mixedResult = $oPage->checkAction()) !== false) {
    echoJson($mixedResult);
    exit;
}

$oTemplate = BxDolStudioTemplate::getInstance();

$sPageCode = $oPage->getPageCode();
if($sPageCode === false)
    $oTemplate->displayMsg(($sError = $oPage->getError(false)) !== false ? $sError : '_sys_txt_error_occured', true);

$oTemplate->setPageNameIndex($oPage->getPageIndex());
$oTemplate->setPageHeader($oPage->getPageHeader());
$oTemplate->setPageContent('page_caption_code', $oPage->getPageCaption());
$oTemplate->setPageContent('page_attributes', $oPage->getPageAttributes());
$oTemplate->setPageContent('page_menu_code', $oPage->getPageMenu());
$oTemplate->setPageContent('page_main_code', $sPageCode);
$oTemplate->addCss($oPage->getPageCss());
$oTemplate->addJs($oPage->getPageJs());
$oTemplate->getPageCode();
/** @} */
