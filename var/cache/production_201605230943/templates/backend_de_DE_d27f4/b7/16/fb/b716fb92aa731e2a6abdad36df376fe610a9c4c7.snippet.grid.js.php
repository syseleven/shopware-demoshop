<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:44
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article_list/view/add_filter/grid.js" */ ?>
<?php /*%%SmartyHeaderCode:181675691457a251a447a2b4-07407189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b716fb92aa731e2a6abdad36df376fe610a9c4c7' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article_list/view/add_filter/grid.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181675691457a251a447a2b4-07407189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a45171e5_27048338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a45171e5_27048338')) {function content_57a251a45171e5_27048338($_smarty_tpl) {?>/**
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

//
//
Ext.define('Shopware.apps.ArticleList.view.AddFilter.Grid', {
    extend: 'Ext.grid.Panel',

    alias: 'widget.multi-edit-add-filter-grid',

    style: 'border: 0;',

    /**
     * Constructor of the Ext.grid.Panel
     */
    initComponent: function() {
        var me = this;

        me.tbar = me.getToolbar();
        me.columns = me.getColumns();
        me.bbar = me.getBottomToolbar();

        me.setupRowEditor();

        me.addEvents(
            /**
             * Called when a row was edited
             */
            'editRow',

            /**
             * Called when a row is deleted
             */
            'deleteRow',

            /**
             * Called when an editor needs to be set
             */
            'setEditor'
        );

        me.callParent(arguments);
    },

    /**
     * Setup the rowEditing plugin
     */
    setupRowEditor: function() {
        var me = this;

        me.rowEditing = Ext.create('Ext.grid.plugin.RowEditing', {
            clicksToEdit: 1
        });
        me.plugins = me.rowEditing;

        // Do not edit the row if the actioncolumn was clicked
        me.rowEditing.on('beforeedit', function(editor, context, eOpts) {
            if (context.colIdx > 2) {
                context.cancel = true;
                return;
            }
        });

        me.rowEditing.on('edit', function(editor, context, eOpts) {
            me.fireEvent('editRow', context.rowIdx);
        });

        // Set the operations before edit
        me.rowEditing.on('beforeedit', function(editor, context, eOpts) {
            var me = this,
                column = context.record.get('column'),
                colRecord = me.columnStore.findRecord('name', column);

            if (!colRecord) {
                colRecord = me.columnStore.getAt(0);
            }

            me.setOperatorsForCurrentRecord(colRecord, me.operatorStore);

            me.fireEvent('setEditorBeforeEdit', me.columns, context.record);
        }, me);
    },

    /**
     * Creates the grid toolbar
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getToolbar: function() {
        var me = this, buttons = [];

        buttons.push(
            Ext.create('Ext.button.Button', {
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add','default'=>'Add','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add','default'=>'Add','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hinzufügen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add','default'=>'Add','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action: 'addSimpleFilter',
                name: 'addSimpleFilter',
                iconCls:'sprite-plus-circle-frame',
                handler: function() {
                    me.fireEvent('addSimpleFilter');
                }
            })
        );


        buttons.push('->');

        buttons.push({
            xtype: 'button',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'addFilter'/'run','default'=>'Execute','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter'/'run','default'=>'Execute','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ausführen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter'/'run','default'=>'Execute','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'run-button-simple',
            iconCls: 'sprite-magnifier--arrow',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'runFilter','default'=>'Immediately show matching articles','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'runFilter','default'=>'Immediately show matching articles','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter ausführen und passende Produkte direkt anzeigen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'runFilter','default'=>'Immediately show matching articles','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled: true,
            handler: function () {
                me.fireEvent('filter');
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            ui: 'shopware-ui',
            items: buttons
        });
    },

    /**
     * Creates the grid botoom toolbar
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getBottomToolbar: function() {
        var me = this, buttons = [];

        buttons.push(
            Ext.create('Ext.form.Label', {
                name: 'status-label-simple',
                text: ''
            })
        );

        return Ext.create('Ext.toolbar.Toolbar', {
            ui: 'shopware-ui',
            items: buttons
        });
    },

    /**
     * Return columns for the grid panel
     *
     * @returns Array
     */
    getColumns: function()  {
        var me = this;

        return [{
            flex: 1,
            header: 'Column',
            editor: {
                xtype: 'combo',
                store: me.columnStore,
                displayField: 'name',
                forceSelection: true,
                editable: false,
                queryMode: 'local',
                listeners: {
                    'select': { fn:function(combo, records, e) {
                        me.fireEvent('setEditor', me.columns, records[0], 'column');

                        me.setOperatorsForCurrentRecord(records[0], me.operatorStore);
                    }, scope: this }
                }
            },
            dataIndex: 'column',
            menuDisabled: true,
            sortable: false
        },{
            flex: 1,
            header: 'Operator',
            editor: me.getDefaultOperatorEditor(),
            dataIndex: 'operator',
            menuDisabled: true,
            sortable: false
        },{
            flex: 1,
            editor: me.getDefaultValueEditor(),
            header: 'Value',
            dataIndex: 'value',
            menuDisabled: true,
            sortable: false
        }, {
            /**
             * Special column type which provides
             * clickable icons in each row
             */
            xtype: 'actioncolumn',
            width: 25,
            items: [
                {
                    iconCls: 'sprite-minus-circle-frame',
                    action: 'deleteFilter',
                    tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'deleteFilter','default'=>'Delete filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    handler: function (view, rowIndex, colIndex, item, e) {
                        me.fireEvent('deleteRow', rowIndex);
                    }
                }
            ]
        }];
    },

    /**
     * Returns the default editor for the operator column
     *
     * @returns Ext.form.field.Combo
     */
    getDefaultOperatorEditor: function() {
        var me = this;

        return Ext.create('Ext.form.field.ComboBox', {
            xtype: 'combo',
            queryMode: 'local',
            editable: false,
            store: me.operatorStore,
            displayField: 'name',
            forceSelection: true,
            listeners: {
                'select': { fn:function(combo, records, e) {
                    me.fireEvent('setEditor', me.columns, records[0], 'operator');
                }, scope: this }
            }
        });
    },

    /**
     * Returns the default editor for the value column
     *
     * @returns Ext.form.field.Text
     */
    getDefaultValueEditor: function() {
        var me = this;

        Ext.define("Post", {
            extend: 'Ext.data.Model',
            fields: [
                { name: 'id' },
                { name: 'title'},
                { name: 'addQuotes', defaultValue: false}
            ]
        });

        me.valueStore = Ext.create('Ext.data.Store', {
            pageSize: 10,
            model: 'Post',
            remoteFilter: true,
            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/ArticleList/getValues';?>',
                reader: {
                    type: 'json',
                    root:'data',
                    totalProperty: 'total'
                }
            }
        });

        return Ext.create('Ext.form.field.ComboBox', {
            queryMode: "remote",
            queryCaching: true,
            store: me.valueStore,
            displayField: 'title',
            valueField: 'title',
            pageSize: 10,

            listeners: {
                beforequery: function(e) {
                    var attribute = e.combo.ownerCt.form._fields.items[0].rawValue;
                    var operator = e.combo.ownerCt.form._fields.items[1].rawValue;

                    e.combo.store.getProxy().extraParams = { resource: 'product', attribute: attribute, operator: operator};
                }
            }
        });
    },

    /**
     * Show operators depending on the current column
     *
     * @param record
     * @param operatorStore
     */
    setOperatorsForCurrentRecord: function(record, operatorStore) {
        var me = this,
            i, operators;

        operatorStore.removeAll();

        operators = me.filterableColumns[record.get('name')];
        Ext.each(operators, function(operator) {
            if (operator != 'IN' ) {
                operatorStore.add({ name: operator });
            }
        });
    }

});
//
<?php }} ?>