<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    UnaBaseView UNA Base Representation Classes
 *
 * @{
 */

class BxBaseMenuCustom extends BxTemplMenuMoreAuto
{
    protected $_sTmplContent;
    protected $_sTmplContentItem;

    public function __construct($aObject, $oTemplate = false)
    {
        parent::__construct($aObject, $oTemplate);

        $this->_sTmplContent = $this->_oTemplate->getHtml($this->getTemplateName());
        $this->_sTmplContentItem = $this->_oTemplate->getHtml($this->getTemplateNameItem());

        $this->_sTmplNameItemMore = 'menu_custom_item_more.html';
    }

    /**
     * Get template name with checking for custom template related to exactly this menu object.
     * @return string with template name.
     */
    public function getTemplateNameItem($sName = '')
    {
        if(empty($sName))
            $sName = 'menu_custom_item.html';

        $sNameCustom = str_replace('.html', '_' . $this->_sObject . '.html', $sName);
        return $this->_oTemplate->isHtml($sNameCustom) ? $sNameCustom : $sName;
    }

    public function setTemplateById ($iTemplateId)
    {
        $sTemplate = $this->_aObject['template'];

        switch($iTemplateId) {
            case BX_DB_MENU_TEMPLATE_TABS:
                $iTemplateId = BX_MENU_TEMPLATE_CUSTOM_HOR;
                break;

            case BX_DB_MENU_TEMPLATE_POPUP:
                $iTemplateId = BX_MENU_TEMPLATE_CUSTOM_VER;
                break;
        }

        parent::setTemplateById ($iTemplateId);

        if($sTemplate != $this->_aObject['template'])
            $this->_sTmplContent = $this->_oTemplate->getHtml($this->getTemplateName());
    }

    protected function _getCode($sTmplName, $aTmplVars)
    {
        if($sTmplName != $this->_aObject['template'])
            return parent::_getCode($sTmplName, $aTmplVars);

        return $this->_oTemplate->parseHtmlByContent($this->_sTmplContent, $aTmplVars);
    }

    protected function _getMenuItem ($aItem)
    {
    	if (!$this->_isActive($aItem) || !$this->_isVisible($aItem))
            return false;

    	$sMethod = '_getMenuItem' . str_replace(' ', '', ucwords(str_replace('-', ' ', $aItem['name'])));
        $bMethod = method_exists($this, $sMethod);

        $mixedItem = false;
        if($bMethod)
            $mixedItem = $this->$sMethod($aItem);

    	if($mixedItem === true || !$bMethod) {
            $aItem = parent::_getMenuItem($aItem);
            if($aItem === false)
                return false;

            $mixedItem = $this->{'_getMenuItemDefault' . ($this->_bIsApi ? 'Api' : '')}($aItem);
    	}

    	if(empty($mixedItem))
            return false;

        if($this->_bIsApi)
            return $mixedItem;

        $sItem = $sClass = '';
        if(is_array($mixedItem)) 
            list($sItem, $sClass) = $mixedItem;
        else
            $sItem = $mixedItem;

        if(!empty($sClass))
            $sClass = ' ' . $sClass;
        if($this->_isSelected($aItem))
            $sClass .= ' bx-menu-tab-active';

        $sClass .= $this->_getVisibilityClass($aItem);

        return [
            'name' => $aItem['name'],
            'class' => $sClass,
            'item' => $sItem
        ];
    }

    protected function _getMenuItemMoreAuto ($aItem)
    {
        $aItem['onclick'] = $this->_sJsObjectMoreAuto . '.more(this);';

        $aItem = parent::_getMenuItem($aItem);
        if($aItem === false)
            return false;

        if($this->_bIsApi)
            return $aItem;

        return $this->_oTemplate->parseHtmlByContent($this->_getTmplContentItemMore(), array(
            'item' => $this->_getMenuItemDefault($aItem),
            'popup' => BxTemplFunctions::getInstance()->transBox($this->_aHtmlIds['more_auto_popup'], $this->_oTemplate->parseHtmlByContent($this->_getTmplContentItemMorePopup(), array(
                'content' => ''
            )), true)
        ));
    }

    protected function _getMenuItemDefault ($aItem)
    {
        if(!isset($aItem['class_wrp']))
            $aItem['class_wrp'] = '';

        if(!isset($aItem['class_link']))
            $aItem['class_link'] = '';

        return $this->_oTemplate->parseHtmlByContent($this->_getTmplContentItem(), $aItem);
    }

    protected function _getMenuItemDefaultApi ($aItem)
    {
        return $aItem;
    }

    protected function _getTmplContentItem()
    {
        return $this->_sTmplContentItem;
    }
}

/** @} */
