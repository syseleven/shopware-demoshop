<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:30
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article_list/view/main/navigation_grid.js" */ ?>
<?php /*%%SmartyHeaderCode:19776811257a24c327a0949-85770500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfe487c1910abf99392271e31869cd853ca4649b' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article_list/view/main/navigation_grid.js',
      1 => 1469447990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19776811257a24c327a0949-85770500',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c328acfc8_08340701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c328acfc8_08340701')) {function content_57a24c328acfc8_08340701($_smarty_tpl) {?>/**
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
 * shopware AG (c) 2013. All rights reserved.
 */

//
//
Ext.define('Shopware.apps.ArticleList.view.main.NavigationGrid', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.multi-edit-navigation-grid',

    /**
     * Do not show the grid's column headers
     */
    hideHeaders: true,

    border: 0,

    snippets: {
        search: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search','default'=>'Search','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    initComponent: function () {
        var me = this;

        me.toolTipTemplate = "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'filter'/'tooltip','default'=>'<b>Description:</b><br>[0]','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'filter'/'tooltip','default'=>'<b>Description:</b><br>[0]','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<b>Beschreibung:</b><br>[0]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'filter'/'tooltip','default'=>'<b>Description:</b><br>[0]','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"; //<br><br><b>Abfrage:</b><br>[1]

        me.columns = me.getColumns();

        me.features = me.getFeatures();

        me.tbar = me.getToolbar();

        me.addEvents(
            'loadFilter',
            'deleteFilter',
            'toggleFavorite'
        );

        me.registerEventHandlers();

        me.callParent(arguments);
    },


    /**
     * Register events
     */
    registerEventHandlers: function () {
        var me = this;

        me.on('cellclick', function (grid, td, cellIndex, record, tr, rowIndex, e, eOpts) {
            if (cellIndex != 1) {
                return;
            }
            me.fireEvent('loadFilter', record);
        });
    },

    /**
     * Return the columns of the grid
     */
    getColumns: function () {
        var me = this;

        return [
            me.getFavoriteActionColumn(),
            me.getLabelColumn(),
            me.getOperationActionColumn()
        ];
    },

    /**
     *  Add grouping feature
     */
    getFeatures: function () {
        return [
            {
                ftype: 'grouping',
                groupHeaderTpl: '{name} ({rows.length})'
            }
        ];
    },

    /**
     *  Get the column which shows the label of each filter
     */
    getLabelColumn: function () {
        var me = this;

        return {
            flex: 1,
            dataIndex: 'name',
            renderer: function (value, meta, record) {
                meta.tdAttr = 'data-qtip="' + Ext.String.format(me.toolTipTemplate, record.get('description').replace(/"/g, ''), record.get('filterString').replace(/"/g, '')) + '"';

                return value;
            }
        };
    },

    /**
     *  Get column which shows the button for (un)staring a filter
     */
    getFavoriteActionColumn: function () {
        var me = this;

        return {
            xtype: 'actioncolumn',
            width: 25,
            items: [
                {
                    iconCls: 'sprite-star-empty',
                    tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'makeFavorite','default'=>'Mark as favorite','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'makeFavorite','default'=>'Mark as favorite','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Als Favorit markieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'makeFavorite','default'=>'Mark as favorite','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'editFilters'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
                    handler: function (view, rowIndex, colIndex, item) {
                        me.fireEvent('toggleFavorite', rowIndex);
                    },
                    /*<?php }?>*/
                    getClass: function (value, metaData, record) {
                        if (record.get('isFavorite')) {
                            return 'x-hide-display';
                        }
                    }
                },
                {
                    iconCls: 'sprite-star',
                    tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'undoFavorite','default'=>'Unmark as favorite','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'undoFavorite','default'=>'Unmark as favorite','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nicht mehr als Favorit markieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'undoFavorite','default'=>'Unmark as favorite','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'editFilters'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                    handler: function (view, rowIndex, colIndex, item) {
                        me.fireEvent('toggleFavorite', rowIndex);
                    },
                    /*<?php }?>*/
                    getClass: function (value, metaData, record) {
                        if (!record.get('isFavorite')) {
                            return 'x-hide-display';
                        }
                    }
                }

            ]
        };
    },

    /**
     *  Get column for operations like edit / delete filter
     */
    getOperationActionColumn: function () {
        var me = this;

        return {
            /**
             * Special column type which provides
             * clickable icons in each row
             */
            xtype: 'actioncolumn',
            width: 50,
            items: [
                {
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'editFilters'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>*/
                    iconCls: 'sprite-pencil',
                    action: 'editFilter',
                    tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'editFilter','default'=>'Edit filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'editFilter','default'=>'Edit filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter bearbeiten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'editFilter','default'=>'Edit filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    handler: function (view, rowIndex, colIndex, item) {
                        me.fireEvent('editFilter', rowIndex);
                    }
                    /*<?php }?>*/
                },
                {
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'deleteFilters'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>*/
                    iconCls: 'sprite-minus-circle-frame',
                    action: 'deleteFilter',
                    tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    handler: function (view, rowIndex, colIndex, item, e) {
                        me.fireEvent('deleteFilter', rowIndex);
                    }
                    /*<?php }?>*/
                }
            ]
        };
    },

    /**
     * Creates the grid toolbar
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getToolbar: function () {
        var me = this, buttons = [];

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'createFilters'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>*/
        buttons.push({
            xtype: 'button',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'addFilter','default'=>'Add filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter','default'=>'Add filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Neuer Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter','default'=>'Add filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'add',
            action: 'addFilter',
            cls: 'small secondary',
            flex: 1
//            iconCls: 'sprite-plus-circle-frame'
        });
        /*<?php }?>*/
        buttons.push({
            xtype: 'tbfill'
        });
        return Ext.create('Ext.toolbar.Toolbar', {
            ui: 'shopware-ui',
            items: buttons
        });
    }
});
//
<?php }} ?>