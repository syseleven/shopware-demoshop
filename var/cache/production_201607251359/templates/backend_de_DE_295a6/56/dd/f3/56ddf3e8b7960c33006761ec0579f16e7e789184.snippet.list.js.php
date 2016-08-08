<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:31
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article/view/category/list.js" */ ?>
<?php /*%%SmartyHeaderCode:124559757857a24c33822326-21177560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ddf3e8b7960c33006761ec0579f16e7e789184' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article/view/category/list.js',
      1 => 1469447990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124559757857a24c33822326-21177560',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c3389e8e1_55328037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c3389e8e1_55328037')) {function content_57a24c3389e8e1_55328037($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage List
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Article detail page - Category
 * The category list component contains the grid panel for the category listing which display all already assigned categories.
 * Each row have an action column to remove the category.
 */
//
//
Ext.define('Shopware.apps.Article.view.category.List', {
    /**
     * Define that the category list is an extension of the Ext.grid.Panel
     * @string
     */
    extend:'Ext.grid.Panel',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-category-list',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'category-list',
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'list'/'title','default'=>'Assigned categories','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'title','default'=>'Assigned categories','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zugewiesene Kategorien<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'title','default'=>'Assigned categories','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'list'/'name_column','default'=>'Category name','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'name_column','default'=>'Category name','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategoriename<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'name_column','default'=>'Category name','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        delete: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'list'/'delete_tooltip','default'=>'Remove entry','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'delete_tooltip','default'=>'Remove entry','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Eintrag löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'delete_tooltip','default'=>'Remove entry','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        toolbar: {
            delete: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'list'/'toolbar'/'delete_button','default'=>'Remove all selected entries','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'toolbar'/'delete_button','default'=>'Remove all selected entries','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ausgewählte Zuweisungen löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'list'/'toolbar'/'delete_button','default'=>'Remove all selected entries','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            search: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search','default'=>'Search...','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search...','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suche...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search...','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
	 * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
	 *
	 * @return void
	 */
    initComponent:function () {
        var me = this;

        me.store = me.article.getCategory();
        me.title = me.snippets.title;
        me.columns = me.getColumns();
        me.toolbar = me.createToolbar();
        me.dockedItems = Ext.clone(me.dockedItems);
        me.dockedItems = [ me.toolbar, me.pagingbar ];
        me.selModel = me.getGridSelModel();

        me.registerEvents();
        me.addCls(Ext.baseCSSPrefix + 'free-standing-grid');
        me.callParent(arguments);
    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
    	this.addEvents(
    		/**
    		 * Event will be fired when the user clicks the delete button in the
             * grid toolbar to remove all selected entries
    		 *
    		 * @event
    		 * @param [array] records - The checked grid records
    		 */
    		'removeCategories'
    	);
    },

    /**
     * Creates the grid selection model for checkboxes
     *
     * @return [Ext.selection.CheckboxModel] grid selection model
     */
    getGridSelModel:function () {
    	var me = this;

    	return Ext.create('Ext.selection.CheckboxModel', {
    		listeners:{
    			// Unlocks the save button if the user has checked at least one checkbox
    			selectionchange:function (sm, selections) {
    				if (me.deleteButton === null) {
    					return;
    				}
    				me.deleteButton.setDisabled(selections.length === 0);
    			}
    		}
    	});
    },

    /**
     * Creates the toolbar for the category list.
     * @return Ext.toolbar.Toolbar
     */
    createToolbar: function() {
        var me = this;

        me.deleteButton = Ext.create('Ext.button.Button', {
            iconCls:'sprite-minus-circle-frame',
            text:me.snippets.toolbar.delete,
            disabled:true,
            handler: function() {
                var records = me.selModel.getSelection();
                me.fireEvent('removeCategories', records);
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock:'top',
            items:[
                me.deleteButton
            ]
        });
    },

    /**
     * Creates the columns for the grid panel.
     * @return array
     */
    getColumns: function() {
       var me = this;

        return [
            {
                header: me.snippets.name,
                dataIndex: 'name',
                flex: 1
            }, {
                xtype: 'actioncolumn',
                width: 25,
                items: [
                    {
                        iconCls: 'sprite-minus-circle-frame',
                        action: 'delete',
                        tooltip: me.snippets.delete,
                        handler: function (view, rowIndex, colIndex, item, opts, record) {
                            var records = [ record ];

                            me.fireEvent('removeCategories', records);
                        }
                    }
                ]
            }
        ];
    }

});
//
<?php }} ?>