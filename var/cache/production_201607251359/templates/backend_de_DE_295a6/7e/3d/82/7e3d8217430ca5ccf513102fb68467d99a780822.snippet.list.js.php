<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:31
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article_list/controller/list.js" */ ?>
<?php /*%%SmartyHeaderCode:116411795957a24c330d1ca5-50314364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3d8217430ca5ccf513102fb68467d99a780822' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article_list/controller/list.js',
      1 => 1469447990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116411795957a24c330d1ca5-50314364',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c331189a3_22904666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c331189a3_22904666')) {function content_57a24c331189a3_22904666($_smarty_tpl) {?>/**
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
 * The list controller handles the main filter and product list
 */
//
//
Ext.define('Shopware.apps.ArticleList.controller.List', {

    /**
     * The parent class that this class extends.
     * @string
     */
    extend: 'Ext.app.Controller',

    refs: [
        { ref:'grid', selector:'multi-edit-main-grid' },
        { ref:'pagingToolBar', selector:'multi-edit-main-grid pagingtoolbar' },
        { ref:'queryField', selector:'query-field' },
        { ref:'navigationGrid', selector:'multi-edit-navigation-grid' }
    ],


    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @return void
     */
    init: function () {
        var me = this;

        me.control({
            'multi-edit-navigation-grid': {
                toggleFavorite: me.onToggleFavorite
            }
        });

        me.subApplication.on('grammarProcessed', function(grammar) { this.grammar = grammar; }, me);


        me.callParent(arguments);
    },

    /**
     * Callback called, when the users clicks on a star in the filter view. Favorite-state will then be toggled
     *
     * @param rowIndex
     */
    onToggleFavorite: function(rowIndex) {
        var me = this,
            store = me.subApplication.filterStore,
            record = store.getAt(rowIndex);

        record.set('isFavorite', !record.get('isFavorite'));

        record.save({
            success: function() {
                me.subApplication.filterStore.load();
            }

        });

    }

});
//
<?php }} ?>