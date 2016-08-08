<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:50:24
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/window.js" */ ?>
<?php /*%%SmartyHeaderCode:198888843157a259106cab06-17702832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7fda3807a5cad43d7d4be47a597778e7105d100' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/window.js',
      1 => 1470256597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198888843157a259106cab06-17702832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a259106d1270_37171232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a259106d1270_37171232')) {function content_57a259106d1270_37171232($_smarty_tpl) {?>/**
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
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.view.detail.Window', {
    extend: 'Enlight.app.Window',

    cls: 'plugin-manager-window detail-window',
    alias: 'widget.plugin-manager-detail-window',

    height: '90%',
    minWidth: 995,
    autoScroll: true,
    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    initComponent: function() {
        var me = this;

        me.detailContainer = Ext.create('Shopware.apps.PluginManager.view.detail.Container');

        me.items = [ me.detailContainer ];

        me.callParent(arguments);

        me.on('afterrender', function() {
            //fix to prevent scrolling after tab change
            me.setHeight(me.getEl().dom.clientHeight + 1);
        });

    },

    setActivePriceTab: function(priceName) {
        var me = this;

        if (!me.detailContainer.pricesContainer) {
            return;
        }
        var tabIndex = me.detailContainer.pricesContainer.tabIndex[priceName];
        me.detailContainer.pricesContainer.navigationClick(tabIndex);
    },

    loadRecord: function(plugin) {
        var me = this;

        me.setTitle(plugin.get('label'));

        me.plugin = plugin;
        me.detailContainer.loadRecord(plugin);
    }
});
//<?php }} ?>