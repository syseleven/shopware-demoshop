<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:39
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.button.Button.js" */ ?>
<?php /*%%SmartyHeaderCode:7132565757a2519f869599-44778586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '714f2374fb8ada60e32e53f71e4e2d27b4d65255' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.button.Button.js',
      1 => 1463989428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7132565757a2519f869599-44778586',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a2519f871166_51744844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2519f871166_51744844')) {function content_57a2519f871166_51744844($_smarty_tpl) {?>/**
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
 */

/**
 * Overrides the Ext.button.Button to provide
 * an additional HTML5 data attribute to provide
 * a better adressing in selenium ui tests.
 */
Ext.override(Ext.button.Button, {

    /** Suffix for the data attribute */
    dataSuffix: 'action',

    afterRender: function() {
        var me = this;
        me.callOverridden(arguments);

        if(me.action) {
            var dom = me.getEl().dom.children[0].children[0];
            dom.setAttribute('data-' + me.dataSuffix, me.action);
        }
    },

    initComponent: function() {
        var me = this;
        me.callParent(arguments);

        me.addEvents(

            'click',

            'toggle',

            'mouseover',

            'mouseout',

            'menushow',

            'menuhide',

            'menutriggerover',

            'menutriggerout'
        );

        if (me.menu) {
            // Flag that we'll have a splitCls
            me.split = true


            // retrieve menu by id or instantiate instance if needed
            me.menu = Ext.menu.Manager.get(me.menu);

            // Add an additional class to the menu for styling purpose
            if(me.menuCls && me.menuCls.length) {
                me.menu.setUI('default shopware-ui');
                me.menu.addCls(me.menuCls);
            }

            me.menu.ownerCt = me;
        }

        // Accept url as a synonym for href
        if (me.url) {
            me.href = me.url;
        }

        // preventDefault defaults to false for links
        if (me.href && !me.hasOwnProperty('preventDefault')) {
            me.preventDefault = false;
        }

        if (Ext.isString(me.toggleGroup)) {
            me.enableToggle = true;
        }
    },

    /**
     * Shows this button's menu (if it has one)
     */
    showMenu: function() {
        var me = this;
        if (me.rendered && me.menu) {
            if (me.tooltip && me.getTipAttr() != 'title') {
                Ext.tip.QuickTipManager.getQuickTip().cancelShow(me.btnEl);
            }
            if (me.menu.isVisible()) {
                me.menu.hide();
            }

            if(me.menu && me.menuOffset) {
                me.menu.showBy(me.el, me.menuAlign, me.menuOffset);
            } else {
                me.menu.showBy(me.el, me.menuAlign);
            }
        }
        return me;
    }
});
<?php }} ?>