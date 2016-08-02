<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:12
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/article_list/controller/article_crud.js" */ ?>
<?php /*%%SmartyHeaderCode:64904830057a06338ce4cb3-55702491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfbb61daf28fb39ffb4b0fdbf194b5fad2032232' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/article_list/controller/article_crud.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64904830057a06338ce4cb3-55702491',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06338d12da8_40286726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06338d12da8_40286726')) {function content_57a06338d12da8_40286726($_smarty_tpl) {?>/**
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
 * This controller takes care of all CRUD actions for products
 */
//
//
Ext.define('Shopware.apps.ArticleList.controller.ArticleCrud', {

    /**
     * The parent class that this class extends.
     * @string
     */
    extend: 'Ext.app.Controller',

    refs: [
        { ref:'grid', selector:'multi-edit-main-grid' },
        { ref:'showVariantsCheckbox', selector:'multi-edit-category-tree checkbox[name=displayVariants]' }
    ],

    /**
     * Contains all snippets for the component.
     * @object
     */
    snippets: {
        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Article<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl_message','default'=>'Article','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        messages: {
            successTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'success','default'=>'Success','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'success','default'=>'Success','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'success','default'=>'Success','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            deleteSuccess: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'delete_success','default'=>'The selected articles have been removed','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_success','default'=>'The selected articles have been removed','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Die gewählten Artikel wurden gelöscht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_success','default'=>'The selected articles have been removed','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            deleteArticleTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'delete_article_title','default'=>'Delete selected Article(s)?','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article_title','default'=>'Delete selected Article(s)?','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gewählte Artikel löschen?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article_title','default'=>'Delete selected Article(s)?','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            deleteArticle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'messages'/'delete_article','default'=>'Are you sure you want to delete the selected Article(s)?','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article','default'=>'Are you sure you want to delete the selected Article(s)?','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Möchten Sie die gewählten Artikel wirklich löschen?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'messages'/'delete_article','default'=>'Are you sure you want to delete the selected Article(s)?','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

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
            'multi-edit-main-grid': {
                deleteProduct: me.onDeleteArticle,
                deleteMultipleProducts: me.onDeleteMultipleArticles,
                saveProduct: me.onSaveProduct
            }
        });

        me.callParent(arguments);
    },

    /**
     * @param record
     */
    onDeleteArticle: function(record) {
        var me    = this,
            store = me.getGrid().getStore();

        Ext.MessageBox.confirm(me.snippets.messages.deleteArticleTitle, me.snippets.messages.deleteArticle, function (response) {
            if (response !== 'yes') {
                return false;
            }
            record.destroy({
                callback: function() {
                    Shopware.Notification.createGrowlMessage(me.snippets.messages.successTitle, me.snippets.messages.deleteSuccess, me.snippets.growlMessage);
                    store.load();
                }
            });
        });
    },

    /**
     * @param records
     */
    onDeleteMultipleArticles: function(records) {
        var me    = this;

        if (records.length > 0) {
            // we do not just delete - we are polite and ask the user if he is sure.
            Ext.MessageBox.confirm(me.snippets.messages.deleteArticleTitle, me.snippets.messages.deleteArticle, function (response) {
                if ( response !== 'yes' ) {
                    return;
                }
                me.deleteMultipleRecords(records, function() {
                    var store = me.getGrid().getStore();
                    store.reload();

                    Shopware.Notification.createGrowlMessage(me.snippets.messages.successTitle, me.snippets.messages.deleteSuccess, me.snippets.growlMessage);
                });
            });
        }
    },

    /**
     * Will delete a list of records one after another and finally call the callback method
     *
     * @param records
     * @param callback
     */
    deleteMultipleRecords: function(records, callback) {
        var me = this,
            record = records.pop();

        record.destroy({
            callback: function () {
                if (records.length == 0) {
                    callback();
                } else {
                    me.deleteMultipleRecords(records, callback);
                }
            }
        })
    },


    /**
     * Called after the user edited a grow in the main grid
     *
     * @param editor
     * @param context
     */
    onSaveProduct: function(editor, context) {
        var me = this,
            record = context.record,
            isActiveChange = false,
            changes = record.getChanges();

        isActiveChange = typeof changes.Article_active !== 'undefined'
                         && record.raw.Article_active != changes.Article_active;

        record.save({
            params: {
                resource: 'product'
            },
            success: function(record, operation) {
                if (operation.success) {
                    Shopware.Notification.createGrowlMessage(
                            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'successTitle','default'=>'Success','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successTitle','default'=>'Success','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successTitle','default'=>'Success','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'successMessage','default'=>'Saved [0]','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successMessage','default'=>'Saved [0]','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] erfolgreich gespeichert.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successMessage','default'=>'Saved [0]','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', record.get('Article_name')),
                            'ArticleList',
                            'growl',
                            true
                    );

                    if (isActiveChange && me.getShowVariantsCheckbox().getValue()) {
                        // If the global product active flag has changed and the "show Variants" toggle is on,
                        // the store should reload to reflect this change to all related products
                        record.store.load();
                    } else {
                        // Update the modified record by the data, the controller returned
                        // This way we make sure, that the record shows the data which is stored
                        // in the database
                        Ext.each(Object.keys(record.getData()), function (key) {
                            record.set(key, operation.records[0].data[key]);
                        });
                    }

                }
            },
            failure: function(record, operation) {
                Shopware.Notification.createStickyGrowlMessage({
                    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'error','default'=>'Error','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'error','default'=>'Error','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'error','default'=>'Error','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es ist ein unbekannter Fehler aufgetreten, bitte überprüfen Sie Ihre Server-Logs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'unknownError','default'=>'An unknown error occurred, please check your server logs','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    log: true
                },
                'ArticleList');
            }

        });
    },

});
//
<?php }} ?>