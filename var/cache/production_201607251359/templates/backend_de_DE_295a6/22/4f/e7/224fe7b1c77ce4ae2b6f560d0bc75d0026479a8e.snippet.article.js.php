<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:45:23
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/model/article.js" */ ?>
<?php /*%%SmartyHeaderCode:9630996957a24c2c4b13c4-94345732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '224fe7b1c77ce4ae2b6f560d0bc75d0026479a8e' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/model/article.js',
      1 => 1470256654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9630996957a24c2c4b13c4-94345732',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c2c4c32a1_70519810',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c2c4c32a1_70519810')) {function content_57a24c2c4c32a1_70519810($_smarty_tpl) {?>/**
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
 * The article model represents a data row of the s_articles or the
 * Shopware\Models\Article\Article doctrine model. In addition to the
 * article data the article model contains the data for the first article detail
 * position and the data for the category to which the article was first assigned.
 */
//
Ext.define('Shopware.apps.Base.model.Article', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.Article',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name:'id', type:'int' },
        { name:'number', type:'string' },
        { name:'name', type:'string' },
        { name:'description', type:'string' },
        { name:'supplierName', type:'string' },
        { name:'supplierId', type:'int' },
        { name:'active', type:'int' },
        { name:'detailId', type:'int' },
        { name:'changeTime', type:'date' },
        { name:'inStock', type:'int' },

        { name:'label', type:'string' }
    ]
});
//

<?php }} ?>