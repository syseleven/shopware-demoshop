<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:29
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/customer/model/order.js" */ ?>
<?php /*%%SmartyHeaderCode:211527953757a24c31cf4587-60172100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0bf3e5ad546436fb1214ebede5a902738c1034c' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/customer/model/order.js',
      1 => 1469447990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211527953757a24c31cf4587-60172100',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c31db5057_33761358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c31db5057_33761358')) {function content_57a24c31db5057_33761358($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Customer list backend module.
 *
 * The order model represents a single data row of the s_order or the Shopware\Models\Order\Order
 * doctrine mode which contains the head data about a shop order.
 */
//
Ext.define('Shopware.apps.Customer.model.Order', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * Unique identifier field
     * @string
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name:'id', type:'int' },
        { name:'orderNumber', type:'string' },
        { name:'invoiceAmount', type:'string' },
        { name:'orderTime', type:'date' },

        { name:'paymentId', type:'int' },
        { name:'dispatchId', type:'int' },
        { name:'orderStatusId', type:'int' },
        { name:'paymentStatusId', type:'int' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api:{
            read:'<?php echo '/backend/customer/getOrders';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//
<?php }} ?>