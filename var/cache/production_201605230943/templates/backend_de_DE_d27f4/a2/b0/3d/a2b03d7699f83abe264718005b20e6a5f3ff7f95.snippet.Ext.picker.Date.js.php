<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:39
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.picker.Date.js" */ ?>
<?php /*%%SmartyHeaderCode:163174276457a2519f908a67-71208925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2b03d7699f83abe264718005b20e6a5f3ff7f95' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.picker.Date.js',
      1 => 1463989428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163174276457a2519f908a67-71208925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a2519f90cdf8_16307245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2519f90cdf8_16307245')) {function content_57a2519f90cdf8_16307245($_smarty_tpl) {?>/**
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
Ext.override(Ext.picker.Date, {

    /**
     * Overrides the todayBtn to use our
     * fancy and shiny button kit.
     *
     * @private
     * @return void
     */
    beforeRender: function () {
        var me = this;
        me.callOverridden();
        if(me.todayBtn) {
            me.todayBtn.addCls('small').addCls('secondary');
        }
    }
});
<?php }} ?>