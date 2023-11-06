<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    UnaBaseView UNA Base Representation Classes
 * @{
 */

/**
 * Menu representation.
 * @see BxDolMenu
 */
class BxBaseMenuProfileStats extends BxTemplMenuAccountNotifications
{
    protected $_iMenuItemsMin;

    public function __construct ($aObject, $oTemplate)
    {
        parent::__construct ($aObject, $oTemplate);

        $this->_bDisplayAddons = true;
        $this->_iMenuItemsMin = 10;
    }

    public function getMenuItems ()
    {
        $aItems = parent::getMenuItems();
        if(empty($aItems) || !is_array($aItems) || $this->_bIsApi)
            return $aItems;

        $iMaxNum = count($aItems);
        if($iMaxNum <= $this->_iMenuItemsMin)
            return $aItems;

        $mixedCollpsed = $this->getUserChoiceCollapsed();
        $bCollpsed = $mixedCollpsed === false || $mixedCollpsed == 1;

        for($i = $this->_iMenuItemsMin; $i < $iMaxNum; $i++)
            $aItems[$i]['class_add'] .= ' bx-mi-aux' . ($bCollpsed ? ' bx-mi-hidden' : '');

        $aShowMoreLinks = [
            'more' => ['title' => '_sys_show_more', 'icon' => 'chevron-down', 'class' => $bCollpsed ? '' : 'bx-mi-hidden'],
            'less' => ['title' => '_sys_show_less', 'icon' => 'chevron-up', 'class' => !$bCollpsed ? '' : 'bx-mi-hidden']
        ];

        foreach($aShowMoreLinks as $sLink => $aLink)
            $aItems[] = array(
                'class_add' => 'bx-psmi-show-' . $sLink . ' ' . $aLink['class'],
                'name' => 'show-' . $sLink,
                'title' => _t($aLink['title']),
                'link' => 'javascript:void(0)',
                'bx_if:onclick' => [
                    'condition' => true,
                    'content' => [
                        'onclick' => 'bx_menu_show_more_less(this, \'' . $this->_sObject . '\', \'.bx-menu-object-' . $this->_sObject . '\')',
                    ]
                ],
                'attrs' => '',
                'bx_if:image' => [
                    'condition' => false,
                    'content' => ['icon_url' => ''],
                ],
                'bx_if:image_inline' => [
                    'condition' => false,
                    'content' => ['image' => ''],
                ],
                'bx_if:icon' => [
                    'condition' => true,
                    'content' => ['icon' => $aLink['icon']],
                ],
                'bx_if:icon-html' => [
                    'condition' => false,
                    'content' => ['icon-a' => ''],
                ],
                'bx_if:icon-a' => [
                    'condition' => false,
                    'content' => ['icon-a' => ''],
                ],
                'bx_if:addon' => [
                    'condition' => false,
                    'content' => []
                ]
            );

        return $aItems;
    }

    protected function getMenuItemsRaw ()
    {
        $aItems = $this->_oQuery->getMenuItemsBy(array(
            'type' => 'set_name', 
            'set_name' => $this->_aObject['set_name']
        ));

        $aDuplicates = $this->_oQuery->getMenuItemsBy(array(
            'type' => 'set_name_duplicates', 
            'set_name' => $this->_aObject['set_name']
        ));

        $oProfile = BxDolProfile::getInstance();
        if(!$oProfile)
            return array();

        $sModule = $oProfile->getModule();

        $aResult = array();
        foreach($aItems as $aItem) {
            if(in_array($aItem['name'], $aDuplicates) && $aItem['module'] != $sModule)
                continue;
            
            $aResult[$aItem['name']] = $aItem;
        }

        return $aResult;
    }
    
    protected function _getMenuItem($a)
    {
        $mixedResult = parent::_getMenuItem($a);

        if($mixedResult !== false && !empty($mixedResult['link']) && strpos($mixedResult['link'], 'javascript:') === false)
            $mixedResult['link'] = bx_append_url_params($mixedResult['link'], [
                'owner' => 1
            ]);

        return $mixedResult;
    }
}

/** @} */
