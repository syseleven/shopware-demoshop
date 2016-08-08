<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:45:23
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/model/variant.js" */ ?>
<?php /*%%SmartyHeaderCode:89310569757a24c2c4c6324-67145368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12a6a92db3731a21e61c55586482128f75a4639d' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/model/variant.js',
      1 => 1470256654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89310569757a24c2c4c6324-67145368',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c2c4d38f1_62319881',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c2c4d38f1_62319881')) {function content_57a24c2c4d38f1_62319881($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The article_with_variants model is based on the article model. This model is able to hold article variants.
 */
//
Ext.define('Shopware.apps.Base.model.Variant', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'articleId', type: 'int' },
        { name: 'additionalText', type: 'string' },
        { name: 'supplierName', type: 'string'},
        { name: 'supplierId', type: 'int' },
        { name: 'ordernumber', type: 'string' },
        { name: 'inStock', type: 'string' },
        { name: 'active', type: 'int' },


        //mapping fields for ExtJS
        { name: 'number', type: 'string', mapping: 'ordernumber' },
    ]
});
//

<?php }} ?>