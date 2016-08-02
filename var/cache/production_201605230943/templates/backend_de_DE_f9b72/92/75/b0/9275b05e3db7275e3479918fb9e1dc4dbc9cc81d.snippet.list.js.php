<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:12
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/order/controller/list.js" */ ?>
<?php /*%%SmartyHeaderCode:1623852157a06338d947a4-19626559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9275b05e3db7275e3479918fb9e1dc4dbc9cc81d' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/order/controller/list.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623852157a06338d947a4-19626559',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06338dcf929_82456824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06338dcf929_82456824')) {function content_57a06338dcf929_82456824($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Controller - Order list backend module
 *
 * The shopware order list controller handles all actions around the order list.
 * Listeners:
 *  - Search field => Fires when the user insert a search string into the search field to filter the grid store
 */
//
Ext.define('Shopware.apps.Order.controller.List', {

    /**
     * Defines that this component is a extJs controller extension
     * @string
     */
    extend:'Ext.app.Controller',

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        successTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save'/'success_title','default'=>'Successful','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save'/'success_title','default'=>'Successful','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save'/'success_title','default'=>'Successful','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        failureTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'save'/'error_title','default'=>'Error','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save'/'error_title','default'=>'Error','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'save'/'error_title','default'=>'Error','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        changeStatus: {
            successMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'status'/'success','default'=>'The status has been changed successfully','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'status'/'success','default'=>'The status has been changed successfully','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der Status wurde erfolgreich geändert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'status'/'success','default'=>'The status has been changed successfully','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            failureMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'status'/'failure','default'=>'An error has occurred while changing the status.','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'status'/'failure','default'=>'An error has occurred while changing the status.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler beim Ändern des Status.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'status'/'failure','default'=>'An error has occurred while changing the status.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        deleteOrder: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_order'/'title','default'=>'Delete selected order','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'title','default'=>'Delete selected order','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ausgewählte Bestellungen löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'title','default'=>'Delete selected order','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_order'/'message','default'=>'Are you sure you want to delete the selected order: ','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'message','default'=>'Are you sure you want to delete the selected order: ','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Soll die ausgewählte Bestellung wirklich gelöscht werden: <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'message','default'=>'Are you sure you want to delete the selected order: ','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            successTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_order'/'success_message','default'=>'Successful','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'success_message','default'=>'Successful','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'success_message','default'=>'Successful','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            successMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_order'/'success_title','default'=>'Order has been removed','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'success_title','default'=>'Order has been removed','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellung wurde entfernt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'success_title','default'=>'Order has been removed','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            failureTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_order'/'error_title','default'=>'Failure','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'error_title','default'=>'Failure','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'error_title','default'=>'Failure','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            failureMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_order'/'error_message','default'=>'An error has occurred while deleting:','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'error_message','default'=>'An error has occurred while deleting:','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Beim Löschen ist ein Fehler aufgetreten:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_order'/'error_message','default'=>'An error has occurred while deleting:','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        deletePosition: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_position'/'title','default'=>'Delete selected order position','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'title','default'=>'Delete selected order position','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lösche die gewählte Bestellposition<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'title','default'=>'Delete selected order position','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_position'/'message','default'=>'Are you sure you want to delete the selected order: ','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'message','default'=>'Are you sure you want to delete the selected order: ','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Soll die Position der Bestellung wirklich gelöscht werden: <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'message','default'=>'Are you sure you want to delete the selected order: ','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            successTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_position'/'success_message','default'=>'Successful','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'success_message','default'=>'Successful','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'success_message','default'=>'Successful','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            successMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_position'/'success_title','default'=>'Order position has been removed','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'success_title','default'=>'Order position has been removed','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestell-Position wurde entfernt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'success_title','default'=>'Order position has been removed','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            failureTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_position'/'error_title','default'=>'Error','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'error_title','default'=>'Error','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'error_title','default'=>'Error','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            failureMessage:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_position'/'error_message','default'=>'An error has occurred while deleting:','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'error_message','default'=>'An error has occurred while deleting:','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Während des Löschens ist ein Fehler aufgetreten:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_position'/'error_message','default'=>'An error has occurred while deleting:','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },

		growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage','default'=>'Order','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'Order','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'Order','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'

    },

    /**
    * all references to get the elements by the applicable selector
    */
    refs:[
       { ref:'orderListGrid', selector:'order-list-main-window order-list' },
       { ref:'orderPositionGrid', selector:'order-list-main-window order-position-grid' },
       { ref:'orderReceiptGrid', selector:'order-list-main-window order-list-navigation order-document-list' },
    ],

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @return void
     */
    init:function () {
        var me = this;

        me.control({
            'order-list-main-window order-list': {
                deleteOrder: me.onDeleteOrder,
                openCustomer: me.onOpenCustomer,
                showBatch: me.onShowBatch,
                selectionchange: me.onSelectionChange,
                saveOrder: me.onSaveOrder
            },
            'order-position-grid': {
                openArticle: me.onOpenArticle,
                deletePosition: me.onDeletePosition
            }
        });

        me.callParent(arguments);
    },

    /**
     * Called when the user clicks the 'Update' button in the rowEditor
     * saves the current order with its changes
     * @param editor
     * @param event
     * @param store
     */
    onSaveOrder: function(editor, event, store) {
        var me = this,
            record, rawData,
            grid = me.getOrderListGrid();

        record = store.getAt(event.rowIdx);
        if(record == null) {
            return;
        }

        record.save({
            callback:function (data, operation) {
                var records = operation.getRecords(),
                    record = records[0],
                    proxyReader = record.getProxy().getReader(),
                    rawData = proxyReader.rawData;

                if ( operation.success === true ) {
                    Shopware.Notification.createGrowlMessage(me.snippets.successTitle, me.snippets.changeStatus.successMessage, me.snippets.growlMessage);
                    record.set('invoiceAmount', rawData.data.invoiceAmount);

                    //Check if a status mail is created and create a model with the returned data and open the mail window.
                    if (!Ext.isEmpty(rawData.data.mail) && !Ext.isEmpty(proxyReader.jsonData.data.mail.content)) {
                        var mail = Ext.create('Shopware.apps.Order.model.Mail', rawData.data.mail);
                        me.showOrderMail(mail)
                    }

                } else {
                    Shopware.Notification.createGrowlMessage(me.snippets.failureTitle, me.snippets.changeStatus.failureMessage + '<br> ' + rawData.message, me.snippets.growlMessage)
                }
                grid.getSelectionModel().deselectAll(false);
            }
        });
    },

    /**
     * Creates the batch window with a special mode, so only the mail panel will be displayed.
     *
     * @param mail
     */
    showOrderMail: function(mail) {
        var me = this;

        //open the order listing window
        me.mainWindow = me.getView('mail.Window').create({
            mail: mail
        }).show();
    },

    onShowBatch: function(grid) {
        var me = this;
        var records = grid.getSelectionModel().getSelection();
        //open the order listing window
        me.mainWindow = me.getView('batch.Window').create({
            orderStatusStore: grid.orderStatusStore,
            records: records
        }).show();
    },

    onSelectionChange: function(selectionModel, selected, eOpts) {
        var me = this,
            positionGrid = me.getOrderPositionGrid(),
            receiptStore = Ext.create('Ext.data.Store', { model: 'Shopware.apps.Order.model.Receipt' }),
            positionStore = Ext.create('Ext.data.Store', { model: 'Shopware.apps.Order.model.Position' }),
            receiptGrid = me.getOrderReceiptGrid(),
            record = null;

        if (Ext.isArray(selected)) {
            record = selected[selected.length-1];
        } else {
            record = selected;
        }

        if (record instanceof Ext.data.Model && record.getReceipt() instanceof Ext.data.Store) {
            receiptStore = record.getReceipt();
        }
        if (record instanceof Ext.data.Model && record.getPositions() instanceof Ext.data.Store) {
            positionStore = record.getPositions();
        }

        receiptGrid.reconfigure(receiptStore);
        positionGrid.reconfigure(positionStore);

    },


    /**
     * Event listener method which fired when the user clicks the delete button
     * in the order list to delete a single order.
     * @param record
     * @return void
     */
    onDeleteOrder:function (record) {
        var me = this,
            store = me.subApplication.getStore('Order'),
            message = me.snippets.deleteOrder.message + ' ' + record.get('number'),
            title = me.snippets.deleteOrder.title;

        // we do not just delete - we are polite and ask the user if he is sure.
        Ext.MessageBox.confirm(title, message, function (response) {
            if ( response !== 'yes' ) {
                return;
            }
            record.destroy({
                callback: function(data, operation) {
                    var records = operation.getRecords(),
                        record = records[0],
                        rawData = record.getProxy().getReader().rawData;

                    if ( operation.success === true ) {
                        Shopware.Notification.createGrowlMessage(me.snippets.deleteOrder.successTitle,me.snippets.deleteOrder.successMessage, me.snippets.growlMessage);
                    } else {
                        Shopware.Notification.createGrowlMessage(me.snippets.deleteOrder.failureTitle, me.snippets.deleteOrder.failureMessage + ' ' + rawData.message, me.snippets.growlMessage);
                    }
                    store.load();
                }
            });
        });
    },

    /**
     * Event listener method which fired when the user clicks the customer button
     * in the order list to show the customer detail page.
     *
     * @param [Ext.data.Model] record - The row record
     */
    onOpenCustomer: function(record) {
        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.Customer',
            action: 'detail',
            params: {
                customerId: record.get('customerId')
            }
        });
    },

    /**
     * Event listener method which is fired when the user clicks the
     * action column icon to open the article detail page of the order position article.
     *
     * @param [Ext.data.Model] record - The row record
     */
    onOpenArticle: function(record) {
        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.Article',
            action: 'detail',
            params: {
                articleId: record.get('articleId')
            }
        });
    },


    /**
     * Event listener method which is fired when the user clicks the
     * action column icon to delete a single order position.
     *
     * @param [Ext.data.Model] record - The row record
     * @param [Ext.data.Store] store - The position store
     * @param [object] options - can contain an callback function
     * @callback Return parameters order, position, store
     */
    onDeletePosition: function(position, store, options) {
        var me = this,
            orderPositionGrid = me.getOrderPositionGrid(),
            order = me.subApplication.getStore('Order').getById(position.get('orderId')),
            message = me.snippets.deletePosition.message + ' ' + order.get('number'),
            title = me.snippets.deletePosition.title;

        // we do not just delete - we are polite and ask the user if he is sure.
        Ext.MessageBox.confirm(title, message, function (response) {
            if ( response !== 'yes' ) {
                return;
            }
            if (orderPositionGrid) {
                orderPositionGrid.setLoading(true);
            }
            position.destroy({
                params: {
                    orderID: position.get('orderId')
                },
                callback: function(data, operation) {
                    var records = operation.getRecords(),
                        record = records[0],
                        rawData = record.getProxy().getReader().rawData;

                    if (orderPositionGrid) {
                        orderPositionGrid.setLoading(true);
                    }
                    if ( operation.success === true ) {
                        Shopware.Notification.createGrowlMessage(me.snippets.deletePosition.successTitle,me.snippets.deletePosition.successMessage, me.snippets.growlMessage);

                        store.remove(position);
                        order.set('invoiceAmount', rawData.data.invoiceAmount);
                        if (options !== Ext.undefined && Ext.isFunction(options.callback)) {
                            options.callback(order);
                        }

                    } else {
                        Shopware.Notification.createGrowlMessage(me.snippets.deletePosition.failureTitle, me.snippets.deletePosition.failureMessage + ' ' + rawData.message, me.snippets.growlMessage);
                    }
                }
            });
        });
    }

});
//
<?php }} ?>