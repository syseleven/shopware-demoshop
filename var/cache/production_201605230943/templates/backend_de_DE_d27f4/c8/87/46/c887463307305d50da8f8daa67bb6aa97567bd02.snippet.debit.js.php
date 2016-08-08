<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:43
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/order/model/debit.js" */ ?>
<?php /*%%SmartyHeaderCode:65876368357a251a3b26d03-38895666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c887463307305d50da8f8daa67bb6aa97567bd02' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/order/model/debit.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65876368357a251a3b26d03-38895666',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a3b2f388_98658312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a3b2f388_98658312')) {function content_57a251a3b2f388_98658312($_smarty_tpl) {?>/**
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
 */
//
Ext.define('Shopware.apps.Order.model.Debit', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'customerId', type: 'int', useNull: true },
        { name: 'account', type:'string' },
        { name: 'bankCode', type:'string' },
        { name: 'bankName', type:'string' },
        { name: 'accountHolder', type:'string' }
    ]
});
//

<?php }} ?>