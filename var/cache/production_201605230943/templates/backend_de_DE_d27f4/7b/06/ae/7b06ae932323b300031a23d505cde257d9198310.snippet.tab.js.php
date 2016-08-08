<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:31:35
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/components/tab.js" */ ?>
<?php /*%%SmartyHeaderCode:188697718557a254a72a8671-72651148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b06ae932323b300031a23d505cde257d9198310' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/components/tab.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188697718557a254a72a8671-72651148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a254a72b8208_23614043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a254a72b8208_23614043')) {function content_57a254a72b8208_23614043($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    PluginManager
 * @subpackage Components
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.view.components.Tab', {
    extend: 'Ext.container.Container',
    cls: 'shopware-plugin-manager-tab',
    alias: 'widget.shopware-plugin-manager-tab',
    alternateClassName: 'PluginManager.tab.Panel',

    initComponent: function() {
        var me = this;

        me.tabs = me.items;

        me.items = [
            me.createNavigation(),
            me.createContent()
        ];

        me.callParent(arguments);
    },

    disableTab: function(index) {
        var item = this.getNavigationItemByIndex(index);
        if (item) item.disable();
    },

    enableTab: function(index) {
        var item = this.getNavigationItemByIndex(index);

        if (item) item.enable();
    },

    hideTab: function(index) {
        var me = this,
            item = this.getNavigationItemByIndex(index);

        if (item) item.hide();
        this.checkDisplayedTabs();
    },

    checkDisplayedTabs: function() {
        var me = this;
        var somethingShown = false;

        Ext.each(me.navigation.items.items, function(item) {
            if (item.hidden == false) {
                somethingShown = true;
            }
        });

        if (somethingShown) {
            me.show();
        } else {
            me.hide();
        }
    },

    showTab: function(index) {
        var item = this.getNavigationItemByIndex(index);

        if (item) item.show();
        this.checkDisplayedTabs();
    },

    getNavigationItemByIndex: function(index) {
        var me = this;
        var element = null;

        Ext.each(me.navigation.items.items, function(item, i) {
            if (i == index) {
                element = item;
                return true;
            }
        });

        return element;
    },

    createNavigation: function() {
        var me = this, items = [], cls = '';

        Ext.each(me.tabs, function(tab, index) {
            cls = 'tab-navigation-item';
            if (index == 0) {
                cls += ' active';
            }

            var container = Ext.create('PluginManager.container.Container', {
                cls: cls,
                definition: tab,
                html: '<span>'+tab.title+'</span>',
                height: 38,
                index: index,
                listeners: {
                    click: function() {
                        me.navigationClick(index);
                    }
                }
            });

            items.push(container);
        });

        me.navigation = Ext.create('Ext.container.Container', {
            height: 38,
            items: items,
            cls: 'tab-navigation'
        });

        return me.navigation;
    },

    createContent: function() {
        var me = this, cls = '',
            items = [];

        Ext.each(me.tabs, function(content, index) {
            var tab = Ext.create('Ext.container.Container', {
                cls: 'tab-item-content',
                items: [ content ]
            });

            items.push(tab);
        });

        me.cardContainer = Ext.create('Ext.container.Container', {
            layout: 'card',
            cls: 'tab-content',
            items: items
        });

        return me.cardContainer;
    },

    navigationClick: function(index) {
        var me = this;

        if (!me.cardContainer || me.cardContainer.length <= 0) {
            return;
        }

        try {
            me.cardContainer.getLayout().setActiveItem(index);
        } catch (e) {
        }

        Ext.each(me.navigation.items.items, function(item, itemIndex) {
            if (itemIndex == index) {
                item.addCls('active');
            } else {
                item.removeCls('active');
            }
        });
    }
});
//<?php }} ?>