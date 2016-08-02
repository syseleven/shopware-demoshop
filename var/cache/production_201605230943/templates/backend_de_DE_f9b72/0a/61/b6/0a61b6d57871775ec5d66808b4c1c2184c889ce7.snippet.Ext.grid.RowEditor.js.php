<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:09
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.grid.RowEditor.js" */ ?>
<?php /*%%SmartyHeaderCode:62410396357a06335efc9c0-81648973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a61b6d57871775ec5d66808b4c1c2184c889ce7' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.grid.RowEditor.js',
      1 => 1463989428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62410396357a06335efc9c0-81648973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06335efe8f1_51907117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06335efe8f1_51907117')) {function content_57a06335efe8f1_51907117($_smarty_tpl) {?>/**
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
Ext.override(Ext.grid.RowEditor, {
    getFloatingButtons: function() {
       var me = this,
           cssPrefix = Ext.baseCSSPrefix,
           btnsCss = cssPrefix + 'grid-row-editor-buttons',
           plugin = me.editingPlugin,
           btns;

       if (!me.floatingButtons) {
           btns = me.floatingButtons = new Ext.Container({
               renderTpl: [
                   '<div class="{baseCls}-ml"></div>',
                   '<div class="{baseCls}-mr"></div>',
                   '<div class="{baseCls}-bl"></div>',
                   '<div class="{baseCls}-br"></div>',
                   '<div class="{baseCls}-bc"></div>',
                   '{%this.renderContainer(out,values)%}'
               ],
               width: 200,
               renderTo: me.el,
               baseCls: btnsCss,
               layout: {
                   type: 'hbox',
                   align: 'middle'
               },
               defaults: {
                   flex: 1,
                   margins: '0 1 0 1'
               },
               items: [{
                   itemId: 'update',
                   xtype: 'button',
                   cls: 'primary small',
                   handler: plugin.completeEdit,
                   scope: plugin,
                   text: me.saveBtnText,
                   disabled: !me.isValid,
                   minWidth: Ext.panel.Panel.prototype.minButtonWidth
               }, {
                   xtype: 'button',
                   handler: plugin.cancelEdit,
                   scope: plugin,
                   cls: 'secondary small',
                   text: me.cancelBtnText,
                   minWidth: Ext.panel.Panel.prototype.minButtonWidth
               }]
           });

           // Prevent from bubbling click events to the grid view
           me.mon(btns.el, {
               // BrowserBug: Opera 11.01
               //   causes the view to scroll when a button is focused from mousedown
               mousedown: Ext.emptyFn,
               click: Ext.emptyFn,
               stopEvent: true
           });
       }
       return me.floatingButtons;
   }
})
<?php }} ?>