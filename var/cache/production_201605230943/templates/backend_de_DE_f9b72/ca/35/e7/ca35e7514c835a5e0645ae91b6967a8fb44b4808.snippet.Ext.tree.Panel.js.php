<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:09
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.tree.Panel.js" */ ?>
<?php /*%%SmartyHeaderCode:11058772957a06335ef0041-66213007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca35e7514c835a5e0645ae91b6967a8fb44b4808' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.tree.Panel.js',
      1 => 1463989428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11058772957a06335ef0041-66213007',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06335ef0cc4_24753382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06335ef0cc4_24753382')) {function content_57a06335ef0cc4_24753382($_smarty_tpl) {?>/**
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
 * Overrides the Ext.tree.Panel to disable for all browsers except Google
 * Chrome which performs well here.
 */
Ext.override(Ext.tree.Panel, {
    animate: Ext.isChrome,

    /**
     * Initializes the component and forces the panel
     * to disable all animations.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.animate = Ext.isChrome;
        me.callOverridden(arguments);
    }
});
<?php }} ?>