<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:30
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/order/model/position.js" */ ?>
<?php /*%%SmartyHeaderCode:43274877457a24c3210f9f2-20047542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a14619f6de9397ad6d3a1957ce161cc0bf9535' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/order/model/position.js',
      1 => 1469447990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43274877457a24c3210f9f2-20047542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c321c2426_38850996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c321c2426_38850996')) {function content_57a24c321c2426_38850996($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The list model represents a single row for the order list grid.
 * The model data are concat by the different order associations.
 */
//
Ext.define('Shopware.apps.Order.model.Position', {

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
        { name: 'id', type:'int' },
        { name: 'orderId', type:'int' },
        { name: 'mode', type:'int' },
        { name: 'articleId', type:'int' },
        { name: 'articleNumber', type:'string' },
        { name: 'articleName', type:'string' },
        { name: 'quantity', type:'int' },
        { name: 'statusId', type:'int' },
        { name: 'statusDescription', type:'string' },
        { name: 'price', type:'float' },
        { name: 'taxId', type:'int' },
        { name: 'taxRate', type:'float' },
        { name: 'taxDescription', type:'string' },
        { name: 'inStock', type:'int' },
        {
            name: 'total',
            type:'float',
            convert: function(value, record) {
                if (!Ext.isNumeric(record.get('price'))) {
                    return record.get('price');
                }
                return record.get('price') * record.get('quantity');
            }
        }
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
            destroy:'<?php echo '/backend/Order/deletePosition/targetField/positions';?>',
            create:'<?php echo '/backend/Order/savePosition';?>',
            update:'<?php echo '/backend/Order/savePosition';?>'
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