<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:29
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/customer/model/payment_data.js" */ ?>
<?php /*%%SmartyHeaderCode:73645752357a24c31c58f72-00199512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3806a86859c86d691f31b7eb5d5ac660f2f1dd42' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/customer/model/payment_data.js',
      1 => 1469447990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73645752357a24c31c58f72-00199512',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c31cb0328_69910303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c31cb0328_69910303')) {function content_57a24c31cb0328_69910303($_smarty_tpl) {?>/**
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
 * The payment data model represents a single data row of the s_user_debit or
 * the Shopware\Models\Customer\PaymentData doctrine model which contains all data about the
 * customer payment data.
 */
//
Ext.define('Shopware.apps.Customer.model.PaymentData', {

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
        { name:'accountNumber', type:'string' },
        { name:'bankCode', type:'string' },
        { name:'bankName', type:'string' },
        { name:'accountHolder', type:'string' },
        { name:'bic', type:'string' },
        { name:'iban', type:'string' },
        { name:'useBillingData', type:'boolean' }
    ]
});
//
<?php }} ?>