<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:09
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.form.field.ComboBox.js" */ ?>
<?php /*%%SmartyHeaderCode:148080264857a06335ee82e2-06824693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37fe54422d68b5a27d1760fc06c1a5eeb1f68388' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.form.field.ComboBox.js',
      1 => 1463989428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148080264857a06335ee82e2-06824693',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06335ee9208_63885169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06335ee9208_63885169')) {function content_57a06335ee9208_63885169($_smarty_tpl) {?>/**
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
 * Shopware UI - ComboBox Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element.
 */
Ext.override(Ext.form.field.ComboBox,
/** @lends Ext.form.field.ComboBox */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

    /**
     * Additional suffix which will be added
     * to the value as a suffix
     */
    valueSuffix: '-table',

    /**
     * Adds an additional HTML5 "data"-attribute
     * to easier address the element in our
     * selenium tests.
     *
     * @public
     * @return void
     */
    afterRender: function() {
        var me = this;
        me.callOverridden(arguments);

        if(me.el.dom) {
            var dom = me.el.dom,
                value = (me.listConfig) ? me.listConfig.action : me.name;

            dom.setAttribute('data-' + me.dataSuffix, value + me.valueSuffix);
        }
    }
});
<?php }} ?>